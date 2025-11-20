<x-layout title="Cari Kost Terbaik di Sekitarmu">

    <div class="relative bg-indigo-700 h-96 flex items-center justify-center mb-10 rounded-lg shadow-xl">
        <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image: url('https://picsum.photos/1200/900?random=1');"></div>
        
        <div class="relative text-center text-white p-6">
            <h1 class="text-5xl font-extrabold mb-4 animate-fadeIn">
                Temukan Kost Nyaman dan Murah
            </h1>
            <p class="text-xl font-light mb-8">
                Ribuan pilihan kost, asrama, dan kontrakan siap huni.
            </p>

            <form action="#" method="GET" class="bg-white p-4 rounded-lg shadow-2xl max-w-2xl mx-auto">
                <div class="flex flex-col md:flex-row gap-4">
                    <input type="text" name="location" placeholder="Masukkan Nama Kota atau Area..." class="flex-grow p-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 text-gray-800">
                    
                    <select name="type" class="p-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 text-gray-800">
                        <option value="">Semua Tipe</option>
                        <option value="putra">Kost Putra</option>
                        <option value="putri">Kost Putri</option>
                        <option value="campur">Kost Campur</option>
                    </select>

                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                        Cari Kost
                    </button>
                </div>
            </form>
        </div>
    </div>

    <section class="py-10">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Pilihan Kost Unggulan Bulan Ini</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
            
            {{-- Loop data kost dari Controller. Jika menggunakan Opsi 2 di atas: --}}
            @forelse ($featuredKosts ?? [] as $kost)
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                <img src="{{ $kost['image'] ?? 'https://picsum.photos/400/300?random=' . $loop->index }}" 
                     alt="{{ $kost['name'] ?? 'Nama Kost' }}" 
                     class="w-full h-48 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-indigo-600 mb-1">{{ $kost['name'] ?? 'Kost Sentosa Jaya' }}</h3>
                    <p class="text-sm text-gray-500 mb-3">{{ $kost['location'] ?? 'Jawa Barat, Bandung' }}</p>
                    <p class="text-2xl font-bold text-green-600 mb-3">
                        Rp {{ number_format($kost['price'] ?? 1500000) }}
                        <span class="text-base font-normal text-gray-500">/ Bulan</span>
                    </p>
                    
                    <div class="flex justify-between items-center text-sm text-gray-600">
                        <span>Tipe: <span class="font-medium capitalize">{{ $kost['type'] ?? 'Putri' }}</span></span>
                        <span>Rating: <span class="font-medium text-yellow-500">4.{{ $loop->iteration }} ⭐</span></span>
                    </div>

                    <a href="#" 
                       class="mt-4 block text-center bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600 transition duration-200">
                        Lihat Detail
                    </a>
                </div>
            </div>
            @empty
            {{-- Ini muncul jika $featuredKosts kosong --}}
            <p class="col-span-4 text-center text-gray-500 italic">Belum ada data kost unggulan yang ditampilkan.</p>
            @endforelse
            
        </div>
        
        <div class="text-center mt-10">
            <a href="#" class="inline-block bg-transparent border-2 border-indigo-600 text-indigo-600 font-bold py-3 px-8 rounded-full hover:bg-indigo-600 hover:text-white transition duration-300">
                Lihat Semua Kost ({{ $totalKosts ?? '1.200' }})
            </a>
        </div>
    </section>

    <section class="py-10 my-10 bg-white rounded-xl shadow-inner">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-4xl font-bold text-indigo-800 mb-3">Punya Kost atau Asrama?</h2>
            <p class="text-lg text-gray-600 mb-6">
                Daftarkan properti Anda sekarang dan jangkau ribuan calon penyewa setiap hari. Proses mudah, cepat, dan GRATIS!
            </p>
            <a href="#" class="inline-block bg-green-500 text-white font-bold py-3 px-8 rounded-full text-lg hover:bg-green-600 transition duration-300 shadow-md">
                Daftarkan Kost Saya Sekarang
            </a>
        </div>
    </section>

</x-layout>