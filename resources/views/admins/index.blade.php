@extends('layouts.admin')

@section('content')

<div class="container-fluid px-4 py-3">
    
    {{-- Dashboard Header --}}
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3 fw-bold text-dark m-0">Dashboard Overview</h1>
            <p class="text-muted small m-0">Real-time statistics and summary of your spa relaxation platform.</p>
        </div>
    </div>

    {{-- Statistics Widgets Grid --}}
    <div class="row g-4">
        
        {{-- Widget 1: Branches --}}
        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-3 bg-white h-100">
                <div class="card-body p-4 d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted text-uppercase fw-bold small mb-1">Branches</h6>
                        <span class="h2 fw-bold text-dark d-block mb-0">{{ $branchesCount }}</span>
                    </div>
                    <div class="bg-light p-3 rounded-circle text-primary">
                        <i class="fas fa-store fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Widget 2: Rooms and Spa Services --}}
        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-3 bg-white h-100">
                <div class="card-body p-4 d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted text-uppercase fw-bold small mb-1">Spa Services</h6>
                        <span class="h2 fw-bold text-dark d-block mb-0">{{ $servicesCount }}</span>
                    </div>
                    <div class="bg-light p-3 rounded-circle text-success">
                        <i class="fas fa-spa fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Widget 3: Admins --}}
        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-3 bg-white h-100">
                <div class="card-body p-4 d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted text-uppercase fw-bold small mb-1">Admins</h6>
                        <span class="h2 fw-bold text-dark d-block mb-0">{{ $adminsCount }}</span>
                    </div>
                    <div class="bg-light p-3 rounded-circle text-info">
                        <i class="fas fa-user-shield fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Widget 4: Bookings --}}
        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-3 bg-white h-100">
                <div class="card-body p-4 d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted text-uppercase fw-bold small mb-1">Total Bookings</h6>
                        <span class="h2 fw-bold text-dark d-block mb-0">{{ $bookingsCount }}</span>
                    </div>
                    <div class="bg-light p-3 rounded-circle text-warning">
                        <i class="fas fa-calendar-check fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection