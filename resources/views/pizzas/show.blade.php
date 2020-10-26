@extends('layouts.layout')

@section('content')

<div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="title">Order for {{$pizza->name}}</div>
    <p>type: {{$pizza->type}}</p>
    <p>base: {{$pizza->base}}</p>
    <p>price: {{$pizza->price}}$</p>

    <a href="/pizzas"><- Back to Pizzas List</a>
</div>

@endsection
