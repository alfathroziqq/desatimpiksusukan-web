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

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

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

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .slider-container {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .slider-container::-webkit-scrollbar {
            display: none;
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
                    <h2 class="text-3xl sm:text-[45px] font-bold text-[#0C3B2E]"
                        style="font-family: 'Poppins', sans-serif">Desa Timpik</h2>
                    <div class="w-50 md:w-75 h-1 bg-[#0C3B2E] mx-auto mt-3"></div>
                </div>
                <div class="flex flex-col lg:flex-row gap-10 lg:gap-14 items-center">

                    <div
                        class="w-full lg:w-1/3 bg-[#0C3B2E] text-white p-6 sm:p-8 rounded-3xl shadow-2xl transform hover:-translate-y-2 transition duration-300">
                        <h3 class="text-2xl sm:text-[36px] font-bold mb-4 border-b-2 border-teal-400 pb-2 font-poppins"
                            style="font-family: 'Poppins', sans-serif">
                            Sejarah</h3>
                        <p class="text-2xl sm:text-[16px] text-[#C8C7CC] leading-relaxed mb-6 text-justify text-sm sm:text-base font-poppins"
                            style="font-family: 'Poppins', sans-serif">
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
                            class="bg-[#3D7364] text-white border border-white px-6 py-2 rounded-full hover:bg-[#325e51] transition duration-300 font-semibold"
                            style="font-family: 'Poppins', sans-serif">Selengkapnya
                        </a>
                    </div>

                    <!-- Menu Buttons -->
                    <div class="w-full lg:w-2/3 grid grid-cols-1 sm:grid-cols-2 gap-10">
                        <a href="#"
                            class="flex items-start space-x-4 p-4 min-h-[120px] bg-white border border-[#0C3B2E] rounded-4xl shadow-[0_4px_10px_rgba(0,0,0,0.25)] hover:shadow-[0_6px_16px_rgba(0,0,0,0.35)] hover:border-teal-400 transition-all duration-300">
                            <i data-lucide="info" class="w-10 h-6 text-teal-500 mt-1"></i>
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-700 text-base sm:text-[20px]"
                                    style="font-family: 'Poppins', sans-serif">Profil Desa</span>
                                <p class="text-sm text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">
                                    Informasi mengenai profil, sejarah, dan kondisi desa.</p>
                            </div>
                        </a>
                        <a href="#"
                            class="flex items-start space-x-4 p-4 min-h-[120px] bg-white border border-[#0C3B2E] rounded-4xl shadow-[0_4px_10px_rgba(0,0,0,0.25)] hover:shadow-[0_6px_16px_rgba(0,0,0,0.35)] hover:border-teal-400 transition-all duration-300">
                            <i data-lucide="newspaper" class="w-10 h-6 text-teal-500 mt-1"></i>
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-700 text-base sm:text-[20px]"
                                    style="font-family: 'Poppins', sans-serif">Berita Desa</span>
                                <p class="text-sm text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">
                                    Dapatkan informasi terkini seputar kegiatan dan pengumuman desa.</p>
                            </div>
                        </a>
                        <a href="#"
                            class="flex items-start space-x-4 p-4 min-h-[120px] bg-white border border-[#0C3B2E] rounded-4xl shadow-[0_4px_10px_rgba(0,0,0,0.25)] hover:shadow-[0_6px_16px_rgba(0,0,0,0.35)] hover:border-teal-400 transition-all duration-300">
                            <i data-lucide="between-horizontal-start" class="w-10 h-6 text-teal-500 mt-1"></i>
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-700 text-base sm:text-[20px]"
                                    style="font-family: 'Poppins', sans-serif">Data Desa</span>
                                <p class="text-sm text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">Lihat
                                    data kependudukan, potensi, dan statistik penting lainnya.</p>
                            </div>
                        </a>
                        <a href="#"
                            class="flex items-start space-x-4 p-4 min-h-[120px] bg-white border border-[#0C3B2E] rounded-4xl shadow-[0_4px_10px_rgba(0,0,0,0.25)] hover:shadow-[0_6px_16px_rgba(0,0,0,0.35)] hover:border-teal-400 transition-all duration-300">
                            <i data-lucide="shopping-cart" class="w-10 h-6 text-teal-500 mt-1"></i>
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-700 text-base sm:text-[20px]"
                                    style="font-family: 'Poppins', sans-serif">Belanja</span>
                                <p class="text-sm text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">
                                    Jelajahi produk unggulan lokal dan dukung UMKM Timpik.</p>
                            </div>
                        </a>
                        <a href="#"
                            class="flex items-start space-x-4 p-4 min-h-[120px] bg-white border border-[#0C3B2E] rounded-4xl shadow-[0_4px_10px_rgba(0,0,0,0.25)] hover:shadow-[0_6px_16px_rgba(0,0,0,0.35)] hover:border-teal-400 transition-all duration-300">
                            <i data-lucide="file" class="w-10 h-6 text-teal-500 mt-1"></i>
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-700 text-base sm:text-[20px]"
                                    style="font-family: 'Poppins', sans-serif">Dokumen</span>
                                <p class="text-sm text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">Akses
                                    berbagai dokumen penting desa seperti laporan dan arsip.</p>
                            </div>
                        </a>
                        <a href="#"
                            class="flex items-start space-x-4 p-4 min-h-[120px] bg-white border border-[#0C3B2E] rounded-4xl shadow-[0_4px_10px_rgba(0,0,0,0.25)] hover:shadow-[0_6px_16px_rgba(0,0,0,0.35)] hover:border-teal-400 transition-all duration-300">
                            <i data-lucide="images" class="w-10 h-6 text-teal-500 mt-1"></i>
                            <div class="flex flex-col">
                                <span class="font-semibold text-gray-700 text-base sm:text-[20px]"
                                    style="font-family: 'Poppins', sans-serif">Galeri Desa</span>
                                <p class="text-sm text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">Lihat
                                    dokumentasi visual kegiatan, pemandangan, dan momen istimewa.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        @php
            use App\Models\Berita;
            $beritaTerbaru = Berita::latest()->take(8)->get();
        @endphp

        <!-- Berita Desa Section -->
        <section class="py-16 md:py-15 bg-[#0C3B2E] text-white">
            <div class="container mx-auto px-8 md:px-30">
                <div class="flex justify-between items-center mb-8 px-1 sm:px-4 lg:px-8">
                    <div class="w-full text-center relative">
                        <h2 class="text-3xl sm:text-[45px] font-bold text-white"
                            style="font-family: 'Poppins', sans-serif">Berita Terkini</h2>
                        <div class="w-55 md:w-80 h-1 bg-white mx-auto mt-3"></div>
                    </div>

                    <div class="hidden md:flex items-center space-x-2 absolute right-30">
                        <button onclick="scrollBeritaLeft()"
                            class="bg-gray-700/50 text-white p-2 rounded-full shadow-md hover:bg-teal-600/70 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m15 18-6-6 6-6" />
                            </svg>
                        </button>
                        <button onclick="scrollBeritaRight()"
                            class="bg-gray-700/50 text-white p-2 rounded-full shadow-md hover:bg-teal-600/70 transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div id="beritaCarousel"
                    class="flex overflow-x-auto scroll-smooth space-x-8 px-1 sm:px-4 lg:px-8 snap-x snap-mandatory no-scrollbar pb-4">
                    @forelse ($beritaTerbaru as $berita)
                        <div
                            class="min-w-[80%] md:min-w-[50%] lg:min-w-[27%] bg-white rounded-3xl overflow-hidden shadow-lg snap-start">
                            <img src="{{ asset('storage/' . $berita->foto) }}" alt="Gambar {{ $berita->nama_berita }}"
                                class="w-full h-50 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-[18px] mb-2 text-[#0C3B2E]"
                                    style="font-family: 'Poppins', sans-serif" title="{{ $berita->nama_berita }}">
                                    {{ \Illuminate\Support\Str::limit($berita->nama_berita, 50) }}
                                </h3>
                                <p class="text-[#0C3B2E] leading-relaxed mb-4 text-[13px]"
                                    style="font-family: 'Poppins', sans-serif">
                                    {{ Str::limit(strip_tags($berita->deskripsi), 80) }}
                                </p>

                                <a href="{{ route('berita.detail', $berita->id) }}"
                                    class="inline-block border border-teal-600 px-4 py-1 rounded-full text-teal-600 hover:bg-teal-100 text-sm font-medium mb-4 transition duration-300">
                                    Selengkapnya
                                </a>

                                <div class="flex justify-between items-center text-[#0C3B2E] text-sm border-t border-t-gray-300 pt-2"
                                    style="font-family: 'Poppins', sans-serif">
                                    <p>{{ \Carbon\Carbon::parse($berita->tanggal)->isoFormat('D MMMM Y') }}</p>
                                    <div class="flex items-center space-x-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        <span>{{ $berita->views ?? 0 }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-white text-center w-full">Tidak ada berita terbaru saat ini.</p>
                    @endforelse
                </div>

                <div class="text-center mt-10">
                    <a href="{{ route('berita.index') }}"
                        class="bg-[#3D7364] text-white border border-white px-6 py-4 rounded-full hover:bg-[#325e51] transition duration-300 font-semibold text-[16px]"
                        style="font-family: 'Poppins', sans-serif">
                        Lihat Semua Berita
                    </a>
                </div>
        </section>

        <!-- Aparatur Desa Section -->
        <section id="aparatur" class="py-8 md:py-8 bg-white reveal-on-scroll" x-data="window.slider()"
            x-init="init()">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4">
                <div class="text-center mb-8">
                    <h2 class="text-3xl sm:text-[45px] font-bold text-[#0C3B2E]"
                        style="font-family: 'Poppins', sans-serif">Aparatur Desa</h2>
                    <div class="w-60 md:w-86 h-1 bg-[#0C3B2E] mx-auto mt-3"></div>
                </div>
                <div class="overflow-hidden p-2 mt-[-4px]">
                    <div x-ref="slider" @scroll.debounce.100ms="updateButtons()"
                        class="flex overflow-x-auto gap-2 slider-container snap-x snap-mandatory scroll-smooth">

                        <div class="flex-shrink-0 w-65 h-80 snap-start p-2">
                            <div
                                class="bg-gray-50 rounded-lg shadow-md overflow-hidden h-full group transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg border border-gray-300">
                                <img src="{{ asset('images/profile-pic.png') }}" alt="Pelayanan"
                                    class="mt-4 w-auto max-w-full max-h-55 mx-auto object-contain">
                                <div class="px-6 text-left mt-1 mb-4">
                                    <h4 class="font-bold text-[24px] text-[#0C3B2E]">Budi Santoso</h4>
                                    <p class="mt-[-5px] text-[16px] text-[#0C3B2E]">Kepala Desa</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-65 h-80 snap-start p-2">
                            <div
                                class="bg-gray-50 rounded-lg shadow-md overflow-hidden h-full group transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg border border-gray-300">
                                <img src="{{ asset('images/profile-pic.png') }}" alt="Pelayanan"
                                    class="mt-4 w-auto max-w-full max-h-55 mx-auto object-contain">
                                <div class="px-6 text-left mt-1 mb-4">
                                    <h4 class="font-bold text-[24px] text-[#0C3B2E]">Budi Santoso</h4>
                                    <p class="mt-[-5px] text-[16px] text-[#0C3B2E]">Kepala Desa</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-65 h-80 snap-start p-2">
                            <div
                                class="bg-gray-50 rounded-lg shadow-md overflow-hidden h-full group transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg border border-gray-300">
                                <img src="{{ asset('images/profile-pic.png') }}" alt="Pelayanan"
                                    class="mt-4 w-auto max-w-full max-h-55 mx-auto object-contain">
                                <div class="px-6 text-left mt-1 mb-4">
                                    <h4 class="font-bold text-[24px] text-[#0C3B2E]">Budi Santoso</h4>
                                    <p class="mt-[-5px] text-[16px] text-[#0C3B2E]">Kepala Desa</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-65 h-80 snap-start p-2">
                            <div
                                class="bg-gray-50 rounded-lg shadow-md overflow-hidden h-full group transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg border border-gray-300">
                                <img src="{{ asset('images/profile-pic.png') }}" alt="Pelayanan"
                                    class="mt-4 w-auto max-w-full max-h-55 mx-auto object-contain">
                                <div class="px-6 text-left mt-1 mb-4">
                                    <h4 class="font-bold text-[24px] text-[#0C3B2E]">Budi Santoso</h4>
                                    <p class="mt-[-5px] text-[16px] text-[#0C3B2E]">Kepala Desa</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0 w-65 h-80 snap-start p-2">
                            <div
                                class="bg-gray-50 rounded-lg shadow-md overflow-hidden h-full group transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg border border-gray-300">
                                <img src="{{ asset('images/profile-pic.png') }}" alt="Pelayanan"
                                    class="mt-4 w-auto max-w-full max-h-55 mx-auto object-contain">
                                <div class="px-6 text-left mt-1 mb-4">
                                    <h4 class="font-bold text-[24px] text-[#0C3B2E]">Budi Santoso</h4>
                                    <p class="mt-[-5px] text-[16px] text-[#0C3B2E]">Kepala Desa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tombol Panah -->
                <div class="flex justify-center mt-6 mb-4 sm:mb-6 space-x-2">
                    <button @click="scroll('left')"
                        class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 transition-colors disabled:opacity-50"
                        :disabled="atStart"><i data-lucide="arrow-left" class="w-5 h-5"></i></button>
                    <button @click="scroll('right')"
                        class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 transition-colors disabled:opacity-50"
                        :disabled="atEnd"><i data-lucide="arrow-right" class="w-5 h-5"></i></button>
                </div>
        </section>

        <section class="py-8 md:py-8 bg-white mb-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-[2fr_1fr_2fr] gap-6 items-stretch">

                    <div class="flex flex-col justify-start space-y-6">
                        <div>
                            <h2 class="text-3xl sm:text-4xl md:text-[70px] font-bold text-[#0C3B2E] leading-none"
                                style="font-family: 'Poppins', sans-serif;">
                                Galeri
                            </h2>
                            <h3 class="text-3xl sm:text-4xl md:text-[80px] italic leading-none"
                                style="font-family: 'Playfair Display', serif;">
                                <span class="text-[#0C3B2E]">Desa</span>
                                <span class="text-[#D8A873]">Timpik</span>
                            </h3>
                        </div>
                        <img src="{{ asset('images/galeri1.png') }}" alt="Galeri 1"
                            class="w-full h-auto md:h-[300px] object-cover rounded-lg shadow-md mx-auto">
                    </div>

                    <div class="h-full">
                        <img src="{{ asset('images/galeri2.png') }}" alt="Galeri 2"
                            class="w-full h-auto md:h-[475px] object-cover rounded-lg shadow-md md:transform md:scale-x-[1.27] md:origin-left mx-auto">
                    </div>

                    <div class="flex flex-col gap-4 h-full">
                        <div class="flex-1">
                            <img src="{{ asset('images/galeri3.jpg') }}" alt="Galeri 3"
                                class="w-full max-w-full md:max-w-[335px] h-auto md:h-full object-cover rounded-lg shadow-md mx-auto">
                        </div>
                        <div class="flex-1">
                            <img src="{{ asset('images/merah-putih.jpg') }}" alt="Galeri 4"
                                class="w-full max-w-full md:max-w-[335px] h-auto md:h-full object-cover rounded-lg shadow-md mx-auto">
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-10">
                    <a href="#"
                        class="bg-[#3D7364] text-white border border-white px-7 py-3 rounded-full hover:bg-[#325e51] transition duration-300 font-semibold"
                        style="font-family: 'Poppins', sans-serif">Lihat Semua Galeri
                    </a>
                </div>
            </div>
        </section>

    </main>
    @include('layouts.partials.footer')

    <script>
        lucide.createIcons();

        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        function scrollBeritaLeft() {
            const carousel = document.getElementById('beritaCarousel');
            const firstCard = carousel.querySelector('.snap-start');
            if (firstCard) {
                const scrollAmount = firstCard.offsetWidth + 24;
                carousel.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            }
        }

        function scrollBeritaRight() {
            const carousel = document.getElementById('beritaCarousel');
            const firstCard = carousel.querySelector('.snap-start');
            if (firstCard) {
                const scrollAmount = firstCard.offsetWidth + 24;
                carousel.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            }
        }

        window.slider = function() {
            return {
                atStart: true,
                atEnd: false,

                init() {
                    this.$nextTick(() => {
                        this.updateButtons();
                    });
                },

                scroll(direction) {
                    const container = this.$refs.slider;
                    const scrollAmount = container.clientWidth * 0.75;

                    if (direction === 'left') {
                        container.scrollLeft -= scrollAmount;
                    } else if (direction === 'right') {
                        container.scrollLeft += scrollAmount;
                    }

                    this.updateButtons();
                },

                updateButtons() {
                    const container = this.$refs.slider;
                    this.atStart = container.scrollLeft <= 10;
                    this.atEnd = container.scrollLeft + container.clientWidth >= container.scrollWidth - 10;
                }
            };
        };
    </script>
</body>

</html>
