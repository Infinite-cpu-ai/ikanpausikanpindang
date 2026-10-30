<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email:rfc', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'gender' => ['required', 'in:male,female'],
            'schedule' => ['required', 'array', 'min:1'],
            'schedule.*' => ['string', 'in:saturday-morning,saturday-evening,saturday-night,sunday-morning,sunday-day,sunday-closing'],
            'notes' => ['nullable', 'string', 'max:1000'],
            'agree' => ['accepted'],
        ];
    }

    public function attributes(): array
    {
        return [
            'gender' => 'jenis kelamin',
            'schedule' => 'pilihan jadwal',
            'agree' => 'persetujuan',
        ];
    }
}
