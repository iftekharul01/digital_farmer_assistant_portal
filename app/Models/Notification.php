<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Notification extends Model
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

    public function isNew()
    {
        return $this->created_at->diffInDays(now()) <= 3;
    }

    public function getPriorityColorAttribute()
    {
        return match($this->priority) {
            'high' => '#ff4757',
            'medium' => '#ffa502',
            'low' => '#2ed573',
            default => '#5f27cd'
        };
    }

    public function getCategoryColorAttribute()
    {
        return match($this->category) {
            'আবহাওয়া' => '#3742fa',
            'বাজার' => '#2ed573',
            'ভর্তুকি' => '#ff6348',
            'সাধারণ' => '#747d8c',
            'জরুরি' => '#ff4757',
            'প্রযুক্তি' => '#5f27cd',
            default => '#2f3542'
        };
    }
}
