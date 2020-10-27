@extends('layouts.app')

@section('content')

<h1 class="title">Order for {{$pizza->name}}</h1>
<p>type: {{$pizza->type}}</p>
<p>base: {{$pizza->base}}</p>
<p>price: {{$pizza->price}}$</p>
<p>Toppings:</p>
<ul>
    @foreach($pizza->toppings as $topping)
    <li>{{$topping}}</li>
    @endforeach
</ul>
<form action="{{route('pizzas.destroy', $pizza->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete Order</button>
</form>
<a href="{{route('pizzas.index')}}">
    <- Back to Pizzas List</a> 
    
@endsection
