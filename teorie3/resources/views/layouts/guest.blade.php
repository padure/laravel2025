<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    @include('guest.partials.nav')
    @section('header')
        
    @show
    <main  class="max-w-7xl mx-auto p-6">
        @yield('content')
    </main >
    @include('guest.partials.footer')
</body>

</html>