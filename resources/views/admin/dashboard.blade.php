@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid p-4">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="page-title mb-2">Dashboard</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="text-decoration-none">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="row g-3 mb-4">
            <!-- Total Books Card -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3">
                            <i class="bi bi-book text-primary fs-4"></i>
                        </div>
                        <div>
                            <h6 class="card-subtitle mb-1 text-muted">Total Buku</h6>
                            <h3 class="card-title mb-0">0</h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Total Users Card -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                            <i class="bi bi-people text-success fs-4"></i>
                        </div>
                        <div>
                            <h6 class="card-subtitle mb-1 text-muted">Total Pengguna</h6>
                            <h3 class="card-title mb-0">0</h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Active Borrows Card -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="rounded-circle bg-info bg-opacity-10 p-3 me-3">
                            <i class="bi bi-clipboard-check text-info fs-4"></i>
                        </div>
                        <div>
                            <h6 class="card-subtitle mb-1 text-muted">Peminjaman Aktif</h6>
                            <h3 class="card-title mb-0">0</h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Overdue Borrows Card -->
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body d-flex align-items-center">
                        <div class="rounded-circle bg-danger bg-opacity-10 p-3 me-3">
                            <i class="bi bi-exclamation-triangle text-danger fs-4"></i>
                        </div>
                        <div>
                            <h6 class="card-subtitle mb-1 text-muted">Terlambat</h6>
                            <h3 class="card-title mb-0">0</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row g-3">
            <!-- Recent Borrows -->
            <div class="col-12 col-lg-8">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Peminjaman Terbaru</h5>
                        <a href="#" class="btn btn-sm btn-primary">Lihat Semua</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Pengguna</th>
                                        <th>Buku</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="text-center py-4 text-muted">Belum ada data peminjaman</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Popular Books -->
            <div class="col-12 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white py-3">
                        <h5 class="card-title mb-0">Buku Populer</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-center text-muted">
                                <i class="bi bi-bar-chart fs-3 mb-2"></i>
                                <p>Belum ada data buku populer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .content-wrapper {
        margin-left: 250px;
        transition: margin-left 0.3s ease;
        min-height: 100vh;
        background-color: #f5f7fb;
        width: calc(100% - 250px);
        padding-right: 0;
    }
    
    .container-fluid {
        max-width: 100%;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
    
    .page-title {
        color: #333;
        font-weight: 600;
    }
    
    .card {
        border-radius: 10px;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    
    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    }
    
    .card-header {
        border-top-left-radius: 10px !important;
        border-top-right-radius: 10px !important;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    
    .breadcrumb-item a {
        color: var(--bs-primary);
    }
    
    @media (max-width: 767.98px) {
        .content-wrapper {
            margin-left: 0;
            width: 100%;
        }
    }
</style>
@endpush