<?php

namespace App\Traits;

trait HasCasts
{
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
