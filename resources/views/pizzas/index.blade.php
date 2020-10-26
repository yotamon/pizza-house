@extends('layouts.layout')

@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="title">Pizza List</div>
    @foreach($pizzas as $pizza)
    <div class="pizza">
        <img src="/img/pizza.png">
        <p>Type: {{$pizza->type}}</p>
        <p>Base: {{$pizza->base}}</p>
        <p>Price: {{$pizza->price}}</p>
    </div>
    @endforeach
</div>

@endsection
