@extends('layouts.dashboard-layout')

@section('content')

<div class="container">

    <div id="app">
        <create-order></create-order>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

    <form action="{{route('pizzas.store')}}" method="POST" class="create-form">
        <h1 class="">Order A Pizza</h1>
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name"><br>
        <label for="type">Choose Pizza Type:</label>
        <select id="type" name="type">
            <option value="margarita">Margarita</option>
            <option value="napolitana">Napolitana</option>
            <option value="bianka">Bianka</option>
        </select><br>
        <label for="base">Choose Base:</label>
        <select id="base" name="base">
            <option value="thin">Thin</option>
            <option value="normal">Normal</option>
            <option value="thick">Thick</option>
        </select><br>
        <fieldset>
            <label>Extra Toppings:</label><br>
            <div class="toppings-select">
                @foreach($toppings as $topping)
                <div class="topping"><input type="checkbox" name="toppings[]" value="{{$topping->name}}"><span>{{$topping->name}}</span><span class="topping-price">({{$topping->price->amount}}$)</span></div>
                @endforeach
            </div>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>

@endsection
