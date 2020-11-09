@extends('layouts.dashboard-layout')

@section('content')

<div class="container">
    <h1>Toppings</h1>
    <div class="toppings">
        @foreach($toppings as $topping)
            <div class="topping">
            <p style="font-weight: bold">{{$topping->name}}</p>
            <p>Price: {{$topping->price->amount}}</p>
        <form action="{{route('toppings.destroy',$topping->id)}}" method="POST">
            @csrf
            @method('DELETE')
        <input type="submit" value="" style="margin-top: 20px;background-image: url('/img/delete-icon.png'); border:none; border-radius:unset; background-size: cover; width: 20px; height: 24px; background-color: transparent;">
        </form>
        </div>
        @endforeach
    </div>
    <div class="add">
        <form action="{{route('toppings.store')}}" method="POST">
            @csrf
            <label for="name">Topping Name: </label><input type="text" name="name">
            <label for="price">Price: </label><input type="text" name="price">
            <input type="submit" value="Add">
        </form>
    </div>
</div>

@endsection
