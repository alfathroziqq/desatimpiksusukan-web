<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapping Desa | Desa Timpik</title>

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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

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
                    alt="Pemandangan sawah Desa Timpik" class="w-full h-full object-cover transform translate-y-10">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#0C3B2E]/60 via-transparent to-transparent"></div>
            <div class="absolute inset-0 bg-black/20"></div>

            <div class="relative z-10 container mx-auto px-6 text-center lg:text-left lg:pl-24">
                <div class="max-w-xl lg:max-w-2xl">
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-[#0C3B2E] mt-20 reveal-on-scroll"
                        style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Mapping
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
                                    <span class="ml-2 text-sm font-semibold text-white">Mapping Desa</span>
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
                        DATA GEOSPASIAL
                    </span>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-[#0C3B2E] drop-shadow-lg mb-3">Mapping Desa
                    </h2>
                    <div
                        class="mx-auto w-24 md:w-48 h-1 bg-gradient-to-r from-[#C7F3E7] via-[#0C3B2E] to-[#E8C187] rounded-full mb-1">
                    </div>
                    <p class="mt-4 text-base md:text-lg text-gray-700 opacity-80">
                        Lihat detail <span class="text-[#E8C187] font-bold">administrasi</span>,
                        <span class="text-[#E8C187] font-bold">pertanian</span>, dan
                        <span class="text-[#E8C187] font-bold">sumber daya air</span>
                        Desa Timpik. <br>Gunakan peta interaktif di bawah ini untuk memahami
                        potensi dan tata ruang desa.</br>
                    </p>
                </div>

            </div>
        </section>

        <!-- Section Mapping -->
        <section class="mt-[-30px] font-['Poppins',sans-serif] mb-8 text-[#0C3B2E]" x-data="{ modalOpen: false, modalImg: '' }">
            <div class="container mx-auto px-8 sm:px-12 lg:px-40">

                <!-- Grid 2 kolom dengan nama -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 text-center">
                    <!-- Item 1 -->
                    <div class="reveal-on-scroll text-center">
                        <h3 class="font-semibold text-lg mb-3 text-[#0C3B2E]">Peta Administrasi Desa</h3>
                        <img src="{{ asset('/public/images/mapping-administrasi.png') }}" alt="Peta Administrasi Desa"
                            class="rounded-lg shadow-lg mx-auto cursor-pointer"
                            @click="modalOpen = true; modalImg = '{{ asset('/public/images/mapping-administrasi.png') }}'">
                    </div>

                    <!-- Item 2 -->
                    <div class="reveal-on-scroll text-center">
                        <h3 class="font-semibold text-lg mb-3 text-[#0C3B2E]">Peta Jenis Lahan Pertanian</h3>
                        <img src="{{ asset('/public/images/mapping-lahan-pertanian.png') }}" alt="Peta Jenis Lahan Pertanian"
                            class="rounded-lg shadow-lg mx-auto cursor-pointer"
                            @click="modalOpen = true; modalImg = '{{ asset('/public/images/mapping-lahan-pertanian.png') }}'">
                    </div>

                    <!-- Item 3 -->
                    <div class="reveal-on-scroll text-center">
                        <h3 class="font-semibold text-lg mb-3 text-[#0C3B2E]">Peta Aliran Sungai & Bak Air</h3>
                        <img src="{{ asset('/public/images/mapping-aliran-sungai.png') }}" alt="Peta Aliran Sungai & Bak Air"
                            class="rounded-lg shadow-lg mx-auto cursor-pointer"
                            @click="modalOpen = true; modalImg = '{{ asset('/public/images/mapping-aliran-sungai.png') }}'">
                    </div>

                    <!-- Item 4 -->
                    <div class="reveal-on-scroll text-center">
                        <h3 class="font-semibold text-lg mb-3 text-[#0C3B2E]">Peta Rumah Kepala Desa</h3>
                        <img src="{{ asset('/public/images/mapping-rumah-kepala.png') }}" alt="Peta Infrastruktur Desa"
                            class="rounded-lg shadow-lg mx-auto cursor-pointer"
                            @click="modalOpen = true; modalImg = '{{ asset('/public/images/mapping-rumah-kepala.png') }}'">
                    </div>

                    <!-- Item 5 -->
                    <div class="reveal-on-scroll text-center">
                        <h3 class="font-semibold text-lg mb-3 text-[#0C3B2E]">Peta Fasilitas Pendidikan</h3>
                        <img src="{{ asset('/public/images/mapping-pendidikan.png') }}" alt="Peta Fasilitas Pendidikan"
                            class="rounded-lg shadow-lg mx-auto cursor-pointer"
                            @click="modalOpen = true; modalImg = '{{ asset('/public/images/mapping-pendidikan.png') }}'">
                    </div>

                    <!-- Item 6 -->
                    <div class="reveal-on-scroll text-center">
                        <h3 class="font-semibold text-lg mb-3 text-[#0C3B2E]">Peta Fasilitas Kesehatan</h3>
                        <img src="{{ asset('/public/images/mapping-olahraga.png') }}" alt="Peta Fasilitas Kesehatan"
                            class="rounded-lg shadow-lg mx-auto cursor-pointer"
                            @click="modalOpen = true; modalImg = '{{ asset('/public/images/mapping-olahraga.png') }}'">
                    </div>

                    <!-- Item 7 -->
                    <div class="reveal-on-scroll text-center">
                        <h3 class="font-semibold text-lg mb-3 text-[#0C3B2E]">Peta Persebaran Hewan Ternak</h3>
                        <img src="{{ asset('/public/images/mapping-hewan.png') }}" alt="Peta Persebaran Hewan Ternak"
                            class="rounded-lg shadow-lg mx-auto cursor-pointer"
                            @click="modalOpen = true; modalImg = '{{ asset('/public/images/mapping-hewan.png') }}'">
                    </div>

                    <!-- Item 8 -->
                    <div class="reveal-on-scroll text-center">
                        <h3 class="font-semibold text-lg mb-3 text-[#0C3B2E]">Peta Sosial Budaya</h3>
                        <img src="{{ asset('/public/images/mapping-kebudayaan.png') }}" alt="Peta Sosial Budaya"
                            class="rounded-lg shadow-lg mx-auto cursor-pointer"
                            @click="modalOpen = true; modalImg = '{{ asset('/public/images/mapping-kebudayaan.png') }}'">
                    </div>

                    <!-- Item 9 -->
                    <div class="reveal-on-scroll text-center">
                        <h3 class="font-semibold text-lg mb-3 text-[#0C3B2E]">Peta Aliran Listrik & Titik Lampu</h3>
                        <img src="{{ asset('/public/images/mapping-jaringan-listrik.png') }}" alt="Peta Aliran Listrik & Titik Lampu"
                            class="rounded-lg shadow-lg mx-auto cursor-pointer"
                            @click="modalOpen = true; modalImg = '{{ asset('/public/images/mapping-jaringan-listrik.png') }}'">
                    </div>

                    <!-- Item 10 -->
                    <div class="reveal-on-scroll text-center">
                        <h3 class="font-semibold text-lg mb-3 text-[#0C3B2E]">Peta Aliran Listrik & Titik Lampu</h3>
                        <img src="{{ asset('/public/images/mapping-listrik-lampu.png') }}" alt="Peta Aliran Listrik & Titik Lampu"
                            class="rounded-lg shadow-lg mx-auto cursor-pointer"
                            @click="modalOpen = true; modalImg = '{{ asset('/public/images/mapping-listrik-lampu.png') }}'">
                    </div>
                </div>
            </div>

            <!-- Modal Preview Gambar -->
            <div x-show="modalOpen"
                x-effect="if(modalOpen){ setTimeout(()=>{ if(window.lucide) lucide.createIcons(); }, 10); }"
                @click.self="modalOpen = false" x-transition:enter="transition ease-out duration-80"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-80" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 z-[200] flex items-center justify-center bg-black/60 backdrop-blur-sm"
                style="display: none;">
                <div
                    class="relative bg-black rounded-2xl p-2 shadow-2xl max-w-3xl w-full mx-4 flex flex-col items-center">
                    <button @click="modalOpen = false"
                        class="absolute top-3 right-3 bg-gray-200 hover:bg-gray-400 text-gray-800 rounded-full p-2 transition">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>
                    <img :src="modalImg" alt="Preview Gambar Surat"
                        class="rounded-xl max-h-[80vh] object-contain w-full" />
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

    <script>
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

        });
    </script>

</body>

</html>
