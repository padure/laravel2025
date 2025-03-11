<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navbar -->
    <nav class="mb-10 shadow shadow-blue-100">
        <div class="container m-auto h-14 flex items-center justify-between">
        <div class="flex gap-4">
            <a href="{{ route('pages.index') }}" class="text-blue-950">Acasa</a>
            <a href="" class="text-blue-950">Servicii</a>
            <a href="" class="text-blue-950">Contacte</a>
        </div>
        <div>
            @auth
                <a href="{{ url('/dashboard') }}" class="text-blue-950">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="text-blue-950">
                    Log in
                </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-blue-950">
                            Register
                        </a>
                    @endif
            @endauth
        </div>
        </div>
    </nav>
    <!-- Header -->
    <header>
        {{ $header }}
    </header>
    <!-- Main -->
    <main>
        {{ $slot }}
    </main>
    <!-- Footer -->
    <footer>

    </footer>
</body>
</html>