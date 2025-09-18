@extends('layouts.app')

@section('content')
<style>
    .auth-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f9fa;
    }
    .auth-card {
        width: 100%;
        max-width: 450px;
        border: none;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
    }
    .auth-card-body {
        padding: 3rem;
    }
    .auth-title {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }
    .auth-subtitle {
        color: #6c757d;
        margin-bottom: 2rem;
    }
    .btn-google {
        background-color: #fff;
        color: #495057;
        border: 1px solid #ced4da;
    }
    .btn-google:hover {
        background-color: #f8f9fa;
    }
    .divider {
        text-align: center;
        margin: 1.5rem 0;
    }
    .divider hr {
        margin: 0;
        width: 40%;
        display: inline-block;
        vertical-align: middle;
    }
    .divider span {
        display: inline-block;
        padding: 0 1rem;
        color: #6c757d;
    }
</style>
<div class="auth-container">
    <div class="card auth-card">
        <div class="card-body auth-card-body">
            <div class="text-center mb-4">
                <img src="{{ asset('img/logo.png') }}" alt="Rapid Visa Logo" style="height: 40px;">
            </div>
            <h3 class="auth-title text-center">Create an Account</h3>
            <p class="auth-subtitle text-center">Get started with your visa application</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="your@email.com">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Create a password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="form-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                </div>

                <div class="divider">
                    <hr><span>OR</span><hr>
                </div>

                <div class="d-grid">
                    <button type="button" class="btn btn-google btn-lg"><i class="fab fa-google me-2"></i> Sign up with Google</button>
                </div>

            </form>

            <div class="text-center mt-4">
                <p class="text-muted">Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Sign in</a></p>
            </div>
        </div>
    </div>
</div>
@endsection