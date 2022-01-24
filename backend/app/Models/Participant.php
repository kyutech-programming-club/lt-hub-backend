<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Participant extends Pivor
{
    protected $table = 'paticipants';

    protected $fillable = [
        'state'
    ];

    public $incrementing = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongTo(Event::class);
    }
}
