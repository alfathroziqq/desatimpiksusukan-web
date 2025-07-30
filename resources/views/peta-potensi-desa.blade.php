<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Potensi Desa | Desa Timpik</title>

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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
            /* Pastikan peta berada di bawah navbar */
        }
    </style>
</head>

<body>

    @include('layouts.partials.header')

    <main>
        <!-- Hero Section -->
        <section class="relative h-80 md:h-120 w-full flex items-center justify-center text-white -mt-20">
            <div class="absolute inset-0 overflow-hidden">
                <img src="{{ asset('images/welcome-sawah.png') }}"
                    onerror="this.onerror=null;this.src='https://placehold.co/1920x1080/445566/FFFFFF?text=Latar+Belakang';"
                    alt="Pemandangan sawah Desa Timpik" class="w-full h-full object-cover object-center">
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

        <section class="py-12 bg-gradient-to-tr from-[#f7efe5] via-white to-[#e0f7f3] font-['Poppins',sans-serif]">
            <div class="container mx-auto px-8 sm:px-12 lg:px-40">

                <!-- Section Title -->
                <div class="text-center mb-12 reveal-on-scroll">
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
                            Timpik</span>.
                    </p>
                </div>

                <!-- Map Section -->
                <div id="map" class="w-full h-120 rounded-lg shadow-lg reveal-on-scroll"></div>
            </div>
        </section>

    </main>

    <button id="scrollTopBtn"
        class="fixed bottom-6 right-6 z-[100] bg-gray-300/60 hover:bg-gray-400/80 text-white rounded-xl p-2 shadow-md hide transition backdrop-blur-sm"
        aria-label="Scroll to top">
        <i data-lucide="arrow-up" class="w-6 h-6 text-gray-700"></i>
    </button>

    @include('layouts.partials.footer')

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        lucide.createIcons();

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

            // Marker NGASINAN
            var marker1 = L.marker([-7.428211466472232, 110.60259198934894]).addTo(map);
            marker1.bindTooltip("<b>NGASINAN</b>");
            marker1.bindPopup(`
                <div style="font-family: 'Poppins', sans-serif; color: #333; padding: 2px; border-radius: 8px; background-color: #f9f9f9; width: 180px;">
                    <h3 style="text-align: center; color: #0C3B2E; font-weight: bold; font-size: 15px; border-bottom: 2px solid #C7F3E7;">NGASINAN</h3>
                    <p style="font-size: 13px; color: #555; text-align: justify; margin-top: 5px;">Berikut adalah produk unggulan dari Ngasinan:</p>

                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 5px; margin-bottom: 4px;">
                        <!-- Angguk Product -->
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri1.png" alt="Reog" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Reog</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri2.png" alt="Ikat Sayur" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Ikat Sayur</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Keripik Gadung" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Keripik Gadung</p>
                        </div>
                    </div>
                </div>
            `);

            // Marker SUMBER
            var marker2 = L.marker([-7.432792464223754, 110.59703165384117]).addTo(map);
            marker2.bindTooltip("<b>SUMBER</b>");
            marker2.bindPopup(`
                <div style="font-family: 'Poppins', sans-serif; color: #333; padding: 10px; border-radius: 8px; background-color: #f9f9f9; width: 250px;">
                    <h3 style="text-align: center; color: #0C3B2E; font-weight: bold; font-size: 15px; border-bottom: 2px solid #C7F3E7;">SUMBER</h3>
                    <p style="font-size: 13px; color: #555; text-align: justify; margin-top: 5px;">Berikut adalah produk unggulan dari Sumber:</p>

                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 5px; margin-bottom: 4px;">
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri1.png" alt="Reog" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Angguk</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri2.png" alt="Ikat Sayur" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Makam Jogo Satru</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Mata Air Kali Sirah" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Mata Air Kali Sirah</p>
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 5px;">
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Keripik Pisang & Singkong" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Keripik Pisang & Singkong</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Makam Wali Hidayatullah" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Makam Wali Hidayatullah</p>
                        </div>
                    </div>
                </div>
            `);

            // Marker GENENG
            var marker3 = L.marker([-7.431056748624151, 110.5886731170721]).addTo(map);
            marker3.bindTooltip("<b>GENENG</b>");

            // Marker KALIBAON
            var marker4 = L.marker([-7.429872194661102, 110.58485725983539]).addTo(map);
            marker4.bindTooltip("<b>KALIBAON</b>");
            marker4.bindPopup(`
                <div style="font-family: 'Poppins', sans-serif; color: #333; padding: 2px; border-radius: 8px; background-color: #f9f9f9; width: 180px;">
                    <h3 style="text-align: center; color: #0C3B2E; font-size: 15px; font-weight: bold; border-bottom: 2px solid #C7F3E7;">KALIBAON</h3>
                    <p style="font-size: 13px; color: #555; text-align: justify; margin-top: 5px;">Berikut adalah produk unggulan dari Kalibaon:</p>

                    <div style="display: flex; align-items: center; margin-bottom: 2px;">
                        <img src="images/galeri1.png" alt="Jamu" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1); margin-right: 10px;">
                        <p style="font-size: 10px; font-weight: bold; color: #0C3B2E;">Jamu</p>
                    </div>
                </div>
            `);

            // Marker KARANGSALAM
            var marker5 = L.marker([-7.43137710320201, 110.5807410148536]).addTo(map);
            marker5.bindTooltip("<b>KARANGSALAM</b>");
            marker5.bindPopup(`
                <div style="font-family: 'Poppins', sans-serif; color: #333; padding: 2px; border-radius: 8px; background-color: #f9f9f9; width: 180px;">
                    <h3 style="text-align: center; color: #0C3B2E; font-weight: bold; font-size: 15px; border-bottom: 2px solid #C7F3E7;">KARANGSALAM</h3>
                    <p style="font-size: 13px; color: #555; text-align: justify; margin-top: 5px;">Berikut adalah produk unggulan dari Karangsalam:</p>

                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 5px;">
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Sedang Sirah Kajar" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Sedang Sirah Kajar</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Gula Jawa" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Gula Jawa</p>
                        </div>
                    </div>
                </div>
            `);

            // Marker GEDANGAN
            var marker6 = L.marker([-7.433083228526796, 110.58243356443485]).addTo(map);
            marker6.bindTooltip("<b>GEDANGAN</b>");
            marker6.bindPopup(`
                <div style="font-family: 'Poppins', sans-serif; color: #333; padding: 2px; border-radius: 8px; background-color: #f9f9f9; width: 180px;">
                    <h3 style="text-align: center; color: #0C3B2E; font-weight: bold; font-size: 15px; border-bottom: 2px solid #C7F3E7;">Gedangan</h3>
                    <p style="font-size: 13px; color: #555; text-align: justify; margin-top: 5px;">Berikut adalah produk unggulan dari Gedangan:</p>

                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 5px;">
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Tempe" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Tempe</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Reog" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Reog</p>
                        </div>
                    </div>
                </div>
            `);

            // Marker TIMPIK
            var marker7 = L.marker([-7.4370344645639515, 110.59358328659471]).addTo(map);
            marker7.bindTooltip("<b>TIMPIK</b>");
            marker7.bindPopup(`
                <div style="font-family: 'Poppins', sans-serif; color: #333; padding: 10px; border-radius: 8px; background-color: #f9f9f9; width: 250px;">
                    <h3 style="text-align: center; color: #0C3B2E; font-weight: bold; font-size: 15px; border-bottom: 2px solid #C7F3E7;">TIMPIK</h3>
                    <p style="font-size: 13px; color: #555; text-align: justify; margin-top: 5px;">Berikut adalah produk unggulan dari Timpik:</p>

                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 5px; margin-bottom: 4px;">
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri1.png" alt="Karawitan" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Karawitan</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri2.png" alt="Mata Air Tirip" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Mata Air Tirip</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Konveksi Pakaian" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Konveksi Pakaian</p>
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 5px;">
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Makam Mukdara" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Makam Mukdara</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Rebana" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Rebana</p>
                        </div>
                    </div>
                </div>
            `);

            // Marker KAUMAN
            var marker8 = L.marker([-7.4357176481319, 110.58698689738823]).addTo(map);
            marker8.bindTooltip("<b>KAUMAN</b>");
            marker8.bindPopup(`
                <div style="font-family: 'Poppins', sans-serif; color: #333; padding: 2px; border-radius: 8px; background-color: #f9f9f9; width: 180px;">
                    <h3 style="text-align: center; color: #0C3B2E; font-weight: bold; font-size: 15px; border-bottom: 2px solid #C7F3E7;">KAUMAN</h3>
                    <p style="font-size: 13px; color: #555; text-align: justify; margin-top: 5px;">Berikut adalah produk unggulan dari Kauman:</p>

                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 5px;">
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Bakso" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Bakso</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Masjid & Yoni Desa Kauman" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Masjid & Yoni Desa Kauman</p>
                        </div>
                    </div>
                </div>
            `);

            // Marker DURENAN
            var marker9 = L.marker([-7.435320926029986, 110.59163820064036]).addTo(map);
            marker9.bindTooltip("<b>DURENAN</b>");
            marker9.bindPopup(`
                <div style="font-family: 'Poppins', sans-serif; color: #333; padding: 2px; border-radius: 8px; background-color: #f9f9f9; width: 180px;">
                    <h3 style="text-align: center; color: #0C3B2E; font-weight: bold; font-size: 15px; border-bottom: 2px solid #C7F3E7;">DURENAN</h3>
                    <p style="font-size: 13px; color: #555; text-align: justify; margin-top: 5px;">Berikut adalah produk unggulan dari Durenan:</p>

                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 5px;">
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Telur Asin" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Telur Asin</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Makam" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Makam</p>
                        </div>
                    </div>
                </div>
            `);

            // Marker BOGO
            var marker10 = L.marker([-7.435367545305193, 110.59918556817328]).addTo(map);
            marker10.bindTooltip("<b>BOGO</b>");
            marker10.bindPopup(`
                <div style="font-family: 'Poppins', sans-serif; color: #333; padding: 10px; border-radius: 8px; background-color: #f9f9f9; width: 250px;">
                    <h3 style="text-align: center; color: #0C3B2E; font-weight: bold; font-size: 15px; border-bottom: 2px solid #C7F3E7;">BOGO</h3>
                    <p style="font-size: 13px; color: #555; text-align: justify; margin-top: 5px;">Berikut adalah produk unggulan dari Bogo:</p>

                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 5px; margin-bottom: 4px;">
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri1.png" alt="Kue Cucur" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Kue Cucur</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri2.png" alt="Musik Bambu" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Musik Bambu</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Karawitan" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Karawitan</p>
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 5px;">
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Karawitan" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Karawitan</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Reog" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Reog</p>
                        </div>
                    </div>
                </div>
            `);

            // Marker JETAK
            var marker11 = L.marker([-7.439319458210223, 110.6073120758248]).addTo(map);
            marker11.bindTooltip("<b>JETAK</b>");
            marker11.bindPopup(`
                <div style="font-family: 'Poppins', sans-serif; color: #333; padding: 2px; border-radius: 8px; background-color: #f9f9f9; width: 180px;">
                    <h3 style="text-align: center; color: #0C3B2E; font-size: 15px; font-weight: bold; border-bottom: 2px solid #C7F3E7;">JETAK</h3>
                    <p style="font-size: 13px; color: #555; text-align: justify; margin-top: 5px;">Berikut adalah produk unggulan dari Jetak:</p>

                    <div style="display: flex; align-items: center; margin-bottom: 2px;">
                        <img src="images/galeri1.png" alt="Jamu" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1); margin-right: 10px;">
                        <p style="font-size: 10px; font-weight: bold; color: #0C3B2E;">Jamu</p>
                    </div>
                </div>
            `);

            // Marker LEMPUYANGAN
            var marker12 = L.marker([-7.440092536813997, 110.60399256964575]).addTo(map);
            marker12.bindTooltip("<b>LEMPUYANGAN</b>");
            marker12.bindPopup(`
                <div style="font-family: 'Poppins', sans-serif; color: #333; padding: 2px; border-radius: 8px; background-color: #f9f9f9; width: 180px;">
                    <h3 style="text-align: center; color: #0C3B2E; font-size: 15px; font-weight: bold; border-bottom: 2px solid #C7F3E7;">LEMPUYANGAN</h3>
                    <p style="font-size: 13px; color: #555; text-align: justify; margin-top: 5px;">Berikut adalah produk unggulan dari Lempuyangan:</p>

                    <div style="display: flex; align-items: center; margin-bottom: 2px;">
                        <img src="images/galeri1.png" alt="Masjid Wali Kutub" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1); margin-right: 10px;">
                        <p style="font-size: 10px; font-weight: bold; color: #0C3B2E;">Masjid Wali Kutub</p>
                    </div>
                </div>
            `);

            // Marker CENGKLIK
            var marker13 = L.marker([-7.4419274480880775, 110.60671017208598]).addTo(map);
            marker13.bindTooltip("<b>CENGKLIK</b>");
            marker13.bindPopup(`
                <div style="font-family: 'Poppins', sans-serif; color: #333; padding: 2px; border-radius: 8px; background-color: #f9f9f9; width: 180px;">
                    <h3 style="text-align: center; color: #0C3B2E; font-weight: bold; font-size: 15px; border-bottom: 2px solid #C7F3E7;">CENGKLIK</h3>
                    <p style="font-size: 13px; color: #555; text-align: justify; margin-top: 5px;">Berikut adalah produk unggulan dari Cengklik:</p>

                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 5px;">
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Tahu Bakso" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Tahu Bakso</p>
                        </div>

                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <img src="images/galeri3.jpg" alt="Anyaman" style="width: 70px; height: auto; border-radius: 5px; box-shadow: 2px 2px 5px rgba(0,0,0,0.1);">
                            <p style="font-size: 10px; font-weight: bold; color: #0C3B2E; text-align: center;">Anyaman</p>
                        </div>
                    </div>
                </div>
            `);
        });
    </script>

</body>

</html>
