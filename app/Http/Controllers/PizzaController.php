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
        // return request()->all();
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base_id = request('base_id');


        $pizza->save();
 
        $pizza->toppings()->attach(request('toppings'));


        return redirect('/')->with('msg', 'Thank you for ordering from us!');
    }

    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza->toppings()->sync([]);
        $pizza->delete();

        return redirect('/dashboard');
    }
}
