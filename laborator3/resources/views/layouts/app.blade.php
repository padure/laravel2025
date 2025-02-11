<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="h-14 px-10 bg-slate-600 flex items-center">
        <a href="{{ route('students.index') }}" class="text-white">Students</a>
    </nav>
    <div>
        @yield('content')
    </div>
    <footer class="h-32 flex items-center justify-center text-white bg-slate-900">
        @ Toate drepturile sunt rezervate
    </footer>
</body>
</html>