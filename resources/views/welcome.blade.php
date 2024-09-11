@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <div class="home-bg d-flex justify-content-center align-items-center text-white">
        <div class="text-center">
            <h1 class="display-4">Product Management System</h1>
            <p class="lead">Welcome to the Product Management System, your go-to solution for managing your product inventory with ease.</p>
            {{-- @auth
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg">Products</a>
            @else
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Get Started</a>
            @endif --}}
        </div>
    </div>
</div>

<style>
    .home-bg {
        background: url({{asset('images/bg.jpg')}}) no-repeat center center;
        background-size: cover;
        height: 100vh;
        position: relative;
    }

    .home-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Add a dark overlay */
        z-index: 1;
    }

    .text-center {
        z-index: 2;
    }
</style>
@endsection
