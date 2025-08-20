<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tutorial extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'icon',
        'video_url',
        'video_title',
        'video_description',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    // Auto-generate slug from title
    public static function boot()
    {
        parent::boot();
        
        static::creating(function ($tutorial) {
            if (empty($tutorial->slug)) {
                $tutorial->slug = Str::slug($tutorial->title);
            }
        });
    }

    // Scope for active tutorials
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope for ordered tutorials
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc')->orderBy('created_at', 'asc');
    }
}
