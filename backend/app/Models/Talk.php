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

    public function media()
    {
        return $this->hasOne(Media::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
