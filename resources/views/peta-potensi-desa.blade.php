<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Potensi Desa | Desa Timpik</title>

    <link rel="icon" type="image/png" href="{{ asset('/public/images/logo-timpik.png') }}">

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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
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

        #map {
            z-index: 1;
        }

        .text-brand-dark {
            color: #0C3B2E;
        }

        .text-brand-gold {
            color: #E8C187;
        }

        .bg-brand-light {
            background-color: #C7F3E7;
        }

        .bg-brand-dark {
            background-color: #0C3B2E;
        }

        .text-brand-green {
            color: #12715D;
        }

        .leaflet-popup-content-wrapper {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .leaflet-popup-content {
            margin: 0 !important;
            width: auto !important;
        }

        .leaflet-popup-close-button {
            color: white !important;
            top: 10px !important;
            right: 10px !important;
        }
    </style>
</head>

<body>

    @include('layouts.partials.header')

    <main>
        <!-- Hero Section -->
        <section class="relative h-80 md:h-120 w-full flex items-center justify-center text-white -mt-20">
            <div class="absolute inset-0 overflow-hidden">
                <img src="{{ asset('/public/images/timpik_sawah2.png') }}"
                    onerror="this.onerror=null;this.src='https://placehold.co/1920x1080/445566/FFFFFF?text=Latar+Belakang';"
                    alt="Pemandangan sawah Desa Timpik"
                    class="w-full h-full object-cover transform translate-y-10">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#0C3B2E]/60 via-transparent to-transparent"></div>
            <div class="absolute inset-0 bg-black/20"></div>

            <div class="relative z-10 container mx-auto px-6 text-center lg:text-left lg:pl-24">
                <div class="max-w-xl lg:max-w-2xl">
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-[#0C3B2E] mt-20 reveal-on-scroll"
                        style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Peta Potensi
                    </h1>
                    <p class="text-4xl md:text-5xl lg:text-7xl text-white italic reveal-on-scroll"
                        style="font-family: 'Playfair Display', serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Desa <span class="text-[#E8C187]">Timpik</span>
                    </p>
                    <nav class="mt-4 flex justify-center lg:justify-start reveal-on-scroll" aria-label="Breadcrumb">
                        <ol role="list"
                            class="flex items-center space-x-2 bg-black/20 backdrop-blur-sm px-4 py-2 rounded-full">
                            <li>
                                <a href="{{ route('welcome') }}"
                                    class="text-gray-300 hover:text-white transition-colors">
                                    <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">Home</span>
                                </a>
                            </li>

                            <li>
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="ml-2 text-sm font-semibold text-white">Peta Potensi Desa</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <section class="py-12 font-['Poppins',sans-serif] mb-6">
            <div class="container mx-auto px-8 sm:px-12 lg:px-40">

                <div class="text-center mb-9 reveal-on-scroll">
                    <span
                        class="inline-block mb-3 bg-[#C7F3E7] text-[#12715D] px-4 py-1 rounded-full font-semibold text-xs tracking-wider shadow">
                        SELURUH OBSERVASI
                    </span>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-[#0C3B2E] drop-shadow-lg mb-2">Peta Potensi Desa
                    </h2>
                    <div
                        class="mx-auto w-24 md:w-48 h-1 bg-gradient-to-r from-[#C7F3E7] via-[#0C3B2E] to-[#E8C187] rounded-full mb-1">
                    </div>
                    <p class="mt-4 text-base md:text-lg text-gray-700 opacity-80">
                        Jelajahi potensi dan perkembangan terbaru seputar <span class="text-[#E8C187] font-bold">Desa
                            Timpik</span>. <br>Klik penanda pada peta untuk detail singkat atau gulir ke bawah untuk
                        melihat semua potensi.</br>
                    </p>
                </div>

                <div id="map" class="w-full h-120 rounded-2xl shadow-xl reveal-on-scroll border-4 border-white">
                </div>

            </div>
        </section>

        <section>
            <div class="container mx-auto px-4 sm:px-8 lg:px-20" x-data="potentialsData()">
                <template x-for="(location, index) in locations" :key="index">
                    <div class="mb-16 reveal-on-scroll">
                        <div class="flex items-center mb-8">
                            <span
                                class="flex-shrink-0 w-12 h-12 bg-brand-dark text-white rounded-full flex items-center justify-center font-bold text-xl"
                                x-text="index + 1"></span>
                            <div class="ml-4">
                                <h3 class="text-3xl font-bold text-brand-dark" x-text="location.name"></h3>
                                <div class="w-20 h-1 bg-brand-gold mt-1"></div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                            <template x-for="(item, itemIndex) in location.items" :key="itemIndex">
                                <div
                                    class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 group">
                                    <div class="relative">
                                        <img :src="item.image"
                                            onerror="this.onerror=null;this.src='https://placehold.co/600x400/C7F3E7/0C3B2E?text=Potensi';"
                                            :alt="item.name" class="w-full h-48 object-cover">
                                        <div
                                            class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-300">
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <h4 class="text-xl font-bold text-brand-dark truncate" x-text="item.name"></h4>
                                        <p class="text-gray-600 mt-1 text-sm" x-text="item.category"></p>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </template>
            </div>
        </section>

        <section class="font-['Poppins',sans-serif] mb-14">
            <div class="container mx-auto px-8 sm:px-12 lg:px-40">
                <div class="text-center mb-9">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#0C3B2E] drop-shadow-lg mb-2">Jelajahi Potensi
                        Desa
                    </h2>
                    <div
                        class="mx-auto w-24 md:w-48 h-1 bg-gradient-to-r from-[#C7F3E7] via-[#0C3B2E] to-[#E8C187] rounded-full mb-1">
                    </div>
                </div>

                {{-- Dusun Timpik --}}
                <div x-data="{ showModal: false }">
                    <div class="flex justify-center mb-8">
                        <div
                            class="group bg-[#D9E6E6] rounded-xl shadow-lg p-5 w-full max-w-xs text-center transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-xl hover:bg-brand-dark">
                            <h3
                                class="text-xl md:text-2xl font-bold text-brand-dark group-hover:text-white transition-colors duration-300">
                                Timpik</h3>
                            <button @click="showModal = true"
                                class="mt-2 text-sm bg-white text-[#0C3B2E] border border-[#0C3B2E] hover:bg-[#0C3B2E] hover:text-white hover:border-white transition-colors duration-300 px-5 py-1 rounded-full cursor-pointer">
                                Detail
                            </button>
                        </div>
                    </div>

                    <div x-show="showModal" x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                        style="display: none;">

                        <div @click.away="showModal = false" x-show="showModal"
                            x-transition:enter="ease-out duration-50" x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-50"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="bg-gray-50 rounded-2xl shadow-2xl w-full max-w-4xl transform">

                            <div class="relative bg-[#0C3B2E] text-white p-5 text-center rounded-t-2xl">
                                <h3 class="text-xl md:text-2xl font-bold">Potensi Dusun Timpik</h3>
                                <p class="text-amber-300 text-sm">Detail Keunggulan Dusun</p>
                                <button @click="showModal = false"
                                    class="absolute top-3 right-3 text-white/70 hover:text-white cursor-pointer p-1 rounded-full hover:bg-white/20 transition-colors">
                                    <i data-lucide="x" class="w-7 h-7"></i>
                                </button>
                            </div>

                            <div class="p-6 md:p-8 space-y-8 max-h-[75vh] overflow-y-auto">
                                <section>
                                    <h4
                                        class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                        Kesenian</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div
                                            class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                            <img src="https://placehold.co/600x400/8e44ad/ffffff?text=Karawitan"
                                                alt="Karawitan" class="w-full h-48 object-cover">
                                            <div class="p-4">
                                                <h5 class="text-lg font-bold text-[#0C3B2E]">Karawitan</h5>
                                                <p class="text-sm text-gray-600 mt-1">Seni musik tradisional yang
                                                    menggabungkan instrumen gamelan dan vokal, menjadi warisan budaya
                                                    yang terus dilestarikan.</p>
                                            </div>
                                        </div>
                                        <div
                                            class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                            <img src="https://placehold.co/600x400/7f8c8d/ffffff?text=Musik+Rebana"
                                                alt="Rebana" class="w-full h-48 object-cover">
                                            <div class="p-4">
                                                <h5 class="text-lg font-bold text-[#0C3B2E]">Rebana</h5>
                                                <p class="text-sm text-gray-600 mt-1">Grup musik rebana yang aktif
                                                    memeriahkan berbagai acara keagamaan dan perayaan budaya di tingkat
                                                    desa.</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <h4 class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                        Wisata & Situs Religi</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div
                                            class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                            <img src="https://placehold.co/600x400/27ae60/ffffff?text=Mata+Air+Tirip"
                                                alt="Mata Air Tirip" class="w-full h-48 object-cover">
                                            <div class="p-4">
                                                <h5 class="text-lg font-bold text-[#0C3B2E]">Mata Air Tirip</h5>
                                                <p class="text-sm text-gray-600 mt-1">Sumber mata air alami yang jernih
                                                    dan menyegarkan, menjadi destinasi favorit untuk relaksasi dan
                                                    wisata alam.</p>
                                            </div>
                                        </div>
                                        <div
                                            class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                            <img src="https://placehold.co/600x400/bdc3c7/000000?text=Makam+Mukdara"
                                                alt="Makam Mukdara" class="w-full h-48 object-cover">
                                            <div class="p-4">
                                                <h5 class="text-lg font-bold text-[#0C3B2E]">Makam Mukdara</h5>
                                                <p class="text-sm text-gray-600 mt-1">Situs makam bersejarah yang
                                                    dihormati, sering menjadi tujuan ziarah dan wisata religi bagi
                                                    masyarakat luas.</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <h4 class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                        Industri</h4>
                                    <div class="grid grid-cols-1 gap-6">
                                        <div
                                            class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                            <img src="https://placehold.co/600x400/27ae60/ffffff?text=Konveksi"
                                                alt="Konveksi" class="w-full h-48 object-cover">
                                            <div class="p-4">
                                                <h5 class="text-lg font-bold text-[#0C3B2E]">Konveksi Pakaian</h5>
                                                <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit amet
                                                    consectetur adipisicing elit. Minima cumque iusto nostrum dolore,
                                                    ipsam numquam eligendi placeat veritatis ea temporibus officiis in
                                                    pariatur, quas, nisi dignissimos! Porro fuga impedit totam?</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Dusun Karangsalam --}}
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <div x-data="{ showModal: false }">
                        <div
                            class="group bg-[#D9E6E6] rounded-xl shadow-lg p-5 w-full text-center transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-xl hover:bg-brand-dark">
                            <h3
                                class="text-md md:text-2xl font-bold text-brand-dark group-hover:text-white transition-colors duration-300">
                                Karangsalam</h3>
                            <button @click="showModal = true"
                                class="mt-2 text-sm bg-white text-[#0C3B2E] border border-[#0C3B2E] hover:bg-[#0C3B2E] hover:text-white hover:border-white transition-colors duration-300 px-5 py-1 rounded-full cursor-pointer">
                                Detail
                            </button>
                        </div>

                        <div x-show="showModal" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                            style="display: none;">
                            <div @click.away="showModal = false" x-show="showModal"
                                x-transition:enter="ease-out duration-50"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="ease-in duration-50"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="bg-gray-50 rounded-2xl shadow-2xl w-full max-w-4xl transform">
                                <div class="relative bg-[#0C3B2E] text-white p-5 text-center rounded-t-2xl">
                                    <h3 class="text-lg md:text-2xl font-bold">Potensi Dusun Karangsalam</h3>
                                    <p class="text-amber-300 text-sm">Detail Keunggulan Dusun</p>
                                    <button @click="showModal = false"
                                        class="absolute top-3 right-3 text-white/70 hover:text-white cursor-pointer p-1 rounded-full hover:bg-white/20 transition-colors">
                                        <i data-lucide="x" class="w-7 h-7"></i>
                                    </button>
                                </div>

                                <div class="p-6 md:p-8 space-y-8 max-h-[75vh] overflow-y-auto">
                                    <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h4
                                                class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                                Wisata & Situs Religi
                                            </h4>
                                            <div class="grid grid-cols-1 gap-6">
                                                <div
                                                    class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                    <img src="https://placehold.co/600x400/8e44ad/ffffff?text=Sedang"
                                                        alt="Sedang" class="w-full h-48 object-cover">
                                                    <div class="p-4">
                                                        <h5 class="text-lg font-bold text-[#0C3B2E]">Sedang Sirah Kajar
                                                        </h5>
                                                        <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit
                                                            amet consectetur adipisicing elit. Tempore dolore libero
                                                            temporibus, rerum, atque eos ad vero, deserunt dolor modi
                                                            ducimus id totam mollitia illum ea molestiae nisi saepe!
                                                            Illum!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h4
                                                class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                                Produk UMKM
                                            </h4>
                                            <div class="grid grid-cols-1 gap-6">
                                                <div
                                                    class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                    <img src="https://placehold.co/600x400/8e44ad/ffffff?text=Gula"
                                                        alt="Gula Jawa" class="w-full h-48 object-cover">
                                                    <div class="p-4">
                                                        <h5 class="text-lg font-bold text-[#0C3B2E]">Gula Jawa</h5>
                                                        <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit
                                                            amet consectetur adipisicing elit. Tempore dolore libero
                                                            temporibus, rerum, atque eos ad vero, deserunt dolor modi
                                                            ducimus id totam mollitia illum ea molestiae nisi saepe!
                                                            Illum!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ showModal: false }">
                        <div
                            class="group bg-[#D9E6E6] rounded-xl shadow-lg p-5 w-full text-center transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-xl hover:bg-brand-dark">
                            <h3
                                class="text-xl md:text-2xl font-bold text-brand-dark group-hover:text-white transition-colors duration-300">
                                Kaliabon</h3>
                            <button @click="showModal = true"
                                class="mt-2 text-sm bg-white text-[#0C3B2E] border border-[#0C3B2E] hover:bg-[#0C3B2E] hover:text-white hover:border-white transition-colors duration-300 px-5 py-1 rounded-full cursor-pointer">
                                Detail
                            </button>
                        </div>

                        <div x-show="showModal" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                            style="display: none;">
                            <div @click.away="showModal = false" x-show="showModal"
                                x-transition:enter="ease-out duration-50"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="ease-in duration-50"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="bg-gray-50 rounded-2xl shadow-2xl w-full max-w-4xl transform">
                                <div class="relative bg-[#0C3B2E] text-white p-5 text-center rounded-t-2xl">
                                    <h3 class="text-xl md:text-2xl font-bold">Potensi Dusun Kaliabon</h3>
                                    <p class="text-amber-300 text-sm">Detail Keunggulan Dusun</p>
                                    <button @click="showModal = false"
                                        class="absolute top-3 right-3 text-white/70 hover:text-white cursor-pointer p-1 rounded-full hover:bg-white/20 transition-colors">
                                        <i data-lucide="x" class="w-7 h-7"></i>
                                    </button>
                                </div>

                                <div class="p-6 md:p-8 space-y-8 max-h-[75vh] overflow-y-auto">
                                    <section>
                                        <h4
                                            class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                            Produk UMKM
                                        </h4>
                                        <div class="grid grid-cols-1 gap-6">
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/27ae60/ffffff?text=Jamu"
                                                    alt="Jamu" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Jamu</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit amet
                                                        consectetur adipisicing elit. Minima cumque iusto nostrum
                                                        dolore, ipsam numquam eligendi placeat veritatis ea temporibus
                                                        officiis in pariatur, quas, nisi dignissimos! Porro fuga impedit
                                                        totam?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Dusun Gedangan --}}
                    <div x-data="{ showModal: false }">
                        <div
                            class="group bg-[#D9E6E6] rounded-xl shadow-lg p-5 w-full text-center transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-xl hover:bg-brand-dark">
                            <h3
                                class="text-xl md:text-2xl font-bold text-brand-dark group-hover:text-white transition-colors duration-300">
                                Gedangan</h3>
                            <button @click="showModal = true"
                                class="mt-2 text-sm bg-white text-[#0C3B2E] border border-[#0C3B2E] hover:bg-[#0C3B2E] hover:text-white hover:border-white transition-colors duration-300 px-5 py-1 rounded-full cursor-pointer">
                                Detail
                            </button>
                        </div>

                        <div x-show="showModal" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                            style="display: none;">
                            <div @click.away="showModal = false" x-show="showModal"
                                x-transition:enter="ease-out duration-50"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="ease-in duration-50"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="bg-gray-50 rounded-2xl shadow-2xl w-full max-w-4xl transform">
                                <div class="relative bg-[#0C3B2E] text-white p-5 text-center rounded-t-2xl">
                                    <h3 class="text-xl md:text-2xl font-bold">Potensi Dusun Gedangan</h3>
                                    <p class="text-amber-300 text-sm">Detail Keunggulan Dusun</p>
                                    <button @click="showModal = false"
                                        class="absolute top-3 right-3 text-white/70 hover:text-white cursor-pointer p-1 rounded-full hover:bg-white/20 transition-colors">
                                        <i data-lucide="x" class="w-7 h-7"></i>
                                    </button>
                                </div>

                                <div class="p-6 md:p-8 space-y-8 max-h-[75vh] overflow-y-auto">
                                    <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h4
                                                class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                                Kesenian
                                            </h4>
                                            <div class="grid grid-cols-1 gap-6">
                                                <div
                                                    class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                    <img src="https://placehold.co/600x400/8e44ad/ffffff?text=Reog"
                                                        alt="Reog" class="w-full h-48 object-cover">
                                                    <div class="p-4">
                                                        <h5 class="text-lg font-bold text-[#0C3B2E]">Reog
                                                        </h5>
                                                        <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit
                                                            amet consectetur adipisicing elit. Tempore dolore libero
                                                            temporibus, rerum, atque eos ad vero, deserunt dolor modi
                                                            ducimus id totam mollitia illum ea molestiae nisi saepe!
                                                            Illum!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h4
                                                class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                                Produk UMKM
                                            </h4>
                                            <div class="grid grid-cols-1 gap-6">
                                                <div
                                                    class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                    <img src="https://placehold.co/600x400/8e44ad/ffffff?text=Tempe"
                                                        alt="Tempe" class="w-full h-48 object-cover">
                                                    <div class="p-4">
                                                        <h5 class="text-lg font-bold text-[#0C3B2E]">Tempe</h5>
                                                        <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit
                                                            amet consectetur adipisicing elit. Tempore dolore libero
                                                            temporibus, rerum, atque eos ad vero, deserunt dolor modi
                                                            ducimus id totam mollitia illum ea molestiae nisi saepe!
                                                            Illum!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Dusun Geneng --}}
                    <div x-data="{ showModal: false }">
                        <div
                            class="group bg-[#D9E6E6] rounded-xl shadow-lg p-5 w-full text-center transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-xl hover:bg-brand-dark">
                            <h3
                                class="text-xl md:text-2xl font-bold text-brand-dark group-hover:text-white transition-colors duration-300">
                                Geneng</h3>
                            <button @click="showModal = true"
                                class="mt-2 text-sm bg-white text-[#0C3B2E] border border-[#0C3B2E] hover:bg-[#0C3B2E] hover:text-white hover:border-white transition-colors duration-300 px-5 py-1 rounded-full cursor-pointer">
                                Detail
                            </button>
                        </div>

                        <div x-show="showModal" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                            style="display: none;">
                            <div @click.away="showModal = false" x-show="showModal"
                                x-transition:enter="ease-out duration-50"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="ease-in duration-50"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="bg-gray-50 rounded-2xl shadow-2xl w-full max-w-4xl transform">
                                <div class="relative bg-[#0C3B2E] text-white p-5 text-center rounded-t-2xl">
                                    <h3 class="text-xl md:text-2xl font-bold">Potensi Dusun Geneng</h3>
                                    <p class="text-amber-300 text-sm">Detail Keunggulan Dusun</p>
                                    <button @click="showModal = false"
                                        class="absolute top-3 right-3 text-white/70 hover:text-white cursor-pointer p-1 rounded-full hover:bg-white/20 transition-colors">
                                        <i data-lucide="x" class="w-7 h-7"></i>
                                    </button>
                                </div>

                                <div class="p-6 md:p-8 space-y-8 max-h-[75vh] overflow-y-auto">
                                    <section>
                                        <h4
                                            class="justify-center text-center text-xl font-bold text-[#0C3B2E] pl-4">
                                            Belum ada potensi desa pada dusun ini
                                        </h4>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ showModal: false }">
                        <div
                            class="group bg-[#D9E6E6] rounded-xl shadow-lg p-5 w-full text-center transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-xl hover:bg-brand-dark">
                            <h3
                                class="text-xl md:text-2xl font-bold text-brand-dark group-hover:text-white transition-colors duration-300">
                                Kauman</h3>
                            <button @click="showModal = true"
                                class="mt-2 text-sm bg-white text-[#0C3B2E] border border-[#0C3B2E] hover:bg-[#0C3B2E] hover:text-white hover:border-white transition-colors duration-300 px-5 py-1 rounded-full cursor-pointer">
                                Detail
                            </button>
                        </div>

                        <div x-show="showModal" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                            style="display: none;">
                            <div @click.away="showModal = false" x-show="showModal"
                                x-transition:enter="ease-out duration-50"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="ease-in duration-50"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="bg-gray-50 rounded-2xl shadow-2xl w-full max-w-4xl transform">
                                <div class="relative bg-[#0C3B2E] text-white p-5 text-center rounded-t-2xl">
                                    <h3 class="text-xl md:text-2xl font-bold">Potensi Dusun Kauman</h3>
                                    <p class="text-amber-300 text-sm">Detail Keunggulan Dusun</p>
                                    <button @click="showModal = false"
                                        class="absolute top-3 right-3 text-white/70 hover:text-white cursor-pointer p-1 rounded-full hover:bg-white/20 transition-colors">
                                        <i data-lucide="x" class="w-7 h-7"></i>
                                    </button>
                                </div>

                                <div class="p-6 md:p-8 space-y-8 max-h-[75vh] overflow-y-auto">
                                    <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h4
                                                class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                                Produk UMKM
                                            </h4>
                                            <div class="grid grid-cols-1 gap-6">
                                                <div
                                                    class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                    <img src="https://placehold.co/600x400/8e44ad/ffffff?text=UMKM"
                                                        alt="UMKM" class="w-full h-48 object-cover">
                                                    <div class="p-4">
                                                        <h5 class="text-lg font-bold text-[#0C3B2E]">Bakso
                                                        </h5>
                                                        <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit
                                                            amet consectetur adipisicing elit. Tempore dolore libero
                                                            temporibus, rerum, atque eos ad vero, deserunt dolor modi
                                                            ducimus id totam mollitia illum ea molestiae nisi saepe!
                                                            Illum!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h4
                                                class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                                Wisata & Situs Religi
                                            </h4>
                                            <div class="grid grid-cols-1 gap-6">
                                                <div
                                                    class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                    <img src="https://placehold.co/600x400/8e44ad/ffffff?text=MasjidYoni"
                                                        alt="Masjid Yoni" class="w-full h-48 object-cover">
                                                    <div class="p-4">
                                                        <h5 class="text-lg font-bold text-[#0C3B2E]">Masjid & Yoni Dusun Kauman</h5>
                                                        <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit
                                                            amet consectetur adipisicing elit. Tempore dolore libero
                                                            temporibus, rerum, atque eos ad vero, deserunt dolor modi
                                                            ducimus id totam mollitia illum ea molestiae nisi saepe!
                                                            Illum!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Dusun Durenan --}}
                    <div x-data="{ showModal: false }">
                        <div
                            class="group bg-[#D9E6E6] rounded-xl shadow-lg p-5 w-full text-center transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-xl hover:bg-brand-dark">
                            <h3
                                class="text-xl md:text-2xl font-bold text-brand-dark group-hover:text-white transition-colors duration-300">
                                Durenan</h3>
                            <button @click="showModal = true"
                                class="mt-2 text-sm bg-white text-[#0C3B2E] border border-[#0C3B2E] hover:bg-[#0C3B2E] hover:text-white hover:border-white transition-colors duration-300 px-5 py-1 rounded-full cursor-pointer">
                                Detail
                            </button>
                        </div>

                        <div x-show="showModal" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                            style="display: none;">
                            <div @click.away="showModal = false" x-show="showModal"
                                x-transition:enter="ease-out duration-50"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="ease-in duration-50"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="bg-gray-50 rounded-2xl shadow-2xl w-full max-w-4xl transform">
                                <div class="relative bg-[#0C3B2E] text-white p-5 text-center rounded-t-2xl">
                                    <h3 class="text-xl md:text-2xl font-bold">Potensi Dusun Kauman</h3>
                                    <p class="text-amber-300 text-sm">Detail Keunggulan Dusun</p>
                                    <button @click="showModal = false"
                                        class="absolute top-3 right-3 text-white/70 hover:text-white cursor-pointer p-1 rounded-full hover:bg-white/20 transition-colors">
                                        <i data-lucide="x" class="w-7 h-7"></i>
                                    </button>
                                </div>

                                <div class="p-6 md:p-8 space-y-8 max-h-[75vh] overflow-y-auto">
                                    <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h4
                                                class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                                Produk UMKM
                                            </h4>
                                            <div class="grid grid-cols-1 gap-6">
                                                <div
                                                    class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                    <img src="https://placehold.co/600x400/8e44ad/ffffff?text=Telur"
                                                        alt="Telur Asin" class="w-full h-48 object-cover">
                                                    <div class="p-4">
                                                        <h5 class="text-lg font-bold text-[#0C3B2E]">Telur Asin
                                                        </h5>
                                                        <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit
                                                            amet consectetur adipisicing elit. Tempore dolore libero
                                                            temporibus, rerum, atque eos ad vero, deserunt dolor modi
                                                            ducimus id totam mollitia illum ea molestiae nisi saepe!
                                                            Illum!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h4
                                                class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                                Wisata & Situs Religi
                                            </h4>
                                            <div class="grid grid-cols-1 gap-6">
                                                <div
                                                    class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                    <img src="https://placehold.co/600x400/8e44ad/ffffff?text=Makam"
                                                        alt="Makam" class="w-full h-48 object-cover">
                                                    <div class="p-4">
                                                        <h5 class="text-lg font-bold text-[#0C3B2E]">Makam</h5>
                                                        <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit
                                                            amet consectetur adipisicing elit. Tempore dolore libero
                                                            temporibus, rerum, atque eos ad vero, deserunt dolor modi
                                                            ducimus id totam mollitia illum ea molestiae nisi saepe!
                                                            Illum!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Dusun Sumber --}}
                    <div x-data="{ showModal: false }">
                        <div
                            class="group bg-[#D9E6E6] rounded-xl shadow-lg p-5 w-full text-center transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-xl hover:bg-brand-dark">
                            <h3
                                class="text-xl md:text-2xl font-bold text-brand-dark group-hover:text-white transition-colors duration-300">
                                Sumber</h3>
                            <button @click="showModal = true"
                                class="mt-2 text-sm bg-white text-[#0C3B2E] border border-[#0C3B2E] hover:bg-[#0C3B2E] hover:text-white hover:border-white transition-colors duration-300 px-5 py-1 rounded-full cursor-pointer">
                                Detail
                            </button>
                        </div>

                        <div x-show="showModal" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                            style="display: none;">
                            <div @click.away="showModal = false" x-show="showModal"
                                x-transition:enter="ease-out duration-50"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="ease-in duration-50"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="bg-gray-50 rounded-2xl shadow-2xl w-full max-w-4xl transform">
                                <div class="relative bg-[#0C3B2E] text-white p-5 text-center rounded-t-2xl">
                                    <h3 class="text-xl md:text-2xl font-bold">Potensi Dusun Sumber</h3>
                                    <p class="text-amber-300 text-sm">Detail Keunggulan Dusun</p>
                                    <button @click="showModal = false"
                                        class="absolute top-3 right-3 text-white/70 hover:text-white cursor-pointer p-1 rounded-full hover:bg-white/20 transition-colors">
                                        <i data-lucide="x" class="w-7 h-7"></i>
                                    </button>
                                </div>

                                <div class="p-6 md:p-8 space-y-8 max-h-[75vh] overflow-y-auto">
                                    <section>
                                        <h4
                                            class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                            Wisata & Situs Religi</h4>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/8e44ad/ffffff?text=MataAir"
                                                    alt="Mata Air" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Mata Air Kali Sirah</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime iusto magni libero voluptatum dolorem corrupti suscipit reiciendis ullam voluptatibus sit nihil ad sequi beatae laudantium, ducimus, expedita ipsam facere et!</p>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/7f8c8d/ffffff?text=MakamJogo"
                                                    alt="Makam Jogo Satru" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Makam Jogo Satru</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo eligendi quibusdam, animi eaque nostrum dicta doloremque, quia excepturi et repellat consectetur magnam! Provident cupiditate voluptas totam iure aut quos sequi?
                                                        desa.</p>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/7f8c8d/ffffff?text=MakamWali"
                                                    alt="Makam Wali Hidayatullah" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Makam Wali Hidayatullah</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo eligendi quibusdam, animi eaque nostrum dicta doloremque, quia excepturi et repellat consectetur magnam! Provident cupiditate voluptas totam iure aut quos sequi?
                                                        desa.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section>
                                        <h4 class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                            Kesenian</h4>
                                        <div class="grid grid-cols-1 gap-6">
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/27ae60/ffffff?text=Angguk"
                                                    alt="Angguk" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Angguk</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit amet
                                                        consectetur adipisicing elit. Minima cumque iusto nostrum dolore,
                                                        ipsam numquam eligendi placeat veritatis ea temporibus officiis in
                                                        pariatur, quas, nisi dignissimos! Porro fuga impedit totam?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section>
                                        <h4 class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                            Produk UMKM</h4>
                                        <div class="grid grid-cols-1 gap-6">
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/27ae60/ffffff?text=Keripik"
                                                    alt="Keripik Pisang & Singkong" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Keripik Pisang & Singkong</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit amet
                                                        consectetur adipisicing elit. Minima cumque iusto nostrum dolore,
                                                        ipsam numquam eligendi placeat veritatis ea temporibus officiis in
                                                        pariatur, quas, nisi dignissimos! Porro fuga impedit totam?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Dusun Ngasinan --}}
                    <div x-data="{ showModal: false }">
                        <div
                            class="group bg-[#D9E6E6] rounded-xl shadow-lg p-5 w-full text-center transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-xl hover:bg-brand-dark">
                            <h3
                                class="text-xl md:text-2xl font-bold text-brand-dark group-hover:text-white transition-colors duration-300">
                                Ngasinan</h3>
                            <button @click="showModal = true"
                                class="mt-2 text-sm bg-white text-[#0C3B2E] border border-[#0C3B2E] hover:bg-[#0C3B2E] hover:text-white hover:border-white transition-colors duration-300 px-5 py-1 rounded-full cursor-pointer">
                                Detail
                            </button>
                        </div>

                        <div x-show="showModal" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                            style="display: none;">
                            <div @click.away="showModal = false" x-show="showModal"
                                x-transition:enter="ease-out duration-50"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="ease-in duration-50"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="bg-gray-50 rounded-2xl shadow-2xl w-full max-w-4xl transform">
                                <div class="relative bg-[#0C3B2E] text-white p-5 text-center rounded-t-2xl">
                                    <h3 class="text-xl md:text-2xl font-bold">Potensi Dusun Ngasinan</h3>
                                    <p class="text-amber-300 text-sm">Detail Keunggulan Dusun</p>
                                    <button @click="showModal = false"
                                        class="absolute top-3 right-3 text-white/70 hover:text-white cursor-pointer p-1 rounded-full hover:bg-white/20 transition-colors">
                                        <i data-lucide="x" class="w-7 h-7"></i>
                                    </button>
                                </div>

                                <div class="p-6 md:p-8 space-y-8 max-h-[75vh] overflow-y-auto">
                                    <section>
                                        <h4 class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                            Kesenian</h4>
                                        <div class="grid grid-cols-1 gap-6">
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/27ae60/ffffff?text=Reog"
                                                    alt="Reog" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Reog</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit amet
                                                        consectetur adipisicing elit. Minima cumque iusto nostrum dolore,
                                                        ipsam numquam eligendi placeat veritatis ea temporibus officiis in
                                                        pariatur, quas, nisi dignissimos! Porro fuga impedit totam?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section>
                                        <h4
                                            class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                            Produk UMKM</h4>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/8e44ad/ffffff?text=IkatSayur"
                                                    alt="Ikat Sayur" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Ikat Sayur</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime iusto magni libero voluptatum dolorem corrupti suscipit reiciendis ullam voluptatibus sit nihil ad sequi beatae laudantium, ducimus, expedita ipsam facere et!</p>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/7f8c8d/ffffff?text=KeripikGadung"
                                                    alt="Keripik Gadung" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Keripik Gadung</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo eligendi quibusdam, animi eaque nostrum dicta doloremque, quia excepturi et repellat consectetur magnam! Provident cupiditate voluptas totam iure aut quos sequi?
                                                        desa.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Dusun Bogo --}}
                    <div x-data="{ showModal: false }">
                        <div
                            class="group bg-[#D9E6E6] rounded-xl shadow-lg p-5 w-full text-center transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-xl hover:bg-brand-dark">
                            <h3
                                class="text-xl md:text-2xl font-bold text-brand-dark group-hover:text-white transition-colors duration-300">
                                Bogo</h3>
                            <button @click="showModal = true"
                                class="mt-2 text-sm bg-white text-[#0C3B2E] border border-[#0C3B2E] hover:bg-[#0C3B2E] hover:text-white hover:border-white transition-colors duration-300 px-5 py-1 rounded-full cursor-pointer">
                                Detail
                            </button>
                        </div>

                        <div x-show="showModal" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                            style="display: none;">
                            <div @click.away="showModal = false" x-show="showModal"
                                x-transition:enter="ease-out duration-50"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="ease-in duration-50"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="bg-gray-50 rounded-2xl shadow-2xl w-full max-w-4xl transform">
                                <div class="relative bg-[#0C3B2E] text-white p-5 text-center rounded-t-2xl">
                                    <h3 class="text-xl md:text-2xl font-bold">Potensi Dusun Bogo</h3>
                                    <p class="text-amber-300 text-sm">Detail Keunggulan Dusun</p>
                                    <button @click="showModal = false"
                                        class="absolute top-3 right-3 text-white/70 hover:text-white cursor-pointer p-1 rounded-full hover:bg-white/20 transition-colors">
                                        <i data-lucide="x" class="w-7 h-7"></i>
                                    </button>
                                </div>

                                <div class="p-6 md:p-8 space-y-8 max-h-[75vh] overflow-y-auto">
                                    <section>
                                        <h4
                                            class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                            Kesenian</h4>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/8e44ad/ffffff?text=MusikBambu"
                                                    alt="Musik Bambu" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Musik Bambu</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime iusto magni libero voluptatum dolorem corrupti suscipit reiciendis ullam voluptatibus sit nihil ad sequi beatae laudantium, ducimus, expedita ipsam facere et!</p>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/7f8c8d/ffffff?text=Reog"
                                                    alt="Reog" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Reog</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo eligendi quibusdam, animi eaque nostrum dicta doloremque, quia excepturi et repellat consectetur magnam! Provident cupiditate voluptas totam iure aut quos sequi?
                                                        desa.</p>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/7f8c8d/ffffff?text=Karawitan"
                                                    alt="Karawitan" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Karawitan</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo eligendi quibusdam, animi eaque nostrum dicta doloremque, quia excepturi et repellat consectetur magnam! Provident cupiditate voluptas totam iure aut quos sequi?
                                                        desa.</p>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/7f8c8d/ffffff?text=Karawitan"
                                                    alt="Karawitan" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Karawitan</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo eligendi quibusdam, animi eaque nostrum dicta doloremque, quia excepturi et repellat consectetur magnam! Provident cupiditate voluptas totam iure aut quos sequi?
                                                        desa.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section>
                                        <h4 class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                            Produk UMKM</h4>
                                        <div class="grid grid-cols-1 gap-6">
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/27ae60/ffffff?text=KueCucur"
                                                    alt="Kue Cucur" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Kue Cucur</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit amet
                                                        consectetur adipisicing elit. Minima cumque iusto nostrum dolore,
                                                        ipsam numquam eligendi placeat veritatis ea temporibus officiis in
                                                        pariatur, quas, nisi dignissimos! Porro fuga impedit totam?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Dusun Jetak --}}
                    <div x-data="{ showModal: false }">
                        <div
                            class="group bg-[#D9E6E6] rounded-xl shadow-lg p-5 w-full text-center transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-xl hover:bg-brand-dark">
                            <h3
                                class="text-xl md:text-2xl font-bold text-brand-dark group-hover:text-white transition-colors duration-300">
                                Jetak</h3>
                            <button @click="showModal = true"
                                class="mt-2 text-sm bg-white text-[#0C3B2E] border border-[#0C3B2E] hover:bg-[#0C3B2E] hover:text-white hover:border-white transition-colors duration-300 px-5 py-1 rounded-full cursor-pointer">
                                Detail
                            </button>
                        </div>

                        <div x-show="showModal" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                            style="display: none;">
                            <div @click.away="showModal = false" x-show="showModal"
                                x-transition:enter="ease-out duration-50"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="ease-in duration-50"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="bg-gray-50 rounded-2xl shadow-2xl w-full max-w-4xl transform">
                                <div class="relative bg-[#0C3B2E] text-white p-5 text-center rounded-t-2xl">
                                    <h3 class="text-xl md:text-2xl font-bold">Potensi Dusun Jetak</h3>
                                    <p class="text-amber-300 text-sm">Detail Keunggulan Dusun</p>
                                    <button @click="showModal = false"
                                        class="absolute top-3 right-3 text-white/70 hover:text-white cursor-pointer p-1 rounded-full hover:bg-white/20 transition-colors">
                                        <i data-lucide="x" class="w-7 h-7"></i>
                                    </button>
                                </div>

                                <div class="p-6 md:p-8 space-y-8 max-h-[75vh] overflow-y-auto">
                                    <section>
                                        <h4
                                            class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                            Produk UMKM
                                        </h4>
                                        <div class="grid grid-cols-1 gap-6">
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/27ae60/ffffff?text=Jamu"
                                                    alt="Jamu" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Jamu</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit amet
                                                        consectetur adipisicing elit. Minima cumque iusto nostrum
                                                        dolore, ipsam numquam eligendi placeat veritatis ea temporibus
                                                        officiis in pariatur, quas, nisi dignissimos! Porro fuga impedit
                                                        totam?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Dusun Lempuyangan --}}
                    <div x-data="{ showModal: false }">
                        <div
                            class="group bg-[#D9E6E6] rounded-xl shadow-lg p-5 w-full text-center transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-xl hover:bg-brand-dark">
                            <h3
                                class="text-md md:text-2xl font-bold text-brand-dark group-hover:text-white transition-colors duration-300">
                                Lempuyangan</h3>
                            <button @click="showModal = true"
                                class="mt-2 text-sm bg-white text-[#0C3B2E] border border-[#0C3B2E] hover:bg-[#0C3B2E] hover:text-white hover:border-white transition-colors duration-300 px-5 py-1 rounded-full cursor-pointer">
                                Detail
                            </button>
                        </div>

                        <div x-show="showModal" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                            style="display: none;">
                            <div @click.away="showModal = false" x-show="showModal"
                                x-transition:enter="ease-out duration-50"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="ease-in duration-50"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="bg-gray-50 rounded-2xl shadow-2xl w-full max-w-4xl transform">
                                <div class="relative bg-[#0C3B2E] text-white p-5 text-center rounded-t-2xl">
                                    <h3 class="text-md md:text-2xl font-bold">Potensi Dusun Lempuyangan</h3>
                                    <p class="text-amber-300 text-sm">Detail Keunggulan Dusun</p>
                                    <button @click="showModal = false"
                                        class="absolute top-3 right-3 text-white/70 hover:text-white cursor-pointer p-1 rounded-full hover:bg-white/20 transition-colors">
                                        <i data-lucide="x" class="w-7 h-7"></i>
                                    </button>
                                </div>

                                <div class="p-6 md:p-8 space-y-8 max-h-[75vh] overflow-y-auto">
                                    <section>
                                        <h4
                                            class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                            Wisata & Situs Religi
                                        </h4>
                                        <div class="grid grid-cols-1 gap-6">
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/27ae60/ffffff?text=MasjidWaliKutub"
                                                    alt="Masjid Wali Kutub" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Masjid Wali Kutub</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor, sit amet
                                                        consectetur adipisicing elit. Minima cumque iusto nostrum
                                                        dolore, ipsam numquam eligendi placeat veritatis ea temporibus
                                                        officiis in pariatur, quas, nisi dignissimos! Porro fuga impedit
                                                        totam?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Dusun Cengklik --}}
                    <div x-data="{ showModal: false }">
                        <div
                            class="group bg-[#D9E6E6] rounded-xl shadow-lg p-5 w-full text-center transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-xl hover:bg-brand-dark">
                            <h3
                                class="text-xl md:text-2xl font-bold text-brand-dark group-hover:text-white transition-colors duration-300">
                                Cengklik</h3>
                            <button @click="showModal = true"
                                class="mt-2 text-sm bg-white text-[#0C3B2E] border border-[#0C3B2E] hover:bg-[#0C3B2E] hover:text-white hover:border-white transition-colors duration-300 px-5 py-1 rounded-full cursor-pointer">
                                Detail
                            </button>
                        </div>

                        <div x-show="showModal" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                            style="display: none;">
                            <div @click.away="showModal = false" x-show="showModal"
                                x-transition:enter="ease-out duration-50"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="ease-in duration-50"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="bg-gray-50 rounded-2xl shadow-2xl w-full max-w-4xl transform">
                                <div class="relative bg-[#0C3B2E] text-white p-5 text-center rounded-t-2xl">
                                    <h3 class="text-xl md:text-2xl font-bold">Potensi Dusun Cengklik</h3>
                                    <p class="text-amber-300 text-sm">Detail Keunggulan Dusun</p>
                                    <button @click="showModal = false"
                                        class="absolute top-3 right-3 text-white/70 hover:text-white cursor-pointer p-1 rounded-full hover:bg-white/20 transition-colors">
                                        <i data-lucide="x" class="w-7 h-7"></i>
                                    </button>
                                </div>

                                <div class="p-6 md:p-8 space-y-8 max-h-[75vh] overflow-y-auto">
                                    <section>
                                        <h4
                                            class="text-xl font-bold text-[#0C3B2E] border-l-4 border-amber-400 pl-4 mb-3">
                                            Kesenian</h4>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/8e44ad/ffffff?text=Anyaman"
                                                    alt="Anyaman" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Anyaman</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime iusto magni libero voluptatum dolorem corrupti suscipit reiciendis ullam voluptatibus sit nihil ad sequi beatae laudantium, ducimus, expedita ipsam facere et!</p>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                                <img src="https://placehold.co/600x400/7f8c8d/ffffff?text=TahuBakso"
                                                    alt="Tahu Bakso" class="w-full h-48 object-cover">
                                                <div class="p-4">
                                                    <h5 class="text-lg font-bold text-[#0C3B2E]">Tahu Bakso</h5>
                                                    <p class="text-sm text-gray-600 mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo eligendi quibusdam, animi eaque nostrum dicta doloremque, quia excepturi et repellat consectetur magnam! Provident cupiditate voluptas totam iure aut quos sequi?
                                                        desa.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <button id="scrollTopBtn"
        class="fixed bottom-6 right-6 z-[100] bg-gray-300/60 hover:bg-gray-400/80 text-white rounded-xl p-2 shadow-md hide transition backdrop-blur-sm"
        aria-label="Scroll to top">
        <i data-lucide="arrow-up" class="w-6 h-6 text-gray-700"></i>
    </button>

    @include('layouts.partials.footer')

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script>
        const potentialLocations = [{
                name: 'NGASINAN',
                coords: [-7.428211466472232, 110.60259198934894],
                items: [{
                        name: 'Reog',
                        category: 'Kesenian',
                        image: 'https://placehold.co/600x400/1abc9c/ffffff?text=Reog'
                    },
                    {
                        name: 'Ikat Sayur',
                        category: 'Kerajinan',
                        image: 'https://placehold.co/600x400/2ecc71/ffffff?text=Ikat+Sayur'
                    },
                    {
                        name: 'Keripik Gadung',
                        category: 'Produk UMKM',
                        image: 'https://placehold.co/600x400/3498db/ffffff?text=Keripik'
                    }
                ]
            },
            {
                name: 'SUMBER',
                coords: [-7.432792464223754, 110.59703165384117],
                items: [{
                        name: 'Angguk',
                        category: 'Kesenian',
                        image: 'https://placehold.co/600x400/9b59b6/ffffff?text=Angguk'
                    },
                    {
                        name: 'Makam Jogo Satru',
                        category: 'Situs Religi',
                        image: 'https://placehold.co/600x400/34495e/ffffff?text=Makam'
                    },
                    {
                        name: 'Mata Air Kali Sirah',
                        category: 'Wisata Alam',
                        image: 'https://placehold.co/600x400/16a085/ffffff?text=Mata+Air'
                    },
                    {
                        name: 'Keripik Pisang & Singkong',
                        category: 'Produk UMKM',
                        image: 'https://placehold.co/600x400/f1c40f/ffffff?text=Keripik'
                    },
                    {
                        name: 'Makam Wali Hidayatullah',
                        category: 'Situs Religi',
                        image: 'https://placehold.co/600x400/e67e22/ffffff?text=Makam'
                    }
                ]
            },
            {
                name: 'GENENG',
                coords: [-7.431056748624151, 110.5886731170721],
                items: [{
                    name: 'Potensi Geneng',
                    category: 'Pertanian',
                    image: 'https://placehold.co/600x400/e74c3c/ffffff?text=Geneng'
                }, ]
            },
            {
                name: 'KALIBAON',
                coords: [-7.429872194661102, 110.58485725983539],
                items: [{
                    name: 'Jamu',
                    category: 'Minuman Tradisional',
                    image: 'https://placehold.co/600x400/ecf0f1/000000?text=Jamu'
                }]
            },
            {
                name: 'KARANGSALAM',
                coords: [-7.43137710320201, 110.5807410148536],
                items: [{
                        name: 'Sendang Sirah Kajar',
                        category: 'Wisata Alam',
                        image: 'https://placehold.co/600x400/95a5a6/ffffff?text=Sendang'
                    },
                    {
                        name: 'Gula Jawa',
                        category: 'Produk Pertanian',
                        image: 'https://placehold.co/600x400/d35400/ffffff?text=Gula+Jawa'
                    }
                ]
            },
            {
                name: 'GEDANGAN',
                coords: [-7.433083228526796, 110.58243356443485],
                items: [{
                        name: 'Tempe',
                        category: 'Produk UMKM',
                        image: 'https://placehold.co/600x400/c0392b/ffffff?text=Tempe'
                    },
                    {
                        name: 'Reog',
                        category: 'Kesenian',
                        image: 'https://placehold.co/600x400/8e44ad/ffffff?text=Reog'
                    }
                ]
            },
            {
                name: 'TIMPIK',
                coords: [-7.4370344645639515, 110.59358328659471],
                items: [{
                        name: 'Karawitan',
                        category: 'Kesenian',
                        image: 'https://placehold.co/600x400/2980b9/ffffff?text=Karawitan'
                    },
                    {
                        name: 'Mata Air Tirip',
                        category: 'Wisata Alam',
                        image: 'https://placehold.co/600x400/27ae60/ffffff?text=Mata+Air'
                    },
                    {
                        name: 'Konveksi Pakaian',
                        category: 'Industri',
                        image: 'https://placehold.co/600x400/f39c12/ffffff?text=Konveksi'
                    },
                    {
                        name: 'Makam Mukdara',
                        category: 'Situs Religi',
                        image: 'https://placehold.co/600x400/bdc3c7/000000?text=Makam'
                    },
                    {
                        name: 'Rebana',
                        category: 'Kesenian',
                        image: 'https://placehold.co/600x400/7f8c8d/ffffff?text=Rebana'
                    }
                ]
            },
            {
                name: 'KAUMAN',
                coords: [-7.4357176481319, 110.58698689738823],
                items: [{
                        name: 'Bakso',
                        category: 'Produk UMKM',
                        image: 'https://placehold.co/600x400/1abc9c/ffffff?text=Bakso'
                    },
                    {
                        name: 'Masjid & Yoni',
                        category: 'Situs Religi',
                        image: 'https://placehold.co/600x400/3498db/ffffff?text=Masjid'
                    }
                ]
            },
            {
                name: 'DURENAN',
                coords: [-7.435320926029986, 110.59163820064036],
                items: [{
                        name: 'Telur Asin',
                        category: 'Produk UMKM',
                        image: 'https://placehold.co/600x400/2ecc71/ffffff?text=Telur+Asin'
                    },
                    {
                        name: 'Makam',
                        category: 'Situs Religi',
                        image: 'https://placehold.co/600x400/9b59b6/ffffff?text=Makam'
                    }
                ]
            },
            {
                name: 'BOGO',
                coords: [-7.435367545305193, 110.59918556817328],
                items: [{
                        name: 'Kue Cucur',
                        category: 'Produk UMKM',
                        image: 'https://placehold.co/600x400/f1c40f/ffffff?text=Kue+Cucur'
                    },
                    {
                        name: 'Musik Bambu',
                        category: 'Kesenian',
                        image: 'https://placehold.co/600x400/e67e22/ffffff?text=Musik+Bambu'
                    },
                    {
                        name: 'Karawitan',
                        category: 'Kesenian',
                        image: 'https://placehold.co/600x400/e74c3c/ffffff?text=Karawitan'
                    },
                    {
                        name: 'Reog',
                        category: 'Kesenian',
                        image: 'https://placehold.co/600x400/34495e/ffffff?text=Reog'
                    }
                ]
            },
            {
                name: 'JETAK',
                coords: [-7.439319458210223, 110.6073120758248],
                items: [{
                    name: 'Jamu',
                    category: 'Minuman Tradisional',
                    image: 'https://placehold.co/600x400/16a085/ffffff?text=Jamu'
                }]
            },
            {
                name: 'LEMPUYANGAN',
                coords: [-7.440092536813997, 110.60399256964575],
                items: [{
                    name: 'Masjid Wali Kutub',
                    category: 'Situs Religi',
                    image: 'https://placehold.co/600x400/2980b9/ffffff?text=Masjid'
                }]
            },
            {
                name: 'CENGKLIK',
                coords: [-7.4419274480880775, 110.60671017208598],
                items: [{
                        name: 'Tahu Bakso',
                        category: 'Produk UMKM',
                        image: 'https://placehold.co/600x400/8e44ad/ffffff?text=Tahu+Bakso'
                    },
                    {
                        name: 'Anyaman',
                        category: 'Kerajinan',
                        image: 'https://placehold.co/600x400/2c3e50/ffffff?text=Anyaman'
                    }
                ]
            }
        ];

        function potentialsData() {
            return {
                locations: potentialLocations
            };
        }

        document.addEventListener('DOMContentLoaded', () => {
            if (window.lucide) lucide.createIcons();

            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in-up');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const targets = document.querySelectorAll('.reveal-on-scroll');
            targets.forEach(target => {
                observer.observe(target);
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

            var map = L.map('map').setView([-7.434225968768443, 110.5933623333589], 14);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            function createPopupContent(location) {
                let itemsHtml = location.items.map(item => `
                    <div style="display: flex; align-items: center; margin-bottom: 10px;">
                        <img src="${item.image}" onerror="this.onerror=null;this.src='https://placehold.co/60x60/cccccc/000000?text=Img';" alt="${item.name}" style="width: 50px; height: 50px; border-radius: 8px; margin-right: 12px; object-fit: cover; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                        <div>
                            <p style="font-size: 14px; font-weight: 600; color: #0C3B2E; margin: 0;">${item.name}</p>
                            <p style="font-size: 12px; color: #777; margin: 0;">${item.category}</p>
                        </div>
                    </div>
                `).join('');

                if (itemsHtml.lastIndexOf('margin-bottom: 10px;') > -1) {
                    itemsHtml = itemsHtml.substring(0, itemsHtml.lastIndexOf('margin-bottom: 10px;')) + itemsHtml
                        .substring(itemsHtml.lastIndexOf('margin-bottom: 10px;') + 'margin-bottom: 10px;'.length);
                }

                return `
                    <div style="font-family: 'Poppins', sans-serif; width: 260px; padding: 0; overflow: hidden;">
                        <div style="background-color: #0C3B2E; color: white; padding: 12px; text-align: center;">
                            <h3 style="margin: 0; font-size: 16px; font-weight: bold;">${location.name}</h3>
                        </div>
                        <div style="padding: 15px; background-color: #ffffff; max-height: 200px; overflow-y: auto;">
                            ${itemsHtml}
                        </div>
                    </div>
                `;
            }

            potentialLocations.forEach(location => {
                var marker = L.marker(location.coords).addTo(map);
                marker.bindTooltip(`<b>${location.name}</b>`);
                marker.bindPopup(createPopupContent(location));
            });
        });
    </script>

</body>

</html>
