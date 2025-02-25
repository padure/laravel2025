@extends('layouts.guest')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Autentificare</h1>
    <form method="POST" action="{{ route('login') }}" class="md:w-1/2 m-auto">
        @csrf
        <input type="email" name="email" placeholder="Email" class="border p-2 w-full mb-6">
        <input type="password" name="password" placeholder="Parolă" class="border p-2 w-full mb-6">
        <div class="flex justify-between">
            <button type="submit" class="bg-gray-600 text-white px-4 py-2 rounded">Autentificare</button>
            <a href="#" class="text-gray-800 px-4 py-2 rounded">Crează un cont</a>
        </div>
    </form>
@endsection
