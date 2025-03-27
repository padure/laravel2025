@extends('layouts.main')

@section('title', 'Books List')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Books List</h1>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if ($books->isEmpty())
            <p class="text-gray-600">No books available.</p>
        @else
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-800">
                        <th class="border border-gray-300 px-4 py-2 text-left">Title</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Author</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2">{{ $book->title }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $book->author }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <a href="{{ route('books.edit', $book) }}" class="text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline ml-2"
                                        onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination Links -->
            <div class="mt-6">
                {{ $books->links('pagination::tailwind') }}
            </div>
        @endif
    </div>
@endsection