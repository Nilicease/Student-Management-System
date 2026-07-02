@php
    $role = $role ?? 'guest';
@endphp

@if($role === 'admin')
    <div class="d-flex min-vh-100 bg-white">
        <aside class="bg-dark text-white p-3" style="width: 260px; min-height: 100vh;">
            <h4 class="mb-4">Admin Panel</h4>
            <nav class="nav flex-column gap-2">
                <a class="nav-link text-white-50" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a class="nav-link text-white-50" href="{{ route('admin.users') }}">Users</a>
                <a class="nav-link text-white-50" href="{{ route('admin.teachers') }}">Teachers</a>
                <a class="nav-link text-white-50" href="{{ route('admin.students') }}">Students</a>
                <a class="nav-link text-white-50" href="{{ route('admin.subjects') }}">Subjects</a>
                <a class="nav-link text-white-50" href="{{ route('admin.courses') }}">Courses</a>
                <a class="nav-link text-white-50" href="{{ route('admin.profile') }}">Profile</a>
                <a class="nav-link text-white-50" href="{{ route('admin.logout') }}">Logout</a>
            </nav>
        </aside>

        <div class="flex-grow-1">
            <header class="bg-white border-bottom p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Welcome, Admin</h5>
                    <a href="#" class="btn btn-outline-dark btn-sm">Logout</a>
                </div>
            </header>
        </div>
    </div>
@else
    <header class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="#">SMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="topNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link px-3" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="{{ url('/#about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="{{ url('/#contact') }}">Contact</a></li>
                </ul>
            </div>
            <ul class="navbar-nav ms-auto">
                @if($role === 'guest')
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Sign In</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
                @endif
            </ul>
        </div>
    </header>
@endif
