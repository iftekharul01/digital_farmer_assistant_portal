<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedNews extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'link',
        'image_url',
        'source_id',
        'pub_date',
        'category',
        'country',
        'language'
    ];

    /**
     * Get the user that owns the saved news.
     */
    public function user()
    {
        return $this->belongsTo(Registration::class, 'user_id');
    }
}
