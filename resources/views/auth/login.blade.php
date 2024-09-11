@extends('layouts.app')


@section('content')
<section id="hero" class="hero section dark-background h-100">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row d-flex align-items-center justify-content-center form-content-wrapper">
            <div class="col-lg-6 ">
                <!-- Replace with your SVG image -->
                <img  src="{{ asset('images/img-login.svg') }}" class="img-fluid" alt="Login">
            </div>
            <div class="col-lg-6">
                <div class="login-container">
                    <h2 class="text-center">{{ __('Login') }}</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
    
                        <div class="form-group">
                            <label for="email" class="font-weight-bold">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                        <div class="form-group mt-3">
                            <label for="password" class="font-weight-bold">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                        <div class="form-group mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
    
                        <div class="form-group mt-3 mb-0 text-center">
                            <button type="submit" class="btn btn-primary btn-block shadow-sm">
                                {{ __('Login') }}
                            </button>
                        </div>
    
                        @if (Route::has('password.request'))
                            <div class="form-group mt-3 text-center">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .login-container {
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

    .alert-danger {
        margin-top: 20px;
        font-size: 16px;
    }

    .mt-3 a {
        color: #0069d9;
        text-decoration: none;
        font-weight: bold;
    }

    .mt-3 a:hover {
        text-decoration: underline;
    }

    @media screen and (max-width: 576px) {
        .login-container {
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
</style>
@endsection