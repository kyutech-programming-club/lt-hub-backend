<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'start_time',
        'end_time',
        'location',
        'location',
        'state',
        'participant_number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function talks()
    {
        return $this->hasManyThrough(Talk::class, Order::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function participantUser()
    {
        return $this
            ->belongdToMany(User::class)
            ->using(Participant::class);
    }
}
