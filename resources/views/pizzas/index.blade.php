@extends('layouts.app')

@section('content')

<h1>Pizza Orders</h1>
<ul class="pizza-orders">
    @foreach($pizzas as $pizza)
    <a href="{{route('pizzas.show', $pizza->id)}}">
        <li class="pizza-order">
    <img class="pizza-thumb" src="/img/pizza.png">
    <div class="pizza-order-details">
        <p>Type: {{$pizza->type}}</p>
        <p>Base: {{$pizza->base}}</p>
        <p>Price: {{$pizza->price}}</p>
    </div>
    <form action="{{route('pizzas.destroy',$pizza->id)}}" method="POST">
        @csrf
        @method('DELETE')
    <input type="submit" value="" style="margin-left: 30px;background-image: url('/img/delete-icon.png'); border:none; border-radius:unset; background-size: cover; width: 20px; height: 24px; background-color: transparent;">
    </form>
    </li>
    </a>
    @endforeach
</ul>

@endsection
