@extends('layouts.guest')

@section('title', 'Home page')

@section('header')
    @parent
    @include('guest.partials.header')
@endsection

@section('content')
    <section class="mt-8 flex items-center justify-center flex-col gap-4">
        <h1 class="text-3xl font-bold text-gray-800">Bine ai venit!</h1>
        <p class="text-gray-600">Aceasta este pagina principală a site-ului.</p>
        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($services as $service)
                <div class="bg-white shadow-md rounded-lg p-6">
                    <img src="{{ asset('uploads/services/' . $service->image) }}" alt="{{ $service->name }}" class="w-full h-72 object-cover rounded-t-lg">
                    <h2 class="text-xl font-semibold text-gray-800 mt-4">{{ $service->name }}</h2>
                    <p class="text-gray-600 mt-2">{{ Str::limit($service->description, 60) }}</p>
                    <p class="text-gray-800 font-bold mt-2">${{ number_format($service->price, 2) }}</p>
                    <a href="{{ route('services.show', $service->id) }}" class="text-gray-500 hover:underline mt-4 inline-block">Read more</a>
                </div>
            @endforeach
        </div>
    </section>
@endsection