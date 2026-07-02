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

    @if($role !== 'admin')
        @include('partials.footer', ['role' => $role])
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="{{ asset('js/script.js') }}"></script>
</body>
</html>
