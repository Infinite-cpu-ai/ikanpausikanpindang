<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Mail\RegistrationConfirmation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class RegistrationController extends Controller
{
    public function create(): View
    {
        return view('registrations.create', [
            'event' => config('event'),
        ]);
    }

    public function store(RegistrationRequest $request): RedirectResponse
    {
        $registration = $request->validated();
        $registration['ticket_code'] = 'LB26-'.Str::upper(Str::random(8));

        try {
            Mail::to($registration['email'])->send(new RegistrationConfirmation($registration));
        } catch (TransportExceptionInterface $exception) {
            Log::error('Registration confirmation email could not be sent.', [
                'email' => $registration['email'],
                'exception' => $exception,
            ]);

            return back()
                ->withInput()
                ->withErrors(['email' => 'Pendaftaran belum selesai karena email konfirmasi gagal dikirim. Coba lagi atau gunakan email lain.']);
        }

        $ticket = [
            'code' => $registration['ticket_code'],
            'name' => $registration['name'],
            'email' => $registration['email'],
            'schedule' => $registration['schedule'],
        ];

        return to_route('registrations.create')
            ->with('registration_submitted', true)
            ->with('registration_ticket', $ticket);
    }
}
