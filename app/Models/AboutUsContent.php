<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'hero_background_image',
        'our_motivation',
        'our_mission',
        'our_vision',
        'what_we_value',
        'team_members'
    ];

    protected $casts = [
        'team_members' => 'array'
    ];

    // Get the first (and should be only) record
    public static function getContent()
    {
        return self::first() ?: new self();
    }
}
