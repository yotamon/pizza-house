@extends('layouts.dashboard-layout')

@section('content')

<div class="container">
    <h1 class="">Order A Pizza</h1>
    <form action="{{route('pizzas.store')}}" method="POST" class="create-form">
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
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br>
            <input type="checkbox" name="toppings[]" value="tomatos">Tomatos<br>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>

@endsection
