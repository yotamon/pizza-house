@extends('layouts.dashboard-layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Order for {{$pizza->name}}</div>

        <div class="card-body">
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
        </div>
    </div>
    
    <a href="{{route('pizzas.index')}}">
        <- Back to Pizzas List</a> 
</div>
    
@endsection
