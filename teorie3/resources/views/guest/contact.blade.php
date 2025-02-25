@extends('layouts.guest')

@section('title', 'Contact')

@section('content')
    <section class="mt-8 flex items-center justify-center flex-col gap-4">
        <h1 class="text-3xl font-bold text-gray-800">Contact</h1>
        <form action="#" method="POST" class="w-full max-w-lg bg-white shadow-md rounded-lg p-6">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nume:</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-bold mb-2">Mesaj:</label>
                <textarea id="message" name="message" class="w-full px-3 py-2 border rounded-lg" rows="5" required></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Trimite</button>
            </div>
        </form>
    </section>
@endsection
