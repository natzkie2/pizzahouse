@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/pizzahouse.jpg" alt="pizza house">
        <div class="title m-b-md">
            Pizza In The House<br />
            The South East's Best Pizza.
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="/pizzas/create">Order a Pizza</a>
    </div>
</div>
@endsection
