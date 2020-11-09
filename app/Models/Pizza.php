<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $casts = [
        'toppings' => 'array'
    ];

    // public function format() {
    //     return [
    //         'id' => $this->id,
    //         'name' => $this->name,
    //         'type' => $this->type,
    //         'base' => $this->base,
    //         'toppings' => $this->toppings,
    //         'price' => $this->base->price->amount
    //     ];
    // }
}
