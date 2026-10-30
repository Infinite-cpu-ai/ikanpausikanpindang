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
Route::post('/pendaftaran', [RegistrationController::class, 'store'])
    ->name('registrations.store');
