@extends('layouts.app')

@section('content')
<style>
    .login-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
    .login-img {
        object-fit: cover;
        height: 100%;
        max-height: 80vh;
        border-radius: 1rem;
    }
    .btn-primary {
        background-color: #ee9734ff !important;
        border-color: #ee9734ff !important;
    }
</style>
<div class="container-fluid my-5">
    <div class="row align-items-center">
        <!-- Left side with image -->
        <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center">
            <img src="{{ asset('img/slider2.png') }}" alt="Login Image" class="img-fluid login-img">
        </div>

        <!-- Right side with login form -->
        <div class="col-md-6 d-flex justify-content-center align-items-center py-5">
            <div class="card shadow-lg login-card" style="width: 25rem; border: none; transition: all 0.2s ease-in-out;">
                <div class="card-body p-5">
                    <div class="text-center mb-5">
                        <img src="{{ asset('img/logo.png') }}" alt="Rapid Visa Logo" style="height: 40px;">
                        <h3 class="mt-3">Welcome back</h3>
                        <p class="text-muted">Login to your account to continue</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>

                        <div class="text-center">
                            <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none">Sign up</a></p>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection