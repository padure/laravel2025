<x-layouts.home>
    <!-- Hero Section -->
    <section class="relative w-full h-[500px] flex items-center justify-center bg-gray-100">
        <img src="{{ asset('images/hero.jpg') }}" alt="Earphones" class="absolute inset-0 w-full h-full object-cover">
        <div class="relative z-10 text-center">
            <h1 class="text-4xl font-bold">PUT THE WORLD ON MUTE</h1>
        </div>
    </section>

    <!-- New Products -->
    <section class="py-16 text-center">
        <h2 class="text-2xl font-bold">NEW PRODUCTS</h2>
        <div class="grid grid-cols-3 gap-8 mt-8 px-16">
            @foreach ($products as $product)
                <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="mx-auto">
                    <p class="mt-2 font-semibold">{{ $product->name }}</p>
                    <p class="text-gray-700">${{ number_format($product->price, 2) }}</p>

                    <!-- Cerculețe pentru culori -->
                    <div class="flex justify-center mt-2 space-x-2">
                        @foreach ($product->colors as $color)
                            <span class="w-4 h-4 rounded-full border border-gray-300"
                                  style="background-color: {{ $color }};">
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Gallery -->
    <section class="py-16 text-center">
        <h2 class="text-2xl font-bold">GALLERY</h2>
        <div class="relative max-w-3xl mx-auto mt-8">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($galleryImages as $image)
                        <div class="swiper-slide">
                            <img src="{{ asset('images/' . $image) }}" alt="Gallery Image" class="w-full rounded-lg shadow-lg">
                        </div>
                    @endforeach
                </div>
                <!-- Butoane de navigare -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- Paginare -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</x-layouts.home>
