<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            
            <div class="flex-shrink-0 flex items-center">
                <a href="#" class="text-2xl font-bold text-indigo-600">
                    Kost Rivaldy
                </a>
            </div>

            <div class="hidden sm:ml-6 sm:flex sm:space-x-8 items-center">
                <a href="#" 
                   class="text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-medium hover:text-indigo-600 transition duration-150 ease-in-out">
                    Beranda
                </a>
                <a href="#" 
                   class="text-gray-500 hover:text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-medium hover:text-indigo-600 transition duration-150 ease-in-out">
                    Cari Kost
                </a>
                <a href="#" 
                   class="text-gray-500 hover:text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-medium hover:text-indigo-600 transition duration-150 ease-in-out">
                    Tentang Kami
                </a>
            </div>

            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                
                {{-- Cek apakah user sudah login atau belum (Contoh Blade) --}}
                @auth
                    <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-900 mr-4">
                        Dashboard
                    </a>
                    <button type="submit" class="text-sm font-medium text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg transition duration-150">
                        Logout
                    </button>
                @else
                    <a href="#" 
                       class="text-sm font-medium text-gray-500 hover:text-indigo-600 mr-4 transition duration-150 ease-in-out">
                        Login
                    </a>
                    <a href="#" 
                       class="text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded-lg transition duration-150 ease-in-out shadow-md">
                        Daftar Gratis
                    </a>
                @endauth
            </div>
            
            <div class="-mr-2 flex items-center sm:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="sm:hidden" id="mobile-menu">
        <div class="pt-2 pb-3 space-y-1">
            <a href="#" class="bg-indigo-50 border-indigo-500 text-indigo-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Beranda</a>
            <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Cari Kost</a>
            <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Tentang Kami</a>
        </div>
        @guest
        <div class="pt-4 pb-3 border-t border-gray-200">
            <a href="#" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-indigo-600">Login</a>
            <a href="#" class="block px-4 py-2 text-base font-medium text-white bg-indigo-600 mx-4 rounded-lg text-center mt-2">Daftar</a>
        </div>
        @endguest
    </div>
</nav>