<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'crop_category',
        'crop_name',
        'variety_type',
        'current_price',
        'previous_price',
        'market_location',
        'quality_grade',
        'market_remarks',
        'product_image',
        'unit',
        'status'
    ];

    protected $casts = [
        'current_price' => 'decimal:2',
        'previous_price' => 'decimal:2',
        'status' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getPriceChangeAttribute()
    {
        if ($this->previous_price && $this->previous_price > 0) {
            return (($this->current_price - $this->previous_price) / $this->previous_price) * 100;
        }
        return 0;
    }

    public function getPriceChangeStatusAttribute()
    {
        $change = $this->price_change;
        if ($change > 0) return 'increase';
        if ($change < 0) return 'decrease';
        return 'stable';
    }
}
