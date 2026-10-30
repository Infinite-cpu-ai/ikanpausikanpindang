<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Mail\RegistrationConfirmation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class RegistrationController extends Controller
{
    public function create(): View
    {
        return view('registrations.create');
    }

    public function store(RegistrationRequest $request): RedirectResponse
    {
        $registration = $request->validated();

        Mail::to($registration['email'])->send(new RegistrationConfirmation($registration));

        return to_route('registrations.create')->with('registration_submitted', true);
    }
}
