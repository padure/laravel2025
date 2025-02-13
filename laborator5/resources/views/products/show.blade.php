@extends('layouts.app')

@section('title', 'Detalii Produs')

@section('content')
    <div class="container mx-auto p-8 shadow-lg my-6">
        <!-- Secțiune cu titlu și buton de înapoi -->
        <h1 class="text-3xl font-bold text-blue-700 mb-5 uppercase">{{ $product->name }}</h1>
        <div class="h-12">
            <a href="{{ route('products.index') }}" class="bg-slate-700 text-white rounded shadow-sm hover:bg-slate-500 p-2">
                Înapoi la lista
            </a>
            <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="bg-orange-700 text-white rounded shadow-sm hover:bg-orange-500 p-2 ms-4">
                Editeaza
            </a>
        </div>

        <!-- Secțiune cu detalii produs -->
        <div class="bg-white rounded-2xl py-8">
            <div class="space-y-6">
                <p class="text-gray-800 text-lg leading-relaxed">{{ $product->description }}</p>
                <p class="text-2xl font-semibold text-green-700">{{ number_format($product->price, 2) }} RON</p>
            </div>
        </div>
    </div>
@endsection
