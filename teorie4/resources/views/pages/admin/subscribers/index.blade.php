<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscribers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('subscribers.create') }}"
                       class="bg-blue-950 text-white p-2 rounded-md">
                       Adauga
                    </a>

                    <!-- Mesaj de succes dacă există -->
                    @if (session('success'))
                        <div class="bg-green-100 text-green-800 p-4 rounded-md mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Tabelul cu serviciile -->
                    <table class="min-w-full table-auto mt-6">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subscriber</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($subscribers as $subscriber)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $subscriber->email }}</td>                                   
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('subscribers.edit', $subscriber->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a> |
                                        <form action="{{ route('subscribers.destroy', $subscriber->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>