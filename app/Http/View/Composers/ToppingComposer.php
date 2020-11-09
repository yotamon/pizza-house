<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Topping;
use DB;

class ToppingComposer {

    public function compose(View $view) {
        $toppings = Topping::with('price')->get()->sortBy(function($item) {
            return $item->price->amount;
        });

        $view->with('toppings', $toppings);
    }
}