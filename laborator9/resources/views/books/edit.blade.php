@extends('layouts.main')

@section('title', 'Edit Book')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Edit Book</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-4 rounded mb-6">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.update', $book) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-gray-700 font-medium">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $book->title) }}"
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div>
                <label for="author" class="block text-gray-700 font-medium">Author</label>
                <input type="text" name="author" id="author" value="{{ old('author', $book->author) }}"
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div>
                <label for="year" class="block text-gray-700 font-medium">Year</label>
                <input type="number" name="year" id="year" value="{{ old('year', $book->year) }}"
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div>
                <label for="description" class="block text-gray-700 font-medium">Description</label>
                <textarea name="description" id="description" rows="4"
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gray-400">{{ old('description', $book->description) }}</textarea>
            </div>

            <div class="flex justify-end space-x-4">
                <a href="{{ route('books.index') }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</a>
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
            </div>
        </form>
    </div>
@endsection