<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('partials.nav')
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <!-- Footer Content -->
        <footer class="bg-slate-700 h-42 flex items-center justify-center text-white mt-12">
            <p>&copy; Toate drepturile rezervate 2021 - {{ date("Y") }}</p>
        </footer>
    </body>
</html>
