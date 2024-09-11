@extends('layouts.app')

@section('content')
<section id="hero" class="hero section dark-background">
    <div class="container d-flex justify-content-center mt-5">
        <div class="row d-flex align-items-center justify-content-center form-content-wrapper">
            <div class="col-lg-6 ">
                <!-- Replace with your SVG image -->
                <img src="{{ asset('images/img-login.svg') }}" class="img-fluid" alt="Register">
            </div>
            <div class="col-lg-6">
                <div class="register-container">
                    <h2 class="text-center mb-4">{{ __('Register') }}</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="font-weight-bold">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="email" class="font-weight-bold">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="password" class="font-weight-bold">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="password-confirm" class="font-weight-bold">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group mt-4 mb-0 text-center">
                            <button type="submit" class="btn btn-primary btn-block shadow-sm">
                                {{ __('Register') }}
                            </button>
                        </div>
                        <p class="mt-3 text-center">Already have an account? <a href="{{ route('login') }}" class="font-weight-bold">Login here</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .register-container {
        min-width: 500px;
        padding: 40px;
        border-radius: 10px;
        background-color: #ffffff;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        margin: 50px auto;
    }

    h2 {
        color: #212529;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .form-control {
        border-radius: 5px;
        height: 50px;
        font-size: 16px;
        border: 1px solid #ced4da;
    }

    .btn-primary {
        background-color: #0069d9;
        border-color: #0069d9;
        border-radius: 5px;
        padding: 12px 20px;
        font-size: 16px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    @media screen and (max-width: 576px) {
        .register-container {
            min-width: auto;
            padding: 20px;
        }

        .form-content-wrapper {
            padding: 20px;
        }

        .form-control {
            height: auto;
            font-size: 14px;
        }

        .btn-primary {
            padding: 10px;
            font-size: 14px;
        }
    }

    .form-content-wrapper {
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .img-fluid {
        margin-bottom: 30px;
    }

    .font-weight-bold {
        color: #0069d9;
    }
</style>
@endsection
