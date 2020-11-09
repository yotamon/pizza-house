<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Pizza;

class PizzaComposer {

    public function compose(View $view) {
        $pizzas = Pizza::all();
        $view->with('pizzas', $pizzas);
    }
}