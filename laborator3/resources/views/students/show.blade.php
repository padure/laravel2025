@extends('layouts.app')

@section('title', 'Student Detalii')

@section('content')
<div class="max-w-6xl mx-auto p-4">
    <h4 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Detalii Student</h4>
    
    <div class="bg-white shadow-sm p-6">
        <div class="text-center mb-6">
            <h5 class="text-2xl font-semibold text-gray-800">{{ $student->name }}</h5>
            <p class="text-sm text-gray-500">{{ $student->email }}</p>
        </div>

        <div class="space-y-4">
            <div class="flex justify-start text-sm">
                <span class="text-gray-600 font-medium">Telefon:</span>
                <span class="text-gray-700">{{ $student->telefon }}</span>
            </div>
            <div class="flex justify-start text-sm">
                <span class="text-gray-600 font-medium">Adresa:</span>
                <span class="text-gray-700">{{ $student->adresa }}</span>
            </div>
        </div>

        <div class="mt-6 text-center">
            <a href="{{ route('students.index') }}" class="text-indigo-600 hover:text-indigo-800 text-sm">
                <i class="fas fa-arrow-left"></i> Înapoi la lista studenților
            </a>
        </div>
    </div>
</div>
@endsection
