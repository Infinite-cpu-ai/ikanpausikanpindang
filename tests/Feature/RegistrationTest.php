<?php

use App\Mail\RegistrationConfirmation;
use App\Models\Registration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportException;

uses(RefreshDatabase::class);

it('renders the registration form', function () {
    $response = $this->get('/pendaftaran');

    $response
        ->assertOk()
        ->assertSee('Amankan tempatmu di')
        ->assertSee('Laut Bercerita.')
        ->assertSee('Laki-laki')
        ->assertSee('Perempuan')
        ->assertSee('Other')
        ->assertSee('Kirim pendaftaran');
});

it('sends a confirmation email for valid registration data', function () {
    Mail::fake();

    $registration = [
        'name' => 'Budi Santoso',
        'email' => 'budi@example.com',
        'phone' => '08123456789',
        'gender' => 'male',
        'schedule' => ['sunday-14-morning', 'saturday-20-closing'],
        'notes' => 'Saya siap bergabung.',
        'agree' => '1',
    ];

    $response = $this->post('/pendaftaran', $registration);

    $response->assertRedirect();
    $response->assertRedirectContains('/pendaftaran/tiket/LB26-');
    Mail::assertSent(RegistrationConfirmation::class, function (RegistrationConfirmation $mail) use ($registration): bool {
        return $mail->hasTo($registration['email'])
            && $mail->registration['name'] === $registration['name']
            && $mail->registration['schedule'] === $registration['schedule'];
    });

    $storedRegistration = Registration::where('email', $registration['email'])->first();
    expect($storedRegistration)->not->toBeNull();

    $ticketResponse = $this->get(route('registrations.ticket', $storedRegistration->ticket_code));
    $ticketResponse
        ->assertOk()
        ->assertSee($storedRegistration->ticket_code)
        ->assertSee('Pendaftaran berhasil!');

    expect((new RegistrationConfirmation($registration))->envelope()->subject)
        ->toBe('🌊 Halo Budi Santoso, pendaftaran kamu berhasil 🫧');
});

it('returns a useful form error when confirmation email delivery fails', function () {
    Mail::shouldReceive('to')->once()->andThrow(
        new TransportException('SMTP unavailable')
    );

    $response = $this->from('/pendaftaran')->post('/pendaftaran', [
        'name' => 'Budi Santoso',
        'email' => 'budi@example.com',
        'phone' => '08123456789',
        'gender' => 'male',
        'schedule' => ['sunday-14-morning'],
        'agree' => '1',
    ]);

    $response
        ->assertRedirect('/pendaftaran')
        ->assertSessionHasErrors('email');
});

it('accepts a custom gender label when other is selected', function () {
    $registration = [
        'name' => 'Budi Santoso',
        'email' => 'budi@example.com',
        'phone' => '08123456789',
        'gender' => 'other',
        'gender_other' => 'Non-biner',
        'schedule' => ['sunday-14-morning'],
        'agree' => '1',
    ];

    Mail::fake();

    $response = $this->post('/pendaftaran', $registration);

    $response
        ->assertRedirectContains('/pendaftaran/tiket/LB26-')
        ->assertSessionHasNoErrors();
});

it('renders a polished confirmation email with registration details', function () {
    $registration = [
        'name' => 'Budi Santoso',
        'email' => 'budi@example.com',
        'phone' => '08123456789',
        'gender' => 'male',
        'schedule' => ['sunday-14-morning'],
        'notes' => 'Saya siap bergabung.',
        'ticket_code' => 'LB26-TEST1234',
    ];

    $registration['ticket_code'] = 'LB26-TEST1234';
    $html = (new RegistrationConfirmation($registration))->render();

    expect($html)
        ->toContain('Registrasi terkonfirmasi')
        ->toContain('IKANPAUS')
        ->toContain('IKANPINDANG')
        ->toContain('Festival laut &amp; konservasi')
        ->toContain('LB26-TEST1234')
        ->toContain('Buka tiket invitation')
        ->toContain('Pendaftaran berhasil!')
        ->toContain('Registrasi &amp; sarapan pesisir')
        ->toContain('Saya siap bergabung.')
        ->toContain('wave-transition')
        ->toContain('wave-transition-footer')
        ->toContain('background: #082f4d')
        ->not->toContain('@keyframes')
        ->not->toContain('animation:')
        ->not->toContain('🌊')
        ->not->toContain('🫧')
        ->not->toContain('○')
        ->not->toContain('〰');
});

it('rejects invalid registration data without sending email', function () {
    Mail::fake();

    $response = $this->from('/pendaftaran')->post('/pendaftaran', [
        'name' => '',
        'email' => 'not-an-email',
        'phone' => '',
        'gender' => 'unknown',
        'gender_other' => '',
        'schedule' => [],
        'agree' => '0',
    ]);

    $response
        ->assertRedirect('/pendaftaran')
        ->assertSessionHasErrors(['name', 'email', 'phone', 'gender', 'schedule', 'agree']);
    Mail::assertNothingSent();
});
