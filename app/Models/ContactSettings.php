<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSettings extends Model
{
    protected $fillable = [
        'page_title',
        'page_subtitle',
        'office_address',
        'primary_phone',
        'secondary_phone',
        'primary_email',
        'support_email',
        'working_hours',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'linkedin_url',
        'youtube_url'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
