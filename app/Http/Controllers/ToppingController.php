<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topping;

class ToppingController extends Controller
{
    public function index() {
        return view('toppings.toppings');
    }

    public function store() {
        $topping = new Topping();

        $topping->name = request('name');

        $topping->save();

        return redirect('/toppings');
    }

    public function destroy($id) {
        $topping = Topping::findOrFail($id);
        $topping->delete();

        return redirect('/toppings');
    }
}
