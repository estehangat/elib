<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid mx-5">
        <!-- Logo and brand -->
        <a class="navbar-brand" href="/">
            <i class="bi bi-book me-2"></i>E-Library
        </a>
        
        <!-- Center navigation links -->
        <div class="navbar-nav mx-auto">
            <a class="nav-link {{ request()->is('/') ? 'active text-white text-decoration-underline' : '' }}" href="/">Beranda</a>
            <a class="nav-link {{ request()->routeIs('peminjaman.index') ? 'active text-white text-decoration-underline' : '' }}" 
               href="{{ route('peminjaman.index') }}">Peminjaman Saya</a>
        </div>
        
        <!-- User profile section -->
        <div class="d-flex align-items-center">
            <img src="{{ auth()->user()->profile_photo_url ?? asset('images/default-avatar.png') }}" 
                 alt="User Profile" 
                 class="rounded-circle me-2"
                 style="width: 32px; height: 32px;">
            <span class="text-white">{{ auth()->user()->name ?? 'Guest' }}</span>
        </div>
    </div>
</nav>