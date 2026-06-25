<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel | On-The-Go Relaxation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">   
    <link href="{{ asset('assets/styles/styleadmin.css') }}" rel="stylesheet">
</head>
<body>
<div @auth('admin') id="wrapper" @endauth>
    
    <nav class="navbar header-top fixed-top navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fa-solid fa-user-shield me-2"></i>ADMIN SIDE | On-The-Go Relaxation
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                
                @auth('admin')
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-1 gap-lg-3 ps-lg-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admins.dashboard') }}">
                                <i class="fa-solid fa-house me-1"></i>Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admins.all') }}">
                                <i class="fa-solid fa-users-gear me-1"></i>Admins
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('branches.all') }}">
                                <i class="fa-solid fa-code-branch me-1"></i>Branches
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('roomspa.all') }}">
                                <i class="fa-solid fa-spa me-1"></i>Services Offered
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('bookings.all') }}">
                                <i class="fa-solid fa-calendar-check me-1"></i>All Bookings
                            </a>
                        </li>
                    </ul>
                @endauth

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    @auth('admin')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-circle-user me-1 text-info"></i>{{ Auth::guard('admin')->user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item text-danger fw-bold" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-right-from-bracket me-2"></i>{{ __('Logout') }}
                                    </a>
                                </li>
                            </ul>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-light btn-sm px-3 text-white" href="{{ route('home') }}">
                                <i class="fa-solid fa-arrow-left me-2"></i>Go Back to Website
                            </a>
                        </li>
                    @endauth
                </ul>
                
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>