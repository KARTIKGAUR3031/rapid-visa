@extends('layouts.app')

@section('content')
<style>
    .register-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
    .register-img {
        object-fit: cover;
        height: 100%;
        max-height: 80vh;
        border-radius: 1rem;
    }
    .btn-primary {
        background-color: #d97706 !important;
        border-color: #d97706 !important;
    }
</style>
<div class="container-fluid my-5">
    <div class="row align-items-center">
        <!-- Left side with image -->
        <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center">
            <img src="{{ asset('img/slider2.png') }}" alt="Register Image" class="img-fluid register-img">
        </div>

        <!-- Right side with register form -->
        <div class="col-md-6 d-flex justify-content-center align-items-center py-5">
            <div class="card shadow-lg register-card" style="width: 25rem; border: none; transition: all 0.2s ease-in-out;">
                <div class="card-body p-5">
                    <div class="text-center mb-5">
                        <img src="{{ asset('img/logo.png') }}" alt="Rapid Visa Logo" style="height: 40px;">
                        <h3 class="mt-3">Create an account</h3>
                        <p class="text-muted">Get started with your visa application</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">
                        </div>

                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                        </div>

                        <div class="text-center">
                            <p class="text-muted">Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection