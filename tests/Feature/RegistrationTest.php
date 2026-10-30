<?php

use App\Mail\RegistrationConfirmation;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportException;

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

    $response->assertRedirect('/pendaftaran');
    $response->assertSessionHas('registration_submitted', true);
    $response->assertSessionHas('registration_ticket.email', $registration['email']);
    $response->assertSessionHas('registration_ticket.code');
    Mail::assertSent(RegistrationConfirmation::class, function (RegistrationConfirmation $mail) use ($registration): bool {
        return $mail->hasTo($registration['email'])
            && $mail->registration['name'] === $registration['name']
            && $mail->registration['schedule'] === $registration['schedule'];
    });

    expect((new RegistrationConfirmation($registration))->envelope()->subject)
        ->toBe('Halo Budi Santoso, pendaftaran kamu berhasil');
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
        ->assertRedirect('/pendaftaran')
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
    ];

    $html = (new RegistrationConfirmation($registration))->render();

    expect($html)
        ->toContain('Registrasi terkonfirmasi')
        ->toContain('IKANPAUS')
        ->not->toContain('ikanpausikanpindang-mascot.jpeg')
        ->toContain('Sampai jumpa di laut.')
        ->toContain('Registrasi &amp; sarapan pesisir')
        ->toContain('Saya siap bergabung.');
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
