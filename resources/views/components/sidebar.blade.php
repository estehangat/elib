<div class="sidebar-hmpwk">
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom bg-primary">
      <a href="{{ route('admin.dashboard') }}" class="text-decoration-none">
        <span class="fs-4 fw-semibold text-white">E<span class="text-white opacity-75">lib</span></span>
      </a>
      <button class="btn btn-sm btn-outline-light d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
        <i class="bi bi-list"></i>
      </button>
    </div>
    
    <div class="d-flex align-items-center p-3 border-bottom bg-white">
      <div class="rounded-circle overflow-hidden me-2 bg-light border" style="width: 40px; height: 40px;">
        <img src="{{ asset('img/default-profile.webp') }}" class="img-fluid" alt="Admin">
      </div>
      <div>
        <h6 class="mb-0 fs-6 fw-semibold">{{ Auth::user()->username ?? 'Admin User' }}</h6>
        <small class="text-muted">{{ Auth::user()->role ?? 'Administrator' }}</small>
      </div>
    </div>
    
    <div class="collapse d-md-block bg-white" id="sidebarMenu">
      <ul class="nav flex-column mb-auto p-2">
        <li class="nav-item mb-1">
          <small class="text-uppercase fw-bold text-muted px-3 py-2 d-block">Menu Utama</small>
        </li>
        
        <!-- Dashboard -->
        <li class="nav-item mb-1">
          <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active bg-primary' : 'text-dark' }} d-flex align-items-center">
            <i class="bi bi-speedometer2 me-2"></i>
            Dashboard
          </a>
        </li>
        
        <!-- User Management -->
        <li class="nav-item mb-1">
          <a class="nav-link text-dark d-flex align-items-center justify-content-between sidebar-dropdown-toggle" 
             data-bs-toggle="collapse" 
             href="#userSubmenu" 
             role="button" 
             aria-expanded="{{ request()->is('admin/users*') ? 'true' : 'false' }}">
            <div>
              <i class="bi bi-people me-2"></i>
              User Management
            </div>
            <i class="bi bi-chevron-down small dropdown-indicator"></i>
          </a>
          <div class="collapse {{ request()->is('admin/users*') ? 'show' : '' }}" id="userSubmenu">
            <ul class="nav flex-column ms-3 mt-1">
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.users.index') ? 'active bg-primary' : 'text-dark' }} py-2" href="{{ route('admin.dashboard') }}">
                  <i class="bi bi-list-ul me-2"></i>
                  Semua User
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.users.create') ? 'active bg-primary' : 'text-dark' }} py-2" href="{{ route('admin.dashboard') }}">
                  <i class="bi bi-person-plus me-2"></i>
                  Tambah User
                </a>
              </li>
            </ul>
          </div>
        </li>
        
        <!-- Book Management -->
        <li class="nav-item mb-1">
          <a class="nav-link text-dark d-flex align-items-center justify-content-between sidebar-dropdown-toggle" 
             data-bs-toggle="collapse" 
             href="#bookSubmenu" 
             role="button" 
             aria-expanded="{{ request()->is('admin/books*') || request()->is('admin/categories*') ? 'true' : 'false' }}">
            <div>
              <i class="bi bi-book me-2"></i>
              Book Management
            </div>
            <i class="bi bi-chevron-down small dropdown-indicator"></i>
          </a>
          <div class="collapse {{ request()->is('admin/books*') || request()->is('admin/categories*') ? 'show' : '' }}" id="bookSubmenu">
            <ul class="nav flex-column ms-3 mt-1">
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.books.index') ? 'active bg-primary' : 'text-dark' }} py-2" href="{{ route('admin.dashboard') }}">
                  <i class="bi bi-list-ul me-2"></i>
                  Semua Buku
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.books.create') ? 'active bg-primary' : 'text-dark' }} py-2" href="{{ route('admin.dashboard') }}">
                  <i class="bi bi-plus-circle me-2"></i>
                  Tambah Buku
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.categories.*') ? 'active bg-primary' : 'text-dark' }} py-2" href="{{ route('admin.dashboard') }}">
                  <i class="bi bi-tags me-2"></i>
                  Kategori
                </a>
              </li>
            </ul>
          </div>
        </li>
        
        <!-- Borrow Management -->
        <li class="nav-item mb-1">
          <a class="nav-link text-dark d-flex align-items-center justify-content-between sidebar-dropdown-toggle" 
             data-bs-toggle="collapse" 
             href="#borrowSubmenu" 
             role="button" 
             aria-expanded="{{ request()->is('admin/borrows*') ? 'true' : 'false' }}">
            <div>
              <i class="bi bi-clipboard-check me-2"></i>
              Borrow Management
            </div>
            <i class="bi bi-chevron-down small dropdown-indicator"></i>
          </a>
          <div class="collapse {{ request()->is('admin/borrows*') ? 'show' : '' }}" id="borrowSubmenu">
            <ul class="nav flex-column ms-3 mt-1">
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.borrows.index') ? 'active bg-primary' : 'text-dark' }} py-2" href="{{ route('admin.dashboard') }}">
                  <i class="bi bi-list-ul me-2"></i>
                  Semua Peminjaman
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.borrows.create') ? 'active bg-primary' : 'text-dark' }} py-2" href="{{ route('admin.dashboard') }}">
                  <i class="bi bi-plus-circle me-2"></i>
                  Tambah Peminjaman
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.borrows.pending') ? 'active bg-primary' : 'text-dark' }} py-2" href="{{ route('admin.dashboard') }}">
                  <i class="bi bi-hourglass-split me-2"></i>
                  Peminjaman Tertunda
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.borrows.overdue') ? 'active bg-primary' : 'text-dark' }} py-2" href="{{ route('admin.dashboard') }}">
                  <i class="bi bi-exclamation-triangle me-2"></i>
                  Peminjaman Terlambat
                </a>
              </li>
            </ul>
          </div>
        </li>
        
        <li class="nav-item mt-3 mb-1">
          <small class="text-uppercase fw-bold text-muted px-3 py-2 d-block">Sistem</small>
        </li>
        <li class="nav-item mb-1">
          <a href="#" 
            data-bs-toggle="modal" 
            data-bs-target="#logoutModal"
            class="nav-link text-danger d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <i class="bi bi-box-arrow-right me-2"></i>
              <span>Logout</span>
            </div>
            <div class="logout-icon-container">
              <i class="bi bi-arrow-right-circle"></i>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
  
<style>
  .sidebar-hmpwk {
    width: 250px;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    z-index: 1000;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow-y: auto;
    transition: all 0.3s ease;
  }
  
  .sidebar-hmpwk .nav-link {
    border-radius: 6px;
    margin: 2px 0;
    padding: 8px 12px;
  }
  
  .sidebar-hmpwk .nav-link:hover {
    background-color: #f0f8ff;
  }
  
  .sidebar-hmpwk .nav-link.active {
    color: white !important;
  }
  
  .sidebar-dropdown-toggle[aria-expanded="true"] .dropdown-indicator {
    transform: rotate(180deg);
  }
  
  .dropdown-indicator {
    transition: transform 0.3s ease;
  }
  
  .logout-button:hover {
    background-color: #feebeb;
  }
  
  @media (max-width: 767.98px) {
    .sidebar-hmpwk {
      width: 100%;
      height: auto;
      position: relative;
    }
  }
</style>