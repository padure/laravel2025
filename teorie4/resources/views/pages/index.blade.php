<x-main-layout>
    <x-slot 
        name="header">
        <div class="container m-auto relative">
            <img 
                src="{{ asset('images/header.jpg') }}" alt="Header" 
                class="h-header object-cover w-full"
            >
            <h1 class="title absolute left-20 top-52 text-5xl w-1/2 text-white lh-title">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </h1>
        </div>
    </x-slot>
    <section class="container m-auto mt-8">
        <h4 class="text-3xl text-blue-950 font-bold">Servicii</h4>
    </section>
</x-main-layout>