<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContactMessage extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'subject',
        'message',
        'status',
        'viewed_at',
        'replied_at',
        'admin_reply'
    ];

    protected $casts = [
        'viewed_at' => 'datetime',
        'replied_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the user that sent this message
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(Registration::class, 'user_id');
    }

    /**
     * Scope to get new messages
     */
    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    /**
     * Scope to get in progress messages
     */
    public function scopeInProgress($query)
    {
        return $query->where('status', 'in_progress');
    }

    /**
     * Scope to get replied messages
     */
    public function scopeReplied($query)
    {
        return $query->where('status', 'replied');
    }

    /**
     * Mark message as viewed (only sets viewed timestamp)
     */
    public function markAsViewed()
    {
        $this->update([
            'viewed_at' => now()
        ]);
    }

    /**
     * Scope to get messages with admin replies that user hasn't seen
     */
    public function scopeUnreadReplies($query, $userId)
    {
        return $query->where('user_id', $userId)
            ->where('status', 'replied')
            ->whereNotNull('admin_reply')
            ->whereNotNull('replied_at');
    }

    /**
     * Mark message as replied
     */
    public function markAsReplied($reply = null)
    {
        $this->update([
            'status' => 'replied',
            'replied_at' => now(),
            'admin_reply' => $reply
        ]);
    }
}
