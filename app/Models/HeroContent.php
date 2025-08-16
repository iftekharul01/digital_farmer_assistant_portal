<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroContent extends Model
{
    protected $fillable = [
        'hero_title',
        'hero_subtitle1', 
        'hero_subtitle2',
        'hero_background_image',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    // Get the active hero content
    public static function getActive()
    {
        return self::where('is_active', true)->first();
    }
}
