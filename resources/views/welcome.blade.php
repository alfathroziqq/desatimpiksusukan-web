<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desa Timpik | Website Resmi</title>
    <meta name="description" content="Informasi, pelayanan publik, dan berita terbaru dari Desa Timpik, Kecamatan Susukan, Kabupaten Semarang.">

    <link rel="canonical" href="https://desatimpiksusukan.id/" />

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

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .reveal-on-scroll.animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        html {
            scroll-behavior: smooth;
        }

        #scrollTopBtn {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.4s ease, transform 0.4s ease;
        }

        #scrollTopBtn.show {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        #scrollTopBtn.hide {
            opacity: 0;
            transform: translateY(20px);
            pointer-events: none;
        }
    </style>
</head>

<body>

    @include('layouts.partials.header')

<main>
    <!-- Hero -->
    <section class="relative min-h-screen w-full -mt-20 flex items-center justify-center lg:justify-start">
        <div class="absolute inset-0 bg-cover bg-[center_top_30%]"
            style="background-image: url('{{ asset('images/timpik_sawah2.jpg') }}');">
        </div>

        <div class="absolute inset-0 bg-gradient-to-t from-[#0C3B2E]/60 via-transparent to-transparent"></div>
        <div class="absolute inset-0 bg-black/20"></div>

        <div class="relative z-10 container mx-auto px-6 text-center lg:text-left lg:pl-24 mt-6">
            <div class="max-w-xl lg:max-w-2xl">
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-[#0C3B2E] reveal-on-scroll"
                    style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                    Selamat Datang
                </h1>
                <p class="lg:mt-4 text-4xl md:text-5xl lg:text-7xl text-white italic reveal-on-scroll"
                    style="font-family: 'Playfair Display', serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                    Website <span class="text-[#E8C187]">Desa Timpik</span>
                </p>
            </div>
        </div>
    </section>

        <!-- Sejarah Section -->
        <section class="py-16 md:py-14 relative overflow-x-clip">
            <div class="max-w-7xl mx-auto px-4 sm:px-10 lg:px-16">
                <div class="text-center mb-8 reveal-on-scroll">
                    <h2 class="text-4xl sm:text-[48px] font-extrabold tracking-tight text-[#0C3B2E] inline-block"
                        style="font-family: 'Playfair Display', serif; font-style: italic;">
                        Desa Timpik
                    </h2>
                    <div
                        class="w-40 md:w-60 h-1 bg-gradient-to-r from-[#0C3B2E] via-[#E8C187] to-[#C2977D] rounded-full mx-auto mt-3">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-8 lg:gap-4 mb-10 reveal-on-scroll">
                    <a href="{{ route('sejarah-desa') }}"
                        class="flex items-start gap-4 p-4 bg-white/90 border border-[#E8C187]/30 rounded-3xl shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-gradient-to-br from-[#E8C187]/80 to-[#C7F3E7]/80 rounded-2xl text-[#0C3B2E] shadow group-hover:bg-[#E8C187] transition">
                            <i data-lucide="info" class="w-7 h-7"></i>
                        </div>
                        <div>
                            <span class="font-semibold text-[#0C3B2E] text-lg lg:text-base"
                                style="font-family: 'Poppins', sans-serif">Profil
                                Desa</span>
                            <p class="text-sm lg:text-xs text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">
                                Informasi kondisi desa.
                            </p>
                        </div>
                    </a>
                    <a href="{{ route('berita.index') }}"
                        class="flex items-start gap-4 p-4 bg-white/90 border border-[#E8C187]/30 rounded-3xl shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-gradient-to-br from-[#E8C187]/80 to-[#C7F3E7]/80 rounded-2xl text-[#0C3B2E] shadow group-hover:bg-[#E8C187] transition">
                            <i data-lucide="newspaper" class="w-7 h-7"></i>
                        </div>
                        <div>
                            <span class="font-semibold text-[#0C3B2E] text-lg lg:text-base"
                                style="font-family: 'Poppins', sans-serif">Berita
                                Desa</span>
                            <p class="text-sm lg:text-xs text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">
                                Info terkini.
                            </p>
                        </div>
                    </a>
                    <a href="{{ route('data-jenis-kelamin') }}"
                        class="flex items-start gap-4 p-4 bg-white/90 border border-[#E8C187]/30 rounded-3xl shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-gradient-to-br from-[#E8C187]/80 to-[#C7F3E7]/80 rounded-2xl text-[#0C3B2E] shadow group-hover:bg-[#E8C187] transition">
                            <i data-lucide="between-horizontal-start" class="w-7 h-7"></i>
                        </div>
                        <div>
                            <span class="font-semibold text-[#0C3B2E] text-lg lg:text-base"
                                style="font-family: 'Poppins', sans-serif">Data
                                Desa</span>
                            <p class="text-sm lg:text-xs text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">
                                Statistik desa
                            </p>
                        </div>
                    </a>
                    <a href="{{ route('mengurus-surat') }}"
                        class="flex items-start gap-4 p-4 bg-white/90 border border-[#E8C187]/30 rounded-3xl shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-gradient-to-br from-[#E8C187]/80 to-[#C7F3E7]/80 rounded-2xl text-[#0C3B2E] shadow group-hover:bg-[#E8C187] transition">
                            <i data-lucide="airplay" class="w-7 h-7"></i>
                        </div>
                        <div>
                            <span class="font-semibold text-[#0C3B2E] text-lg lg:text-base"
                                style="font-family: 'Poppins', sans-serif">Layanan Publik
                            </span>
                            <p class="text-sm lg:text-xs text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">
                                Surat Menyurat
                            </p>
                        </div>
                    </a>
                    <a href="{{ route('dokumen.index') }}"
                        class="flex items-start gap-4 p-4 bg-white/90 border border-[#E8C187]/30 rounded-3xl shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-gradient-to-br from-[#E8C187]/80 to-[#C7F3E7]/80 rounded-2xl text-[#0C3B2E] shadow group-hover:bg-[#E8C187] transition">
                            <i data-lucide="file" class="w-7 h-7"></i>
                        </div>
                        <div>
                            <span class="font-semibold text-[#0C3B2E] text-lg lg:text-base"
                                style="font-family: 'Poppins', sans-serif">Dokumen
                            </span>
                            <p class="text-sm lg:text-xs text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">
                                Akses, laporan, arsip.
                            </p>
                        </div>
                    </a>
                    <a href="{{ route('galeri.index') }}"
                        class="flex items-start gap-4 p-5 bg-white/90 border border-[#E8C187]/30 rounded-3xl shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-gradient-to-br from-[#E8C187]/80 to-[#C7F3E7]/80 rounded-2xl text-[#0C3B2E] shadow group-hover:bg-[#E8C187] transition">
                            <i data-lucide="file" class="w-7 h-7"></i>
                        </div>
                        <div>
                            <span class="font-semibold text-[#0C3B2E] text-lg lg:text-base"
                                style="font-family: 'Poppins', sans-serif">Galeri
                            </span>
                            <p class="text-sm lg:text-xs text-gray-600 mt-1" style="font-family: 'Poppins', sans-serif">
                                Dokumentasi visual.
                            </p>
                        </div>
                    </a>
                </div>

                <div class="flex flex-col lg:flex-row gap-12 lg:gap-16 items-center reveal-on-scroll">
                    <!-- Card Sejarah -->
                    <div class="relative w-full lg:w-1/3 flex-shrink-0">
                        <div
                            class="bg-gradient-to-tr from-[#0C3B2E] via-[#15634e]/80 to-[#E8C187]/80 text-white p-7 rounded-3xl shadow-2xl border border-[#E8C187]/30 relative z-0 hover:scale-102 transition-transform duration-300 group">
                            <h3 class="text-2xl sm:text-[34px] font-bold mb-3 border-b-2 border-[#C7F3E7]/50 pb-2"
                                style="font-family: 'Poppins', sans-serif">
                                Sejarah
                            </h3>
                            <p class="text-base sm:text-[17px] leading-relaxed mb-6 text-[#F8F6F1] text-justify"
                                style="font-family: 'Poppins', sans-serif">
                                Desa Timpik, terletak di Kecamatan Susukan, Kabupaten Semarang, kaya sejarah dan budaya.
                                Pernah ditemukan artefak Hindu berupa yoni di Masjid Kauman, menandakan jejak peradaban
                                kuno. Kini, Timpik menjadi desa wisata edukatif berbasis pertanian modern dengan taman
                                bunga, kolam balon, outbound, memadukan warisan sejarah dan inovasi pertanian keluarga.
                            </p>
                            <a href="{{ route('sejarah-desa') }}"
                                class="inline-flex items-center gap-2 bg-[#E8C187] text-[#155145] px-7 py-2 rounded-full font-bold text-base shadow hover:bg-[#D8A873] hover:text-[#0C3B2E] transition duration-300">
                                Selengkapnya <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Sambutan Kepala Desa -->
                    <div class="relative w-full lg:w-2/3">
                        <div
                            class="text-[#0C3B2E] p-4 rounded-3xl shadow-2xl border border-[#0C3B2E]/30 relative z-0 hover:scale-102 transition-transform duration-300 group">
                            <h3 class="text-2xl sm:text-[24px] font-bold mb-3 border-b-2 border-[#0C3B2E]/50 pb-2"
                                style="font-family: 'Poppins', sans-serif">
                                Sambutan Kepala Desa
                            </h3>
                            <p class="text-base sm:text-[14px] leading-relaxed text-[#0C3B2E] text-justify"
                                style="font-family: 'Poppins', sans-serif">
                                Selamat datang di Desa Timpik! Kami bangga memiliki sejarah panjang dan budaya yang
                                kaya.
                                Desa kami berkembang menjadi desa wisata yang menggabungkan inovasi pertanian modern
                                dengan kekayaan alam dan sejarah yang berharga. Mari bersama-sama kita jaga dan
                                kembangkan
                                desa ini untuk masa depan yang lebih baik!
                            </p>
                        </div>

                        <!-- Video YouTube -->
                        <div class="relative w-full lg:w-full mt-6">
                            <div class="aspect-w-16 aspect-h-9">
                                <iframe class="w-full h-[290px] rounded-3xl shadow-2xl border border-[#0C3B2E]/30"
                                    src="https://www.youtube.com/embed/kg-qCZroRHo?start=0&autoplay=1&mute=1"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
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
            <div class="max-w-7xl mx-auto px-4 sm:px-10 lg:px-16">
                <div class="flex justify-between items-center mb-8 px-1 sm:px-4 lg:px-8">
                    <div class="w-full text-center relative reveal-on-scroll">
                        <h2 class="text-3xl sm:text-[45px] font-bold text-white"
                            style="font-family: 'Poppins', sans-serif">Berita Terkini</h2>
                        <div class="h-1 w-50 bg-gradient-to-r from-[#12715D] to-[#E8C187] rounded-full mx-auto mt-3">
                        </div>
                    </div>

                    <div class="hidden md:flex items-center space-x-2 absolute right-45 reveal-on-scroll">
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
                    class="rounded-3xl flex overflow-x-auto scroll-smooth space-x-8 px-1 sm:px-4 lg:px-8 snap-x snap-mandatory no-scrollbar reveal-on-scroll">
                    @forelse ($beritaTerbaru as $berita)
                        <div
                            class="min-w-[80%] md:min-w-[50%] lg:min-w-[27%] bg-white rounded-3xl overflow-hidden shadow-lg snap-start">
                            <img src="{{ asset('storage/' . $berita->foto) }}"
                                alt="Gambar {{ $berita->nama_berita }}" class="w-full h-50 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-[18px] mb-2 text-[#0C3B2E]"
                                    style="font-family: 'Poppins', sans-serif" title="{{ $berita->nama_berita }}">
                                    {{ Str::limit($berita->nama_berita, 50) }}
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
                                    <p>Semarang, {{ \Carbon\Carbon::parse($berita->tanggal)->isoFormat('D MMMM Y') }}
                                    </p>
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
                        <p class="text-white text-center w-full reveal-on-scroll">Tidak ada berita terbaru saat ini.
                        </p>
                    @endforelse
                </div>

                <div class="text-center mt-10">
                    <a href="{{ route('berita.index') }}"
                        class="bg-[#3D7364] text-white border border-white px-6 py-4 rounded-full hover:bg-[#325e51] transition duration-300 font-semibold text-[16px] reveal-on-scroll"
                        style="font-family: 'Poppins', sans-serif">
                        Lihat Semua Berita
                    </a>
                </div>
        </section>

        <!-- Aparatur Desa Section -->
        @php
            use App\Models\Aparatur;
            use Illuminate\Support\Str;
            $aparaturs = Aparatur::all();
        @endphp

        <section id="aparatur" class="py-8 md:py-8" x-data="window.slider()" x-init="init()">
            <div class="max-w-7xl mx-auto px-4 sm:px-10 lg:px-16">
                <div class="text-center mb-8 reveal-on-scroll">
                    <h2 class="text-3xl sm:text-[45px] font-bold text-[#0C3B2E]"
                        style="font-family: 'Poppins', sans-serif">Aparatur Desa</h2>
                    <div class="h-1 w-50 bg-gradient-to-r from-[#12715D] to-[#E8C187] rounded-full mx-auto mt-3"></div>
                </div>
                <div class="overflow-hidden p-2 mt-[-4px]">
                    <div x-ref="slider" @scroll.debounce.100ms="updateButtons()"
                        class="rounded-3xl flex overflow-x-auto gap-2 slider-container snap-x snap-mandatory scroll-smooth reveal-on-scroll">

                        @forelse ($aparaturs as $aparatur)
                            <div class="flex-shrink-0 w-65 h-80 snap-start p-2"
                                style="font-family: 'Poppins', sans-serif;">
                                <div
                                    class="bg-gradient-to-br from-[#f7fbe9] via-[#ebf6f2] to-[#f9f6f0] rounded-lg shadow-md overflow-hidden h-full group transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg border border-gray-300">
                                    <img src="{{ asset('storage/' . $aparatur->foto) }}" alt="{{ $aparatur->nama }}"
                                        class="mt-4 w-auto max-w-full max-h-55 mx-auto object-contain">
                                    <div class="px-3 text-center mt-3 mb-4">
                                        <h4 class="font-bold text-[17px] text-[#0C3B2E] leading-snug">
                                            {{ Str::limit($aparatur->nama, 22, '...') }}
                                        </h4>
                                        <p class="text-sm text-[#0C3B2E] leading-tight">
                                            {{ Str::limit($aparatur->jabatan, 27, '...') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="flex justify-center items-center w-full h-40 reveal-on-scroll">
                                <p class="text-center text-gray-500">Belum ada data aparatur desa.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Tombol Panah -->
                <div class="flex justify-center mt-6 mb-4 sm:mb-6 space-x-2 reveal-on-scroll">
                    <button @click="scroll('left')"
                        class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 transition-colors disabled:opacity-50"
                        :disabled="atStart"><i data-lucide="arrow-left" class="w-5 h-5"></i></button>
                    <button @click="scroll('right')"
                        class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 transition-colors disabled:opacity-50"
                        :disabled="atEnd"><i data-lucide="arrow-right" class="w-5 h-5"></i></button>
                </div>
            </div>
        </section>

        <!-- Galeri Desa Section -->
        @php
            use App\Models\Galeri;
            $semuaGaleri = Galeri::latest()->get();
            $galeriTerbaru = $semuaGaleri->take(4);
        @endphp

        <section class="mb-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-10 lg:px-16">
                @if ($galeriTerbaru->count())
                    <div class="flex flex-col justify-start space-y-6 reveal-on-scroll">
                        <div>
                            <h2 class="text-4xl sm:text-4xl md:text-[70px] font-bold text-[#0C3B2E] leading-none"
                                style="font-family: 'Poppins', sans-serif;">
                                Galeri
                            </h2>
                            <h3 class="text-4xl sm:text-4xl md:text-[80px] italic leading-none"
                                style="font-family: 'Playfair Display', serif;">
                                <span class="text-[#0C3B2E]">Desa</span>
                                <span class="text-[#D8A873]">Timpik</span>
                            </h3>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">

                            @php $utama = $galeriTerbaru->first(); @endphp
                            <div
                                class="relative col-span-1 lg:col-span-2 group overflow-hidden rounded-3xl shadow-xl min-h-[340px] reveal-on-scroll">
                                @foreach ($semuaGaleri as $index => $item)
                                    <div
                                        class="absolute inset-0 transition-opacity duration-1000 ease-in-out slideshow-slide {{ $index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}">
                                        <img src="{{ asset('storage/' . $item->gambar) }}"
                                            alt="{{ $item->judul ?? 'Galeri Desa' }}"
                                            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105" />
                                        <div
                                            class="absolute bottom-0 left-0 right-0 px-7 py-6 bg-gradient-to-t from-[#0C3B2E]/85 to-transparent opacity-95 group-hover:opacity-100 transition-all duration-500">
                                            <h3 class="font-bold text-2xl text-white mb-1"
                                                style="font-family:'Poppins',sans-serif;">
                                                {{ $item->judul ?? 'Galeri Desa' }}
                                            </h3>
                                            <p class="text-white text-sm opacity-80">
                                                {{ Str::limit($item->keterangan, 70) ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="flex flex-col gap-6 lg:gap-8">
                                @foreach ($galeriTerbaru->skip(1) as $img)
                                    <div
                                        class="relative rounded-2xl overflow-hidden shadow-lg group min-h-[130px] reveal-on-scroll">
                                        <img src="{{ asset('storage/' . $img->gambar) }}"
                                            alt="{{ $img->judul ?? 'Galeri Desa' }}"
                                            class="object-cover w-full h-44 lg:h-36 group-hover:scale-105 transition-all duration-500" />
                                        <div
                                            class="absolute bottom-0 left-0 right-0 px-5 py-4 bg-gradient-to-t from-[#0C3B2E]/80 to-transparent">
                                            <h4 class="font-semibold text-lg text-white drop-shadow"
                                                style="font-family:'Poppins',sans-serif;">
                                                {{ $img->judul ?? 'Galeri Desa' }}
                                            </h4>
                                            <p class="text-xs text-white/80">
                                                {{ Str::limit($img->keterangan, 50) ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="text-center text-gray-500 py-16">Belum ada foto galeri tersedia.</div>
                @endif

                <div class="flex justify-center mt-4 reveal-on-scroll">
                    <a href="{{ route('galeri.index') }}"
                        class="bg-[#3D7364] text-white border border-white px-7 py-3 rounded-full hover:bg-[#325e51] transition duration-300 font-semibold"
                        style="font-family: 'Poppins', sans-serif">Lihat Semua Galeri
                    </a>
                </div>
            </div>
        </section>

        <!-- APB Desa Timpik Section -->
        @php
            use App\Models\APBDesa;

            $tahunList = APBDesa::select('tahun')->distinct()->orderBy('tahun', 'desc')->pluck('tahun');
            $tahunDipilih = $tahunList->first();
            $data = APBDesa::where('tahun', $tahunDipilih)->first();

            // Inisialisasi nilai
            $totalPendapatan = $totalPendapatanRealisasi = $totalBelanja = $totalBelanjaRealisasi = $surplus = 0;
            $persenPendapatan = $persenBelanja = 0;
            $pendapatanList = $belanjaList = [];

            if ($data) {
                $padAnggaran = $data->pendapatan_asli_desa_anggaran;
                $padRealisasi = $data->pendapatan_asli_desa_realisasi;
                $transferAnggaran = $data->pendapatan_transfer_anggaran;
                $transferRealisasi = $data->pendapatan_transfer_realisasi;
                $lainAnggaran = $data->pendapatan_lain_anggaran;
                $lainRealisasi = $data->pendapatan_lain_realisasi;

                $totalPendapatan = $padAnggaran + $transferAnggaran + $lainAnggaran;
                $totalPendapatanRealisasi = $padRealisasi + $transferRealisasi + $lainRealisasi;

                $belanjaFields = [
                    [
                        'label' => 'Penyelenggaraan Pemerintah Desa',
                        'a' => $data->belanja_penyelenggaraan_anggaran,
                        'r' => $data->belanja_penyelenggaraan_realisasi,
                    ],
                    [
                        'label' => 'Pelaksanaan Pembangunan Desa',
                        'a' => $data->belanja_pembangunan_anggaran,
                        'r' => $data->belanja_pembangunan_realisasi,
                    ],
                    [
                        'label' => 'Pembinaan Kemasyarakatan Desa',
                        'a' => $data->belanja_kemasyarakatan_anggaran,
                        'r' => $data->belanja_kemasyarakatan_realisasi,
                    ],
                    [
                        'label' => 'Pemberdayaan Masyarakat Desa',
                        'a' => $data->belanja_pemberdayaan_anggaran,
                        'r' => $data->belanja_pemberdayaan_realisasi,
                    ],
                    [
                        'label' => 'Penanggulangan Bencana & Mendesak Desa',
                        'a' => $data->belanja_bencana_anggaran,
                        'r' => $data->belanja_bencana_realisasi,
                    ],
                ];

                $totalBelanja = collect($belanjaFields)->sum('a');
                $totalBelanjaRealisasi = collect($belanjaFields)->sum('r');

                $surplus = $totalPendapatanRealisasi - $totalBelanjaRealisasi;
                $persenPendapatan =
                    $totalPendapatan > 0 ? round(($totalPendapatanRealisasi / $totalPendapatan) * 100, 2) : 0;
                $persenBelanja = $totalBelanja > 0 ? round(($totalBelanjaRealisasi / $totalBelanja) * 100, 2) : 0;

                $pendapatanList = [
                    ['label' => 'Pendapatan Asli Desa', 'a' => $padAnggaran, 'r' => $padRealisasi],
                    ['label' => 'Pendapatan Transfer', 'a' => $transferAnggaran, 'r' => $transferRealisasi],
                    ['label' => 'Pendapatan Lain Lain', 'a' => $lainAnggaran, 'r' => $lainRealisasi],
                ];

                $belanjaList = $belanjaFields;
            }
        @endphp

        <section class="mb-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-10 lg:px-16" style="font-family: 'Poppins', sans-serif;">
                @if ($data)
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="text-center lg:text-left reveal-on-scroll">
                            <h2 class="text-2xl md:text-4xl font-bold text-[#0C3B2E]">APB Desa Timpik Tahun <span
                                    class="apbdesa-tahun">{{ $tahunDipilih }}</span></h2>
                            <p class="text-base md:text-lg text-gray-600 mt-2">Desa Timpik, Kecamatan Susukan,
                                Kabupaten
                                Semarang</p>
                        </div>
                        <div class="w-full">
                            <div class="flex justify-end mt-4 reveal-on-scroll">
                                <select id="tahunDropdown"
                                    class="w-full sm:w-[100px] px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                                    @foreach ($tahunList as $tahun)
                                        <option value="{{ $tahun }}"
                                            {{ $tahun == $tahunDipilih ? 'selected' : '' }}>
                                            {{ $tahun }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div
                                class="bg-white p-5 rounded-lg border border-gray-200 shadow-sm mt-2 reveal-on-scroll">
                                <div class="grid grid-cols-2 gap-6">
                                    <div>
                                        <h3 class="font-semibold text-gray-700">Pendapatan</h3>
                                        <p class="text-2xl text-green-600 font-bold mt-1" id="pendapatanRealisasi">
                                            Rp{{ number_format($totalPendapatanRealisasi, 2, ',', '.') }}</p>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-700">Belanja</h3>
                                        <p class="text-2xl text-red-500 font-bold mt-1" id="belanjaRealisasi">
                                            Rp{{ number_format($totalBelanjaRealisasi, 2, ',', '.') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="mt-2 bg-white p-4 rounded-lg border border-gray-200 shadow-sm flex justify-between items-center reveal-on-scroll">
                                <h3 class="text-lg font-semibold text-gray-700">Surplus/Defisit</h3>
                                <p class="text-lg text-gray-800 font-bold" id="surplus">
                                    Rp{{ number_format($surplus, 2, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 reveal-on-scroll">
                        <!-- Pelaksanaan Breakdown -->
                        <div class="bg-white rounded-xl shadow-lg">
                            <div class="p-4 bg-[#0C3B2E] text-white text-center rounded-t-xl">
                                <h3 class="text-xl font-bold">Pelaksanaan</h3>
                            </div>
                            <div class="m-4">
                                <div class="flex justify-center text-xs font-bold text-gray-600 mb-2">
                                    <p>Anggaran | Realisasi</p>
                                </div>
                                <p class="font-semibold text-gray-800 text-sm">Pendapatan</p>
                                <div class="flex justify-between text-xs text-gray-600 mb-1">
                                    <span
                                        id="totalPendapatanAnggaran">Rp{{ number_format($totalPendapatan, 2, ',', '.') }}</span>
                                    <span
                                        id="totalPendapatanRealisasi">Rp{{ number_format($totalPendapatanRealisasi, 2, ',', '.') }}</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-4 relative">
                                    <div class="bg-green-700 h-4 rounded-full" id="progressPendapatan"
                                        style="width: {{ $persenPendapatan }}%"></div>
                                    <span id="persenPendapatan"
                                        class="absolute inset-0 flex items-center justify-center text-white text-xs font-bold">{{ $persenPendapatan }}%</span>
                                </div>

                                <!-- Belanja -->
                                <p class="font-semibold text-gray-800 text-sm mt-4">Belanja</p>
                                <div class="flex justify-between text-xs text-gray-600 mb-1">
                                    <span id="totalBelanjaAnggaran">
                                        Rp{{ number_format($totalBelanja, 2, ',', '.') }}
                                    </span>
                                    <span id="totalBelanjaRealisasi">
                                        Rp{{ number_format($totalBelanjaRealisasi, 2, ',', '.') }}
                                    </span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-4 relative">
                                    <div class="bg-green-700 h-4 rounded-full" id="progressBelanja"
                                        style="width: {{ $persenBelanja }}%">
                                    </div>
                                    <span id="persenBelanja"
                                        class="absolute inset-0 flex items-center justify-center text-white text-xs font-bold">
                                        {{ $persenBelanja }}%
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Pendapatan Breakdown -->
                        <div class="bg-white rounded-xl shadow-lg">
                            <div class="p-4 bg-[#0C3B2E] text-white text-center rounded-t-xl">
                                <h3 class="text-xl font-bold">Pendapatan</h3>
                            </div>
                            <div class="m-4">
                                <div class="flex justify-center text-xs font-bold text-gray-600 mb-2">
                                    <p>Anggaran | Realisasi</p>
                                </div>
                                @foreach ($pendapatanList as $i => $p)
                                    @php $persen = $p['a'] > 0 ? round(($p['r'] / $p['a']) * 100, 2) : 0; @endphp
                                    <div>
                                        <p class="font-semibold text-gray-800 text-sm mt-4"
                                            id="pendapatanLabel{{ $i }}">{{ $p['label'] }}</p>
                                        <div class="flex justify-between text-xs text-gray-600">
                                            <span
                                                id="pendapatanAnggaran{{ $i }}">Rp{{ number_format($p['a'], 2, ',', '.') }}</span>
                                            <span
                                                id="pendapatanRealisasi{{ $i }}">Rp{{ number_format($p['r'], 2, ',', '.') }}</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-4 relative">
                                            <div class="bg-green-700 h-4 rounded-full"
                                                id="pendapatanProgress{{ $i }}"
                                                style="width: {{ $persen }}%"></div>
                                            <span id="pendapatanPersen{{ $i }}"
                                                class="absolute inset-0 flex items-center justify-center text-white text-xs font-bold">{{ $persen }}%</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Belanja Breakdown -->
                        <div class="bg-white rounded-xl shadow-lg">
                            <div class="p-4 bg-[#0C3B2E] text-white text-center rounded-t-xl">
                                <h3 class="text-xl font-bold">Belanja</h3>
                            </div>
                            <div class="m-4">
                                <div class="flex justify-center text-xs font-bold text-gray-600 mb-2">
                                    <p>Anggaran | Realisasi</p>
                                </div>
                                @foreach ($belanjaList as $i => $b)
                                    @php $persen = $b['a'] > 0 ? round(($b['r'] / $b['a']) * 100, 2) : 0; @endphp
                                    <div>
                                        <p class="font-semibold text-gray-800 text-sm mt-4"
                                            id="belanjaLabel{{ $i }}">
                                            {{ $b['label'] }}</p>
                                        <div class="flex justify-between text-xs text-gray-600">
                                            <span
                                                id="belanjaAnggaran{{ $i }}">Rp{{ number_format($b['a'], 2, ',', '.') }}</span>
                                            <span
                                                id="belanjaRealisasi{{ $i }}">Rp{{ number_format($b['r'], 2, ',', '.') }}</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-4 relative">
                                            <div class="bg-green-700 h-4 rounded-full"
                                                id="belanjaProgress{{ $i }}"
                                                style="width: {{ $persen }}%">
                                            </div>
                                            <span id="belanjaPersen{{ $i }}"
                                                class="absolute inset-0 flex items-center justify-center text-white text-xs font-bold">{{ $persen }}%</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- Jika data apb kosong --}}
                @else
                    <p class="text-center text-gray-600 mt-6">Data APBDesa belum tersedia untuk ditampilkan.</p>
                @endif
            </div>
        </section>

        <script>
            function formatRupiah(angka) {
                return 'Rp' + parseFloat(angka).toLocaleString('id-ID', {
                    minimumFractionDigits: 2
                });
            }

            const tahunDropdown = document.getElementById('tahunDropdown');
            tahunDropdown.addEventListener('change', function() {
                const tahun = this.value;
                fetch(`/apbdesa/data/${tahun}`)
                    .then(res => res.json())
                    .then(data => {
                        document.querySelectorAll('.apbdesa-tahun').forEach(el => el.textContent = data.tahun);
                        document.getElementById('pendapatanRealisasi').textContent = formatRupiah(data
                            .totalPendapatanRealisasi);
                        document.getElementById('belanjaRealisasi').textContent = formatRupiah(data
                            .totalBelanjaRealisasi);
                        document.getElementById('surplus').textContent = formatRupiah(data.surplus);
                        document.getElementById('progressPendapatan').style.width = data.persenPendapatan + '%';
                        document.getElementById('persenPendapatan').textContent = data.persenPendapatan + '%';
                        document.getElementById('progressBelanja').style.width = data.persenBelanja + '%';
                        document.getElementById('persenBelanja').textContent = data.persenBelanja + '%';
                        document.getElementById('totalPendapatanAnggaran').textContent = 'Anggaran: ' +
                            formatRupiah(data.totalPendapatan);
                        document.getElementById('totalPendapatanRealisasi').textContent = 'Realisasi: ' +
                            formatRupiah(data.totalPendapatanRealisasi);

                        document.getElementById('totalBelanjaAnggaran').textContent = 'Anggaran: ' + formatRupiah(
                            data.totalBelanja);
                        document.getElementById('totalBelanjaRealisasi').textContent = 'Realisasi: ' + formatRupiah(
                            data.totalBelanjaRealisasi);

                        data.pendapatan.forEach((item, i) => {
                            const persen = item.anggaran > 0 ? (item.realisasi / item.anggaran * 100)
                                .toFixed(2) : 0;
                            document.getElementById(`pendapatanLabel${i}`).textContent = item.label;
                            document.getElementById(`pendapatanAnggaran${i}`).textContent = formatRupiah(
                                item.anggaran);
                            document.getElementById(`pendapatanRealisasi${i}`).textContent = formatRupiah(
                                item.realisasi);
                            document.getElementById(`pendapatanProgress${i}`).style.width = persen + '%';
                            document.getElementById(`pendapatanPersen${i}`).textContent = persen + '%';
                        });

                        data.belanja.forEach((item, i) => {
                            const persen = item.anggaran > 0 ? (item.realisasi / item.anggaran * 100)
                                .toFixed(2) : 0;
                            document.getElementById(`belanjaLabel${i}`).textContent = item.label;
                            document.getElementById(`belanjaAnggaran${i}`).textContent = formatRupiah(item
                                .anggaran);
                            document.getElementById(`belanjaRealisasi${i}`).textContent = formatRupiah(item
                                .realisasi);
                            document.getElementById(`belanjaProgress${i}`).style.width = persen + '%';
                            document.getElementById(`belanjaPersen${i}`).textContent = persen + '%';
                        });
                    });
            });
        </script>

    </main>

    <button id="scrollTopBtn"
        class="fixed bottom-6 right-6 z-[100] bg-gray-300/60 hover:bg-gray-400/80 text-white rounded-xl p-2 shadow-md hide transition backdrop-blur-sm"
        aria-label="Scroll to top">
        <i data-lucide="arrow-up" class="w-6 h-6 text-gray-700"></i>
    </button>

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

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.reveal-on-scroll').forEach(el => {
            observer.observe(el);
        });

        const scrollTopBtn = document.getElementById("scrollTopBtn");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 200) {
                scrollTopBtn.classList.remove("hide");
                scrollTopBtn.classList.add("show");
            } else {
                scrollTopBtn.classList.remove("show");
                scrollTopBtn.classList.add("hide");
            }
        });

        scrollTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });

        const slides = document.querySelectorAll('.slideshow-slide');
        let currentIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.add('opacity-100', 'z-10');
                    slide.classList.remove('opacity-0', 'z-0');
                } else {
                    slide.classList.add('opacity-0', 'z-0');
                    slide.classList.remove('opacity-100', 'z-10');
                }
            });
        }

        setInterval(() => {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }, 3000);
    </script>
</body>

</html>
