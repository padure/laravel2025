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
            <div class="flex gap-4">
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

    <!-- Newsletter Section -->
    <section class="bg-blue-950 text-white py-16 mt-16">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold mb-6">Abonează-te la Newsletter</h2>
            <p class="text-sm mb-8">Fii la curent cu ultimele noutăți, oferte și servicii exclusive.</p>

            <form action="{{ route('newsletter.subscribe') }}" method="POST" class="max-w-xl mx-auto">
                @csrf
                <div class="flex items-center justify-center space-x-4">
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Introdu adresa de email"
                        class="py-3 px-4 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-900"
                        required />
                    @error('email')
                        <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                    <button
                        type="submit"
                        class="bg-blue-100 text-blue-900 py-3 px-6 rounded-md hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-50">
                        Abonează-te
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-950 text-white py-8 mt-10">
        <div class="container mx-auto px-6 sm:px-12 md:px-24 lg:px-32">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Secțiunea de Contact -->
                <div>
                    <h5 class="text-2xl font-semibold mb-4">Contacte</h5>
                    <p class="text-sm mb-2">Adresa: Strada Exemplu, Nr. 123</p>
                    <p class="text-sm mb-2">Telefon: +40 123 456 789</p>
                    <p class="text-sm">Email: <a href="mailto:contact@exemplu.com" class="text-blue-400">contact@exemplu.com</a></p>
                </div>

                <!-- Linkuri utile -->
                <div>
                    <h5 class="text-2xl font-semibold mb-4">Linkuri utile</h5>
                    <ul>
                        <li><a href="{{ route('pages.index') }}" class="text-sm text-white hover:text-blue-400">Acasa</a></li>
                        <li><a href="#" class="text-sm text-white hover:text-blue-400">Servicii</a></li>
                        <li><a href="#" class="text-sm text-white hover:text-blue-400">Contacte</a></li>
                        <li><a href="{{ route('login') }}" class="text-sm text-white hover:text-blue-400">Log in</a></li>
                        <li><a href="{{ route('register') }}" class="text-sm text-white hover:text-blue-400">Register</a></li>
                    </ul>
                </div>

                <!-- Secțiunea de Social Media -->
                <div>
                    <h5 class="text-2xl font-semibold mb-4">Urmărește-ne</h5>
                    <div class="flex gap-4">
                        <a href="#" class="text-blue-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-blue-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-blue-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-blue-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="border-t border-blue-800 mt-8 pt-4 text-center text-sm">
                <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Toate drepturile rezervate.</p>
            </div>
        </div>
    </footer>
</body>

</html>