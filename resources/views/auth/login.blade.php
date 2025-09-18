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
            <h3 class="auth-title text-center">Welcome Back</h3>
            <p class="auth-subtitle text-center">Sign in to continue your visa application</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="your@email.com">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Your password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
                </div>

                <div class="divider">
                    <hr><span>OR</span><hr>
                </div>

                <div class="d-grid">
                    <button type="button" class="btn btn-google btn-lg"><i class="fab fa-google me-2"></i> Sign in with Google</button>
                </div>

            </form>

            <div class="text-center mt-4">
                <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none">Sign up</a></p>
            </div>
        </div>
    </div>
</div>
@endsection