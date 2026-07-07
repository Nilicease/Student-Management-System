@php
    $role = $role ?? 'guest';
@endphp

@if($role === 'admin')
    <aside id="adminSidebar" class="collapse d-lg-block bg-dark text-white p-3" style="width: 260px; min-height: 100vh;">
        <div class="d-flex align-items-center gap-2 mb-4">
            <div class="rounded-circle bg-primary-subtle p-2 text-primary">
                <i class="bi bi-mortarboard-fill"></i>
            </div>
            <div>
                <h5 class="mb-0">Admin</h5>
                <small class="text-white-50">Control Center</small>
            </div>
        </div>

        <nav class="nav flex-column gap-2">
            <a class="nav-link text-white-50 rounded px-3 py-2 {{ request()->routeIs('admin.dashboard') ? 'bg-primary text-white' : '' }}" href="{{ route('admin.dashboard') }}"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
            <a class="nav-link text-white-50 rounded px-3 py-2 {{ request()->routeIs('admin.users*') ? 'bg-primary text-white' : '' }}" href="{{ route('admin.users.index') }}"><i class="bi bi-people me-2"></i>Users</a>
            <a class="nav-link text-white-50 rounded px-3 py-2 {{ request()->routeIs('admin.teachers*') ? 'bg-primary text-white' : '' }}" href="{{ route('admin.teachers.index') }}"><i class="bi bi-person-badge me-2"></i>Teachers</a>
            <a class="nav-link text-white-50 rounded px-3 py-2 {{ request()->routeIs('admin.students*') ? 'bg-primary text-white' : '' }}" href="{{ route('admin.students.index') }}"><i class="bi bi-mortarboard me-2"></i>Students</a>
            <a class="nav-link text-white-50 rounded px-3 py-2 {{ request()->routeIs('admin.courses*') ? 'bg-primary text-white' : '' }}" href="{{ route('admin.courses.index') }}"><i class="bi bi-journals me-2"></i>Courses</a>
            <a class="nav-link text-white-50 rounded px-3 py-2 {{ request()->routeIs('admin.subjects*') ? 'bg-primary text-white' : '' }}" href="{{ route('admin.subjects.index') }}"><i class="bi bi-book me-2"></i>Subjects</a>
            <a class="nav-link text-white-50 rounded px-3 py-2 {{ request()->routeIs('admin.profile') ? 'bg-primary text-white' : '' }}" href="{{ route('admin.profile') }}"><i class="bi bi-person-circle me-2"></i>Profile</a>
        </nav>

        <div class="mt-4 pt-3 border-top border-secondary">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm w-100"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
            </form>
        </div>
    </aside>
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
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">Logout</button>
                    </form>
                @endif
            </ul>
        </div>
    </header>
@endif
