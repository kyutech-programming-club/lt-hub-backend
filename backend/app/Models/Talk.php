<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'state',
        'participant_number'
    ];

    public function media(): HasOne
    {
        return $this->hasOne(Media::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function order(): HasOne
    {
        return $this->hasOne(Order::class);
    }
}
