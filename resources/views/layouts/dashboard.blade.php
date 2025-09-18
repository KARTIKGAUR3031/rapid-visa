<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RapidVisa Dashboard')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    @stack('styles')
</head>
<body>
    <div class="dashboard-wrapper">
        @include('dashboard.sidebar')

        <div class="main-content">
            <header class="header">
                <div class="header-left">
                    <h1 class="page-title">@yield('title')</h1>
                </div>
                <div class="header-right">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search...">
                    </div>
                    <div class="icon-group">
                        <a href="#" class="icon-btn">
                            <i class="fas fa-cog"></i>
                        </a>
                        <a href="#" class="icon-btn">
                            <i class="fas fa-bell"></i>
                        </a>
                    </div>
                    <div class="profile-dropdown">
                        <div class="profile-info">
                            @if(isset($latest_application) && $latest_application->image)
                                <img src="{{ asset('storage/documents/' . $latest_application->image) }}" alt="Avatar" class="avatar">
                            @else
                                <img src="{{ asset('images/avatar.png') }}" alt="Avatar" class="avatar">
                            @endif
                            <div class="user-details">
                                <span class="user-name">{{ auth()->user()->name }}</span>
                                <span class="user-role">User</span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <main class="content-area">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    @stack('scripts')
</body>
</html>