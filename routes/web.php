<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'event' => config('event'),
    ]);
})->name('home');

Route::get('/pendaftaran', [RegistrationController::class, 'create'])
    ->name('registrations.create');
Route::get('/pendaftaran/tiket/{ticketCode}', [RegistrationController::class, 'ticket'])
    ->where('ticketCode', 'LB26-[A-Z0-9]{8}')
    ->name('registrations.ticket');
Route::post('/pendaftaran', [RegistrationController::class, 'store'])
    ->name('registrations.store');
