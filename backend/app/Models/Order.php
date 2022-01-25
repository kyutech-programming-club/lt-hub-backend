<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Order extends Model
{
    protected $table = 'orders';

    public $incrementing = true;

    protected $guarded = [
        'id'
    ];

    public function talk(): BelongsTo
    {
        return $this->belongsTo(Talk::class);
    }
}
