<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'ticket_code',
        'name',
        'email',
        'phone',
        'gender',
        'gender_other',
        'schedule',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'schedule' => 'array',
        ];
    }
}
