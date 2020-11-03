@extends('layouts.layout')
@section('content')
@if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
    @endif
    @endif
</div>
@endif
<img class="logo" src="/img/pizza-logo.png">
<h1 class="main-title">Pizza House</h1>
<p class="msg">{{session('msg')}}</p>
<a href="{{route('pizzas.create')}}"><button>Order Now!</button></a>

@endsection
