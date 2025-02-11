@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
<div class="container mx-auto p-4">
    <h3 class="text-xl font-semibold text-center text-blue-600 mb-6">Adauga un produs</h3>
    <!-- @if ($errors->any())
        <div class="">
            <ul class="list-disc">
                @foreach ($errors->all() as $error)
                    <li class="bg-red-700 text-white my-1 border-red-800 p-2">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
    <div class="md:w-2/3 lg:w-1/2 mx-auto">
        <form action="{{ route('products.store') }}" method="post" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="mt-1 py-2 px-1 block w-full rounded-md border border-gray-500 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 sm:text-sm">
                @error('name')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="3" class="mt-1 py-2 px-1 block w-full rounded-md border border-gray-500 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 sm:text-sm"></textarea>
                @error('description')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="text" name="price" id="price" class="mt-1 py-2 px-1 block w-full rounded-md border border-gray-500 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 sm:text-sm">
                @error('price')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
                <input type="number" name="stock" id="stock" class="mt-1 py-2 px-1 block w-full rounded-md border border-gray-500 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 sm:text-sm">
                @error('stock')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="text-sm w-full bg-slate-500 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Salveaza
            </button>
        </form>
    </div>
</div>
@endsection