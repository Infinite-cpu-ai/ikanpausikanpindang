<?php

use App\Mail\RegistrationConfirmation;
use Illuminate\Support\Facades\Mail;

it('renders the registration form', function () {
    $response = $this->get('/pendaftaran');

    $response
        ->assertOk()
        ->assertSee('Amankan tempatmu di')
        ->assertSee('Laut Bercerita.')
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
    Mail::assertSent(RegistrationConfirmation::class, function (RegistrationConfirmation $mail) use ($registration): bool {
        return $mail->hasTo($registration['email'])
            && $mail->registration['name'] === $registration['name']
            && $mail->registration['schedule'] === $registration['schedule'];
    });
});

it('rejects invalid registration data without sending email', function () {
    Mail::fake();

    $response = $this->from('/pendaftaran')->post('/pendaftaran', [
        'name' => '',
        'email' => 'not-an-email',
        'phone' => '',
        'gender' => 'unknown',
        'schedule' => [],
        'agree' => '0',
    ]);

    $response
        ->assertRedirect('/pendaftaran')
        ->assertSessionHasErrors(['name', 'email', 'phone', 'gender', 'schedule', 'agree']);
    Mail::assertNothingSent();
});
