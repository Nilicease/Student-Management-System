<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMS')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    @php
        $role = optional(auth()->user())->role ?? 'guest';
    @endphp

    @if($role === 'admin')
        <div class="d-flex min-vh-100">
            @include('partials.header', ['role' => $role])

            <div class="flex-grow-1 d-flex flex-column">
                <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm sticky-top">
                    <div class="container-fluid px-4">
                        <button class="btn btn-outline-secondary d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminSidebar">
                            <i class="bi bi-list"></i>
                        </button>
                        <span class="navbar-brand mb-0 h5">Student Management System</span>
                        <div class="ms-auto d-flex align-items-center gap-2">
                            <span class="badge bg-primary-subtle text-primary">Admin</span>
                            <form action="{{ route('logout') }}" method="post" class="d-inline">
                                @csrf
                                <button class="btn btn-outline-danger btn-sm" type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                </nav>

                <main class="flex-grow-1 p-4 bg-light">
                    @yield('admin')
                </main>
            </div>
        </div>
    @else
        @include('partials.header', ['role' => $role])

        <main class="container py-4">
            @auth
                @switch($role)
                    @case('admin')
                        @yield('admin')
                        @break
                    @case('student')
                        @yield('student')
                        @break
                    @case('teacher')
                        @yield('teacher')
                        @break
                    @default
                        @yield('user')
                @endswitch
            @else
                @yield('guest')
            @endauth
        </main>

        @include('partials.footer', ['role' => $role])
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>
</html>
