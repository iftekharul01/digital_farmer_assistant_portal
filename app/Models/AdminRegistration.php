<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRegistration extends Model
{
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
