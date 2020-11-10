<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $guarded = [];

    public function base() {
        return $this->belongsTo(Base::class);
    }

    public function toppings() {
        return $this->belongsToMany(Topping::class);
    }

    public function fixedPrice() {
        $base_price = $this->base->price->amount;
        $toppings_price = $this->toppings->sum('price.amount');
        return $toppings_price + $base_price;
    }
}
