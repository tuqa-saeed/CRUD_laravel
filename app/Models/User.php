<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Here I allow whcih columns ar able to edit else is blocked
    protected $fillable = ['name', 'email', 'password', 'phone', 'role', 'is_active'];

    // converts it to true or false not 0 or 1
    protected $casts = [
        'is_active' => 'boolean',
    ];
}
