<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function talks(): HasMany
    {
        return $this->hasMany(Talk::class);
    }

    public function orders(): HasManyThrough
    {
        return $this->hasManyThrough(Order::class, Talk::class);
    }

    public function participantUser(): BelongsToMany
    {
        return $this
            ->belongdToMany(User::class)
            ->using(Participant::class);
    }
}
