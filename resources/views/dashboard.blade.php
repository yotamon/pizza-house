@extends('layouts.dashboard-layout')

@section('content')

<div class="container">
    <h1>Pizza Orders</h1>
    <ul class="pizza-orders">
        @foreach($pizzas as $pizza)
        <a href="{{route('pizzas.show', $pizza->id)}}">
            <li class="pizza-order">
        <img class="pizza-thumb" src="/img/pizza.png">
        <div class="pizza-order-details">
            <p>Type: {{$pizza->type}}</p>
            <p>Base: {{$pizza->base->name}}</p>
            <p>Price: {{$pizza->fixedPrice()}}$</p>
        </div>
        <form action="{{route('pizzas.destroy',$pizza->id)}}" method="POST">
            @csrf
            @method('DELETE')
        <input type="submit" value="" style="margin-top: 20px;background-image: url('/img/delete-icon.png'); border:none; border-radius:unset; background-size: cover; width: 20px; height: 24px; background-color: transparent;">
        </form>
        </li>
        </a>
        @endforeach
    </ul>
    {{ $pizzas->links() }}
</div>

@endsection
