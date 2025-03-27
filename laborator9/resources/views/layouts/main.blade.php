<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <header class="bg-gray-800 text-white shadow-md">
        <nav class="container mx-auto flex justify-between items-center py-4 px-6">
            <a href="{{ route('books.index') }}" class="text-lg font-bold hover:text-gray-300">Laravel App</a>
            <ul class="flex space-x-4">
                <li>
                    <a href="{{ route('books.index') }}" class="hover:text-gray-300">Books</a>
                </li>
                <li>
                    <a href="{{ route('books.create') }}" class="hover:text-gray-300">Add Book</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="container mx-auto py-8 px-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Laravel App. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>