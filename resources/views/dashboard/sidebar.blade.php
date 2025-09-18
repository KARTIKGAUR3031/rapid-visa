<aside class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('dashboard.index') }}" class="logo">
            <i class="fas fa-bolt"></i>
            <span>RapidVisa</span>
        </a>
    </div>

    <nav class="main-menu">
        <p>MAIN MENU</p>
        <a class="nav-link {{ request()->routeIs('dashboard.index') ? 'active' : '' }}" href="{{ route('dashboard.index') }}">
            <i class="fas fa-th-large"></i>
            <span>Dashboard</span>
        </a>
        <a class="nav-link {{ request()->routeIs('dashboard.applications') ? 'active' : '' }}" href="{{ route('dashboard.applications') }}">
            <i class="fas fa-file-alt"></i>
            <span>Applications</span>
        </a>
        <a class="nav-link {{ request()->routeIs('dashboard.documents') ? 'active' : '' }}" href="{{ route('dashboard.documents') }}">
            <i class="fas fa-folder"></i>
            <span>Documents</span>
        </a>
        <a class="nav-link {{ request()->routeIs('dashboard.profile') ? 'active' : '' }}" href="{{ route('dashboard.profile') }}">
            <i class="fas fa-user"></i>
            <span>Profile</span>
        </a>
    </nav>

    <div class="user-profile">
        @if($latest_application && $latest_application->image)
            <img src="{{ asset('storage/documents/' . $latest_application->image) }}" alt="User Avatar" class="avatar">
        @else
            <img src="https://i.pravatar.cc/60?u={{ auth()->user()->id }}" alt="User Avatar" class="avatar">
        @endif
        <div class="user-info">
            <h4>{{ auth()->user()->name }}</h4>
            <p class="user-email">{{ auth()->user()->email }}</p>
        </div>
        <form method="POST" action="{{ route('logout') }}" id="logout-form" style="display: none;">
            @csrf
        </form>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout-icon">
            <i class="fas fa-sign-out-alt"></i>
        </a>
    </div>
</aside>