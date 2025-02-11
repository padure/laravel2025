<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="h-16 bg-slate-800 flex items-center px-12">
        <a href="{{ route('products.index') }}" class="text-white hover:underline">Products</a>
    </nav>
    @yield('content')
    <footer class="h-40 bg-slate-800 text-white flex items-center justify-center">
        @ Toate drepturile rezervate
    </footer>
</body>
</html>