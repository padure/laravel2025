<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 leading-tight">
            {{ __('Înregistrează un student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <div class="flex justify-start">
                    <a href="{{ route('admin.students.index') }}" 
                       class="underline underline-offset-4 py-2 px-3 text-xs font-bold hover:text-slate-600">Înapoi la listă</a>
                </div>

                <!-- Formularul pentru crearea unui student -->
                <div class="mt-6 w-1/2 m-auto">
                    <form action="{{ route('admin.students.store') }}" method="POST">
                        @csrf
                        <h3 class="mb-4 font-bold text-center text-gray-700">Adauga un student</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <!-- Nume -->
                            <div class="flex flex-col gap-3 mb-3 items-center">
                                <label for="first_name" class="text-sm font-semibold text-gray-700 mb-1">Prenume</label>
                                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" 
                                       class="w-full py-1 px-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                                @error('first_name') 
                                    <span class="text-red-600 text-xs">{{ $message }}</span> 
                                @enderror
                            </div>

                            <!-- Prenume -->
                            <div class="flex flex-col gap-3 mb-3 items-center">
                                <label for="last_name" class="text-sm font-semibold text-gray-700 mb-1">Nume de familie</label>
                                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" 
                                       class="w-full py-1 px-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                                @error('last_name') 
                                    <span class="text-red-600 text-xs">{{ $message }}</span> 
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="flex flex-col gap-3 mb-3 items-center">
                                <label for="email" class="text-sm font-semibold text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" 
                                       class="w-full py-1 px-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                                @error('email') 
                                    <span class="text-red-600 text-xs">{{ $message }}</span> 
                                @enderror
                            </div>

                            <!-- Telefon -->
                            <div class="flex flex-col gap-3 mb-3 items-center">
                                <label for="phone_number" class="text-sm font-semibold text-gray-700 mb-1">Număr de telefon</label>
                                <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" 
                                       class="w-full py-1 px-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                @error('phone_number') 
                                    <span class="text-red-600 text-xs">{{ $message }}</span> 
                                @enderror
                            </div>

                            <!-- Adresă -->
                            <div class="flex flex-col gap-3 mb-3 items-center">
                                <label for="address" class="text-sm font-semibold text-gray-700 mb-1">Adresă</label>
                                <input type="text" id="address" name="address" value="{{ old('address') }}" 
                                       class="w-full py-1 px-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                @error('address') 
                                    <span class="text-red-600 text-xs">{{ $message }}</span> 
                                @enderror
                            </div>

                            <!-- Gen -->
                            <div class="flex flex-col gap-3 mb-3 items-center">
                                <label for="gender" class="text-sm font-semibold text-gray-700 mb-1">Gen</label>
                                <select id="gender" name="gender" class="w-full py-1 px-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Masculin</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Feminin</option>
                                    <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Altul</option>
                                </select>
                                @error('gender') 
                                    <span class="text-red-600 text-xs">{{ $message }}</span> 
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 text-center">
                            <button type="submit" class="text-sm px-6 py-2 bg-slate-600 text-white rounded-md hover:bg-slate-700 hover:cursor-pointer">Adaugă studentul</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
