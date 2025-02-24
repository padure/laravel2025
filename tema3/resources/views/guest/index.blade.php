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
    </section>
@endsection