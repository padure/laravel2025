<nav class="w-full bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800">Spring</a>
            </div>

            <div class="hidden md:flex space-x-6 items-center justify-center">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-gray-600">Acasă</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-gray-600">Despre</a>
                <a href="{{ route('services') }}" class="text-gray-700 hover:text-gray-600">Servicii</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-gray-600">Contact</a>
                <a href="{{ route('login') }}" class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
                    Autentificare
                </a>
            </div>

            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-800 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
        <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Acasă</a>
        <a href="{{ route('about') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Despre</a>
        <a href="{{ route('services') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Servicii</a>
        <a href="{{ route('contact') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>
        <a href="{{ route('login') }}" class="block px-4 py-2 bg-gray-600 text-white text-center hover:bg-gray-700">
            Autentificare
        </a>
    </div>
</nav>
