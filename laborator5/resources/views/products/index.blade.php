@extends('layouts.app')

@section('title', 'Produse')

@section('content')
    <div class="container mx-auto p-4">
        <h3 class="text-xl font-semibold text-center text-blue-600 mb-6">Lista Produselor</h3>
        <div class="mb-12">
            <a href="{{ route('products.create') }}" class="bg-slate-700 text-white py-2 px-5 rounded hover:bg-slate-500">Adauga</a>
        </div>
        <!-- Carduri produse -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                    <div class="p-4">
                        <h4 class="text-xl font-semibold text-gray-800">{{ $product->name }}</h4>
                        <p class="text-sm text-gray-600 mt-2">{{ Str::limit($product->description, 100) }}</p>
                        <p class="text-lg font-bold text-green-600 mt-4">{{ number_format($product->price, 2) }} RON</p>

                        <div class="flex justify-between mt-4">
                            <a  href="{{ route('products.show', ['product' => $product->id]) }}" 
                                class="text-blue-500 hover:text-blue-700">
                                Vezi detalii
                            </a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Șterge</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection