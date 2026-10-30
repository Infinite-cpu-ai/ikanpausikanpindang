<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'gender' => ['required', 'in:male,female,other'],
            'gender_other' => ['nullable', 'required_if:gender,other', 'string', 'max:80'],
            'schedule' => ['required', 'array', 'min:1'],
            'schedule.*' => ['string', Rule::in(array_keys(config('event.schedules')))],
            'notes' => ['nullable', 'string', 'max:1000'],
            'agree' => ['accepted'],
        ];
    }

    public function attributes(): array
    {
        return [
            'gender' => 'jenis kelamin',
            'gender_other' => 'jenis kelamin lainnya',
            'schedule' => 'pilihan jadwal',
            'agree' => 'persetujuan',
        ];
    }
}
