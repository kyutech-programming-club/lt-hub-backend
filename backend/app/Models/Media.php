<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_url',
        'slide_url'
    ];

    public function talk()
    {
        return $this->belongsTo(Talk::class);
    }
}
