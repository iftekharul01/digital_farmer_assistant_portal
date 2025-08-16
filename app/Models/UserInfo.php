<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'email',
        'phone',
        'address',
        'district',
        'upazila',
        'profession',
        'bio',
        'profile_image',
        'date_of_birth',
        'gender',
        'farm_size',
        'main_crops'
    ];

    protected $casts = [
        'date_of_birth' => 'date'
    ];

    public function user()
    {
        return $this->belongsTo(Registration::class, 'user_id');
    }
}
