@extends('layouts.app')

@section('title', 'Students')


@section('content')
<div class="max-w-6xl mx-auto p-4">
    <h4 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Lista studentilor</h4>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
        @forelse($students as $student)
            <a href="{{ route('students.show', ['student'=>$student->id]) }}">
                <div class="bg-white shadow-sm p-4 transform transition-transform duration-300 hover:scale-105 hover:shadow-md hover:cursor-pointer overflow-hidden">
                    <div class="text-center mb-4">
                        <h5 class="text-lg font-semibold text-gray-800 truncate">{{ $student->name }}</h5>
                        <p class="text-xs text-gray-500 truncate">{{ $student->email }}</p>
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between text-xs">
                            <span class="text-gray-600 font-medium">Telefon:</span>
                            <span class="text-gray-700 truncate">{{ $student->telefon }}</span>
                        </div>
                        <div class="flex justify-between text-xs">
                            <span class="text-gray-600 font-medium">Adresa:</span>
                            <span class="text-gray-700 truncate">{{ $student->adresa }}</span>
                        </div>
                    </div>
                </div>
            </a>
        @empty
            <p class="text-center text-gray-500">Nu sunt studenti in tabel</p>
        @endforelse
    </div>
</div>
@endsection