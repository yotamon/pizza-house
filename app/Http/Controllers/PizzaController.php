<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Pizza;
use App\Models\Topping;

class PizzaController extends Controller
{
    public function index() {
        $pizzas = Pizza::paginate(3);
    
        return view('dashboard', ['pizzas' => $pizzas]);
    }

    public function show($id) {
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();

        return redirect('/')->with('msg', 'Thank you for ordering from us!');
    }

    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/dashboard');
    }

    static public function getPrice($id) {
        // $pizza = Pizza::findOrFail($id);
        // dd($pizza->toppings);
        // // $toppings = $pizza->toppings->sum('price.amount');
        // $base = $pizza->base->price->amount;
        // $price = $toppings + $base;

        //Temp
        return 0;
    }
}
