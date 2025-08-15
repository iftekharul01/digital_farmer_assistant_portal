<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'username',
        'full_name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
