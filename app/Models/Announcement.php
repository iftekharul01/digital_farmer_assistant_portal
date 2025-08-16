<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Announcement extends Model
{
    protected $fillable = [
        'category',
        'title', 
        'subtitle',
        'description',
        'priority',
        'is_active',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_active' => 'boolean'
    ];

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeByPriority($query, $priority)
    {
        return $query->where('priority', $priority);
    }

    // Helper methods
    public function isNew()
    {
        return $this->created_at->diffInDays(now()) <= 3;
    }

    public function getCategoryColorAttribute()
    {
        $colors = [
            'event' => '#3498db',
            'subsidy' => '#e74c3c', 
            'alert' => '#f39c12',
            'training' => '#9b59b6',
            'general' => '#27ae60',
            'emergency' => '#e67e22'
        ];

        return $colors[$this->category] ?? '#27ae60';
    }

    public function getPriorityColorAttribute()
    {
        $colors = [
            'low' => '#2ed573',
            'medium' => '#ffa502', 
            'high' => '#ff4757'
        ];

        return $colors[$this->priority] ?? '#ffa502';
    }
}
