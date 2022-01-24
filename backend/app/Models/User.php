<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'public_id',
        'name',
        'avatar_url'
    ];

    public function role(): HasOne
    {
        return $this->hasOne(Role::class);
    }

    public function social(): HasOne
    {
        return $this->hasOne(Social::class);
    }

    public function heldEvents(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function talks(): HasMany
    {
        return $this->hasMany(Talk::class);
    }

    public function participatedEvents(): BelongsToMany
    {
        return $this
            ->belongsToMany(Event::class, 'participants')
            ->using(Participant::class);
    }

    public function following(): BelongsToMany
    {
        return $this
            ->belongsToMany(User::class, 'follows', 'follow_id', 'follower_id')
            ->using(Follow::class);
    }

    public function followers(): BelongsToMany
    {
        return $this
            ->belongsToMany(User::class, 'follows', 'follow_id', 'follower_id')
            ->using(Follow::class);
    }
}
