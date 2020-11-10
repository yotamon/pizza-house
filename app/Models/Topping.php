<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
    protected $guarded = [];

    public function price() {
        return $this->morphOne(Price::class, 'priceable');
    }

    public function pizzas() {
        return $this->belongsToMany(Pizza::class);
    }
}
