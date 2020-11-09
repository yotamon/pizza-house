<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Collection;
use App\Models\Pizza;

class BaseComposer {

    public function compose(View $view) {
        $pizzas = Pizza::all();
        $view->with('pizzas', $pizzas);
    }
}