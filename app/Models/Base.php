<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    protected $guarded = [];

    public function price() {
        return $this->morphOne(Price::class, 'priceable');
    }
}
