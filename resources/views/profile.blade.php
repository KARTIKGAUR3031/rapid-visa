@extends('layouts.app')

@section('styles')
<style>
    :root {
        --primary-color: #4a90e2;
        --secondary-color: #f5a623;
        --background-color: #f8f9fa;
        --sidebar-bg: #ffffff;
        --card-bg: #ffffff;
        --text-color: #333;
        --muted-color: #888;
    }

    body {
        background-color: var(--background-color);
    }

    .dashboard-wrapper {
        display: flex;
        min-height: 100vh;
    }

    .sidebar {
        width: 260px;
        background-color: var(--sidebar-bg);
        padding: 2rem 1rem;
        box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
    }

    .sidebar .logo {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary-color);
        text-align: center;
        margin-bottom: 2rem;
    }

    .sidebar .nav-link {
        color: var(--muted-color);
        font-weight: 500;
        padding: 0.8rem 1rem;
        border-radius: 8px;
        margin-bottom: 0.5rem;
        transition: all 0.3s ease;
    }

    .sidebar .nav-link.active,
    .sidebar .nav-link:hover {
        background-color: var(--primary-color);
        color: #fff;
    }

    .main-content {
        flex: 1;
        padding: 2rem;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }

    .header h1 {
        font-size: 2.2rem;
        font-weight: 700;
    }

    .profile-section {
        background-color: var(--card-bg);
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }
</style>
@endsection

@section('content')
<div class="dashboard-wrapper">
    <aside class="sidebar">
        <div class="logo">RapidVisa</div>
        <nav class="nav flex-column">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
            </a>
            <a class="nav-link" href="{{ route('applications') }}">
                <i class="fas fa-file-alt mr-2"></i> Applications
            </a>
            <a class="nav-link" href="{{ route('documents') }}">
                <i class="fas fa-folder mr-2"></i> Documents
            </a>
            <a class="nav-link active" href="{{ route('profile') }}">
                <i class="fas fa-user mr-2"></i> Profile
            </a>
        </nav>
    </aside>

    <main class="main-content">
        <header class="header">
            <h1>Profile</h1>
        </header>

        <div class="profile-section">
            <div class="row">
                <div class="col-md-6">
                    <h3>Your Profile Information</h3>
                    <p class="text-muted">Manage your profile settings here.</p>
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ auth()->user()->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ auth()->user()->email }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3>Change Password</h3>
                    <p class="text-muted">Ensure your account is using a long, random password to stay secure.</p>
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input type="password" name="current_password" id="current_password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm New Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection