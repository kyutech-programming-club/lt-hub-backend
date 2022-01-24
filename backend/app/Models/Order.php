<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Order extends Model
{
    protected $table = 'orders';

    public $incrementing = true;

    protected $fillable = [
        'order'
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function talk(): BelongsTo
    {
        return $this->belongsTo(Talk::class);
    }
}
