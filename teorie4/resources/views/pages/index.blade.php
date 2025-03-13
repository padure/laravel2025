<x-main-layout>
    <x-slot name="header">
        <div class="container m-auto relative">
            <img
                src="{{ asset('images/header.jpg') }}" alt="Header"
                class="h-header object-cover w-full">
            <h1 class="title absolute left-20 top-52 text-5xl w-1/2 text-white lh-title">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </h1>
        </div>
    </x-slot>

    <section class="container m-auto mt-8">
        <h4 class="text-3xl text-blue-950 font-bold mb-8">Servicii</h4>

        <!-- Carduri pentru servicii -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach($services as $service)
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                <!-- Imaginea serviciului -->
                @if($service->image)
                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="w-full h-48 object-cover rounded-md mb-4">
                @else
                <div class="w-full h-48 bg-gray-200 rounded-md mb-4"></div> <!-- Placeholder pentru imagine -->
                @endif

                <!-- Titlu serviciu -->
                <h5 class="text-xl font-semibold text-blue-950 mb-2">{{ $service->title }}</h5>

                <!-- Descrierea serviciului -->
                <p class="text-sm text-gray-600 mb-4">{{ Str::limit($service->description, 100) }}</p>

                <!-- Statusul serviciului -->
                <span
                    class="inline-block px-4 py-1 text-sm font-semibold text-white 
                        {{ $service->status == 'activ' ? 'bg-green-500' : 'bg-red-500' }} 
                        rounded-full">
                    {{ ucfirst($service->status) }}
                </span>
            </div>
            @endforeach
        </div>
    </section>
</x-main-layout>