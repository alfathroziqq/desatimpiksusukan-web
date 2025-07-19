<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desa Timpik | Website Resmi</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logo-timpik.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Poppins:wght@400;600;700&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Alpine.js (PENTING untuk dropdown interaktif) -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .font-serif-display {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    @include('layouts.partials.header')

    <main>
        <!-- Hero -->
        <section class="relative min-h-screen w-full -mt-20 flex items-center justify-center lg:justify-start">
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('{{ asset('images/welcome-sawah.png') }}');">
            </div>

            <div class="absolute inset-0 bg-gradient-to-t from-[#0C3B2E]/60 via-transparent to-transparent"></div>
            <div class="absolute inset-0 bg-black/20"></div>

            <div class="relative z-10 container mx-auto px-6 text-center lg:text-left lg:pl-24">
                <div class="max-w-xl lg:max-w-2xl">
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-[#0C3B2E]"
                        style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Selamat Datang
                    </h1>
                    <p class="lg:mt-4 text-4xl md:text-5xl lg:text-7xl text-white italic"
                        style="font-family: 'Playfair Display', serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Website <span class="text-[#E8C187]">Desa Timpik</span>
                    </p>
                </div>
            </div>
        </section>

        <!-- Sejarah Section -->
        <section class="py-16 md:py-10 bg-white mb-15">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4">
                <div class="text-center mb-10">
                    <h2 class="text-3xl sm:text-4xl font-bold text-[#0C3B2E]" style="font-family: 'Poppins', sans-serif">Desa Timpik</h2>
                    <div class="w-20 h-1 bg-[#0C3B2E] mx-auto mt-3"></div>
                </div>
                <div class="flex flex-col lg:flex-row gap-10 lg:gap-14 items-center">

                    <div
                        class="w-full lg:w-1/3 bg-[#0C3B2E] text-white p-6 sm:p-8 rounded-3xl shadow-2xl transform hover:-translate-y-2 transition duration-300">
                        <h3 class="text-2xl sm:text-3xl font-bold mb-4 border-b-2 border-teal-400 pb-2 font-poppins" style="font-family: 'Poppins', sans-serif">
                            Sejarah</h3>
                        <p class="text-[#C8C7CC] leading-relaxed mb-6 text-justify text-sm sm:text-base font-poppins" style="font-family: 'Poppins', sans-serif">
                            Desa Timpik, yang terletak di Kecamatan Susukan, Kabupaten Semarang, merupakan wilayah yang
                            kaya sejarah dan budaya.
                            Di desa ini pernah ditemukan artefak peninggalan Hindu berupa yoni di area Masjid Kauman,
                            menunjukkan jejak peradaban
                            kuno sebelum Islam masuk. Kini, Timpik berkembang menjadi desa wisata edukatif berbasis
                            pertanian modern,
                            lengkap dengan zona bunga, kolam balon, dan wahana outbound, menjadikannya destinasi menarik
                            yang memadukan
                            nilai sejarah dan inovasi pertanian bagi wisata keluarga.
                        </p>
                        <a href="#"
                            class="bg-[#3D7364] text-white border border-white px-6 py-2 rounded-full hover:bg-[#325e51] transition duration-300">
                            Selengkapnya
                        </a>
                    </div>

                    <!-- Menu Buttons -->
                    <div class="w-full lg:w-2/3 grid grid-cols-1 sm:grid-cols-2 gap-10">
                        <a href="#"
                            class="flex items-start space-x-4 p-4 min-h-[120px] bg-white border border-[#0C3B2E] rounded-4xl shadow-sm hover:shadow-lg hover:border-teal-400 transition-all duration-300">
                            <i data-lucide="info" class="w-10 h-6 text-teal-500 mt-1"></i>
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-700 text-base sm:text-lg" style="font-family: 'Poppins', sans-serif">Profil Desa</span>
                                <p class="text-sm text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">Informasi mengenai profil, sejarah, dan kondisi
                                    desa.</p>
                            </div>
                        </a>
                        <a href="#"
                            class="flex items-start space-x-4 p-4 min-h-[120px] bg-white border border-[#0C3B2E] rounded-4xl shadow-sm hover:shadow-lg hover:border-teal-400 transition-all duration-300">
                            <i data-lucide="newspaper" class="w-10 h-6 text-teal-500 mt-1"></i>
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-700 text-base sm:text-lg" style="font-family: 'Poppins', sans-serif">Berita Desa</span>
                                <p class="text-sm text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">Dapatkan informasi terkini seputar kegiatan dan
                                    pengumuman desa.</p>
                            </div>
                        </a>
                        <a href="#"
                            class="flex items-start space-x-4 p-4 min-h-[120px] bg-white border border-[#0C3B2E] rounded-4xl shadow-sm hover:shadow-lg hover:border-teal-400 transition-all duration-300">
                            <i data-lucide="between-horizontal-start" class="w-10 h-6 text-teal-500 mt-1"></i>
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-700 text-base sm:text-lg" style="font-family: 'Poppins', sans-serif">Data Desa</span>
                                <p class="text-sm text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">Lihat data kependudukan, potensi, dan statistik
                                    penting lainnya.</p>
                            </div>
                        </a>
                        <a href="#"
                            class="flex items-start space-x-4 p-4 min-h-[120px] bg-white border border-[#0C3B2E] rounded-4xl shadow-sm hover:shadow-lg hover:border-teal-400 transition-all duration-300">
                            <i data-lucide="shopping-cart" class="w-10 h-6 text-teal-500 mt-1"></i>
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-700 text-base sm:text-lg" style="font-family: 'Poppins', sans-serif">Belanja</span>
                                <p class="text-sm text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">Jelajahi produk unggulan lokal dan dukung UMKM
                                    Timpik.</p>
                            </div>
                        </a>
                        <a href="#"
                            class="flex items-start space-x-4 p-4 min-h-[120px] bg-white border border-[#0C3B2E] rounded-4xl shadow-sm hover:shadow-lg hover:border-teal-400 transition-all duration-300">
                            <i data-lucide="file" class="w-10 h-6 text-teal-500 mt-1"></i>
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-700 text-base sm:text-lg" style="font-family: 'Poppins', sans-serif">Dokumen</span>
                                <p class="text-sm text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">Akses berbagai dokumen penting desa seperti
                                    laporan dan arsip.</p>
                            </div>
                        </a>
                        <a href="#"
                            class="flex items-start space-x-4 p-4 min-h-[120px] bg-white border border-[#0C3B2E] rounded-4xl shadow-sm hover:shadow-lg hover:border-teal-400 transition-all duration-300">
                            <i data-lucide="images" class="w-10 h-6 text-teal-500 mt-1"></i>
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-700 text-base sm:text-lg" style="font-family: 'Poppins', sans-serif">Galeri Desa</span>
                                <p class="text-sm text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">Lihat dokumentasi visual kegiatan, pemandangan,
                                    dan momen istimewa.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- 3. Berita Desa Section -->
        <section class="py-16 md:py-24 bg-gray-900 text-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="font-serif-display text-4xl font-bold">Berita Desa</h2>
                    <div class="w-24 h-1 bg-teal-400 mx-auto mt-4"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Berita Card 1 -->
                    <div
                        class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform hover:-translate-y-2 transition-transform duration-300">
                        <img src="https://placehold.co/600x400/78909C/FFFFFF?text=Berita+1" alt="Judul Berita Dummy"
                            class="w-full h-56 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2">Gotong Royong Warga</h3>
                            <p class="text-gray-400 text-sm mb-4">18 Juli 2025</p>
                            <p class="text-gray-300 leading-relaxed mb-4">
                                Warga desa bergotong royong membersihkan lingkungan sekitar untuk menyambut acara desa.
                            </p>
                            <a href="#"
                                class="font-semibold text-teal-400 hover:text-teal-300 transition duration-300">Baca
                                Selengkapnya &rarr;</a>
                        </div>
                    </div>
                    <!-- Berita Card 2 -->
                    <div
                        class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform hover:-translate-y-2 transition-transform duration-300">
                        <img src="https://placehold.co/600x400/546E7A/FFFFFF?text=Berita+2" alt="Judul Berita Dummy"
                            class="w-full h-56 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2">Penyuluhan Pertanian</h3>
                            <p class="text-gray-400 text-sm mb-4">17 Juli 2025</p>
                            <p class="text-gray-300 leading-relaxed mb-4">
                                Dinas terkait memberikan penyuluhan tentang teknik pertanian modern kepada para petani
                                desa.
                            </p>
                            <a href="#"
                                class="font-semibold text-teal-400 hover:text-teal-300 transition duration-300">Baca
                                Selengkapnya &rarr;</a>
                        </div>
                    </div>
                    <!-- Berita Card 3 -->
                    <div
                        class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transform hover:-translate-y-2 transition-transform duration-300">
                        <img src="https://placehold.co/600x400/37474F/FFFFFF?text=Berita+3" alt="Judul Berita Dummy"
                            class="w-full h-56 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2">Lomba Anak-Anak</h3>
                            <p class="text-gray-400 text-sm mb-4">16 Juli 2025</p>
                            <p class="text-gray-300 leading-relaxed mb-4">
                                Karang taruna mengadakan berbagai lomba untuk anak-anak dalam rangka memeriahkan
                                liburan.
                            </p>
                            <a href="#"
                                class="font-semibold text-teal-400 hover:text-teal-300 transition duration-300">Baca
                                Selengkapnya &rarr;</a>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="#"
                        class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                        Lihat Semua Berita
                    </a>
                </div>
            </div>
        </section>

        <!-- 4. Aparatur Desa Section -->
        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="font-serif-display text-4xl font-bold text-gray-800">Aparatur Desa</h2>
                    <div class="w-24 h-1 bg-teal-500 mx-auto mt-4"></div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <!-- Aparatur 1 -->
                    <div
                        class="text-center bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <img src="https://placehold.co/200x200/FFC107/FFFFFF?text=Pria" alt="Foto Aparatur Desa"
                            class="w-24 h-24 md:w-32 md:h-32 rounded-full mx-auto mb-4 border-4 border-white shadow-lg">
                        <h4 class="font-bold text-lg text-gray-900">Suparno S.Pd</h4>
                        <p class="text-teal-600 font-medium">Kepala Desa</p>
                    </div>
                    <!-- Aparatur 2 -->
                    <div
                        class="text-center bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <img src="https://placehold.co/200x200/4CAF50/FFFFFF?text=Pria" alt="Foto Aparatur Desa"
                            class="w-24 h-24 md:w-32 md:h-32 rounded-full mx-auto mb-4 border-4 border-white shadow-lg">
                        <h4 class="font-bold text-lg text-gray-900">Rori Dwi S.Pd</h4>
                        <p class="text-teal-600 font-medium">Sekretaris Desa</p>
                    </div>
                    <!-- Aparatur 3 -->
                    <div
                        class="text-center bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <img src="https://placehold.co/200x200/F44336/FFFFFF?text=Wanita" alt="Foto Aparatur Desa"
                            class="w-24 h-24 md:w-32 md:h-32 rounded-full mx-auto mb-4 border-4 border-white shadow-lg">
                        <h4 class="font-bold text-lg text-gray-900">Renata S.T</h4>
                        <p class="text-teal-600 font-medium">Kaur Keuangan</p>
                    </div>
                    <!-- Aparatur 4 -->
                    <div
                        class="text-center bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <img src="https://placehold.co/200x200/2196F3/FFFFFF?text=Wanita" alt="Foto Aparatur Desa"
                            class="w-24 h-24 md:w-32 md:h-32 rounded-full mx-auto mb-4 border-4 border-white shadow-lg">
                        <h4 class="font-bold text-lg text-gray-900">Denada S.E</h4>
                        <p class="text-teal-600 font-medium">Kaur Perencanaan</p>
                    </div>
                </div>

                <div class="flex justify-center items-center space-x-4 mt-8">
                    <button class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 text-gray-600 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 text-gray-600 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- 5. Galeri Desa Section -->
        <section class="py-16 md:py-24 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="font-serif-display text-4xl font-bold text-gray-800">Galeri <span
                            class="text-teal-600">Desa Timpik</span></h2>
                    <div class="w-24 h-1 bg-teal-500 mx-auto mt-4"></div>
                </div>

                <div class="columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">
                    <div class="break-inside-avoid"><img
                            src="https://placehold.co/500x300/8BC34A/FFFFFF?text=Galeri+1" alt="Galeri Desa Timpik"
                            class="w-full h-auto rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    </div>
                    <div class="break-inside-avoid"><img
                            src="https://placehold.co/500x700/CDDC39/FFFFFF?text=Galeri+2" alt="Galeri Desa Timpik"
                            class="w-full h-auto rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    </div>
                    <div class="break-inside-avoid"><img
                            src="https://placehold.co/500x400/FF9800/FFFFFF?text=Galeri+3" alt="Galeri Desa Timpik"
                            class="w-full h-auto rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    </div>
                    <div class="break-inside-avoid"><img
                            src="https://placehold.co/500x500/00BCD4/FFFFFF?text=Galeri+4" alt="Galeri Desa Timpik"
                            class="w-full h-auto rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    </div>
                    <div class="break-inside-avoid"><img
                            src="https://placehold.co/500x600/673AB7/FFFFFF?text=Galeri+5" alt="Galeri Desa Timpik"
                            class="w-full h-auto rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    </div>
                    <div class="break-inside-avoid"><img
                            src="https://placehold.co/500x350/E91E63/FFFFFF?text=Galeri+6" alt="Galeri Desa Timpik"
                            class="w-full h-auto rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    </div>
                    <div class="break-inside-avoid"><img
                            src="https://placehold.co/500x450/3F51B5/FFFFFF?text=Galeri+7" alt="Galeri Desa Timpik"
                            class="w-full h-auto rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    </div>
                    <div class="break-inside-avoid"><img
                            src="https://placehold.co/500x550/9E9E9E/FFFFFF?text=Galeri+8" alt="Galeri Desa Timpik"
                            class="w-full h-auto rounded-lg shadow-md hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="#"
                        class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                        Lihat Semua Galeri
                    </a>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.partials.footer')

    <script>
        lucide.createIcons();

        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
