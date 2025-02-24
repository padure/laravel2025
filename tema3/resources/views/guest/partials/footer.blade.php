<footer class="bg-gray-800 text-white py-6 mt-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Secțiunea 1 -->
            <div>
                <h3 class="text-lg font-semibold">Despre Noi</h3>
                <p class="text-gray-400 text-sm mt-2">
                    Suntem dedicați oferirii celor mai bune servicii clienților noștri.
                </p>
            </div>

            <!-- Secțiunea 2: Linkuri rapide -->
            <div>
                <h3 class="text-lg font-semibold">Linkuri rapide</h3>
                <ul class="mt-2 space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-gray-200">Acasă</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-gray-200">Despre</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-gray-200">Servicii</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-gray-200">Contact</a></li>
                </ul>
            </div>

            <!-- Secțiunea 3: Contact -->
            <div>
                <h3 class="text-lg font-semibold">Contact</h3>
                <p class="text-gray-400 text-sm mt-2">Email: contact@mywebsite.com</p>
                <p class="text-gray-400 text-sm">Telefon: +373 123 456 789</p>
            </div>
        </div>

        <!-- Linia de jos -->
        <div class="border-t border-gray-700 mt-6 pt-4 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} Spring. Toate drepturile rezervate.
        </div>
    </div>
</footer>
