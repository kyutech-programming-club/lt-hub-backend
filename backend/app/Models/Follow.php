<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Follow extends Pivot
{
    protected $table = 'follows';
    protected $guarded = [
        'id'
    ];

    public $incrementing = true;
}
