<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AudioShop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-black">

    <x-layouts.header />

    <x-layouts.container>
        {{ $slot }}
    </x-layouts.container>

    <x-layouts.footer />

</body>
</html>
