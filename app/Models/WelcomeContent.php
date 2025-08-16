<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WelcomeContent extends Model
{
    protected $fillable = [
        'hero_title',
        'hero_subtitle', 
        'hero_background_image',
        'feature_1_title',
        'feature_1_description',
        'feature_2_title',
        'feature_2_description',
        'feature_3_title',
        'feature_3_description',
        'feature_4_title',
        'feature_4_description'
    ];
}
