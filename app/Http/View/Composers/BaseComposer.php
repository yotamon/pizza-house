<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Collection;
use App\Models\Base;

class BaseComposer {

    public function compose(View $view) {
        $bases = base::with('price')->get()->sortBy(function($item) {
            return $item->price->amount;
        });

        $view->with('bases', $bases);
    }
}