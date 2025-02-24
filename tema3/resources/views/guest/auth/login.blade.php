@extends('layouts.guest')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800">Autentificare</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" placeholder="Email" class="border p-2 w-full mb-2">
        <input type="password" name="password" placeholder="Parolă" class="border p-2 w-full mb-2">
        <button type="submit" class="bg-gray-600 text-white px-4 py-2 rounded">Autentificare</button>
    </form>
@endsection
