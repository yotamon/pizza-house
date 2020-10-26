@extends('layouts.layout')

@section('content')

<div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <h1 class="title">Add A New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Pizza Type:</label>
        <select id="type" name="type">
            <option value="margarita">Margarita</option>
            <option value="napolitana">Napolitana</option>
            <option value="bianka">Bianka</option>
        </select>
        <label for="base">Choose Base:</label>
        <select id="base" name="base">
            <option value="thin">Thin</option>
            <option value="normal">Normal</option>
            <option value="thick">Thick</option>
        </select>
        <input type="submit" value="Order Pizza">
    </form>
</div>

@endsection
