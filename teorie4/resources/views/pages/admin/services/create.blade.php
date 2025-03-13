<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Service') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg font-bold mb-6">Inregistreaza un serviciu</h1>
                    <form action="{{ route('services.store') }}" method="post" class="w-1/2" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="font-bold">Title</label>
                            <input 
                                type="text" 
                                name="title" 
                                id="title" 
                                class="p-2 border rounded-md w-full" 
                            />
                            @error('title')
                                <div class="text-red-700">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="font-bold">Description</label>
                            <textarea 
                                name="description" 
                                id="description" 
                                class="p-2 border rounded-md w-full"
                            ></textarea>
                            @error('description')
                                <div class="text-red-700">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="font-bold">Image</label>
                            <input 
                                type="file" 
                                name="image" 
                                id="image" 
                                class="p-2 border rounded-md w-full" 
                            />
                            @error('image')
                                <div class="text-red-700">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="status" class="font-bold">Status</label>
                            <select name="status" id="status" class="p-2 border rounded-md w-full">
                                <option value="activ">Activ</option>
                                <option value="inactiv">Inactiv</option>
                            </select>
                        </div>
                        <button type="submit" class="bg-blue-950 text-white p-2 rounded-md">Salveaza</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
