<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function talk(): BelongsTo
    {
        return $this->belongsTo(Talk::class);
    }
}
