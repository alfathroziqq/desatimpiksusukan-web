<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah | Desa Timpik</title>

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
    </style>
</head>

<body class="bg-gray-50">

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
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-[#0C3B2E] mt-20"
                        style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Tata Kelola
                    </h1>
                    <p class="text-4xl md:text-5xl lg:text-7xl text-white italic"
                        style="font-family: 'Playfair Display', serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Desa <span class="text-[#E8C187]">Timpik</span>
                    </p>
                    <nav class="mt-4 flex justify-center lg:justify-start" aria-label="Breadcrumb">
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
                                    <span class="ml-2 text-sm font-medium text-gray-300">Profil Desa</span>
                                </div>
                            </li>

                            <li>
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="ml-2 text-sm font-semibold text-white">Sejarah Desa</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Konten Sejarah Baru -->
        <section class="py-14 overflow-x-clip">
            <div class="container mx-auto px-8 sm:px-12 lg:px-45">
                <div class="mb-12 reveal-on-scroll">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-center lg:text-left bg-gradient-to-r from-[#125D4E] via-[#619C6A] to-[#E8C187] bg-clip-text text-transparent inline-block mb-2"
                        style="font-family: 'Poppins', sans-serif; line-height: 1.1; padding-bottom: 2px;">
                        Sejarah Desa Timpik
                    </h2>
                    <div class="h-1 w-32 bg-gradient-to-r from-[#12715D] to-[#E8C187] rounded-full mx-auto lg:mx-0">
                    </div>
                </div>

                <div class="flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-20 reveal-on-scroll">
                    <!-- Konten Text Sejarah -->
                    <div class="w-full lg:w-3/5">
                        <div
                            class="relative bg-white/90 border border-[#E8C187]/50 rounded-2xl shadow-xl p-8 md:p-10 prose max-w-none text-[#155145] leading-relaxed">
                            <div
                                class="absolute -left-4 top-10 w-1.5 h-28 bg-gradient-to-b from-[#12715D] to-[#E8C187] rounded-full hidden lg:block">
                            </div>
                            <blockquote
                                class="border-l-4 border-[#E8C187] pl-4 italic text-[#C2977D] font-semibold mb-6">
                                "Menjadi desa yang memadukan sejarah, budaya, dan inovasi modern pertanian."
                            </blockquote>
                            <p>
                                <b>Desa Timpik</b> yang terletak di Kecamatan Susukan, Kabupaten Semarang, Jawa Tengah,
                                merupakan salah satu desa yang memiliki nilai sejarah dan budaya penting dalam peta
                                peradaban lokal di lereng timur Gunung Merbabu. Berdasarkan temuan arkeologis, wilayah
                                ini diketahui telah dihuni jauh sebelum masa Islam, yang dibuktikan dengan penemuan
                                artefak berupa yoni—sebuah simbol religius dalam kepercayaan Hindu—yang kini disimpan di
                                area Masjid Kauman Timpik. Artefak tersebut, yang sempat terkubur dan ditemukan kembali
                                oleh warga, menandakan bahwa pada masa lalu kemungkinan terdapat bangunan suci atau
                                pusat kegiatan keagamaan Hindu di wilayah ini. Seiring masuknya Islam dan berkembangnya
                                sistem pemerintahan desa, Timpik mengalami transformasi sosial budaya yang harmonis,
                                ditandai dengan berdirinya masjid-masjid tradisional dan berkembangnya komunitas
                                masyarakat agraris. Saat ini, Desa Timpik tidak hanya menjaga warisan sejarah dan budaya
                                leluhurnya, tetapi juga melakukan inovasi dengan membangun desa wisata edukatif berbasis
                                pertanian modern. Masyarakat mengembangkan berbagai wahana seperti taman bunga, area
                                outbound, dan program edukasi pertanian, menjadikan desa ini sebagai contoh perpaduan
                                antara pelestarian sejarah dan pengembangan ekonomi kreatif pedesaan.
                            </p>
                            <div class="mt-8 flex flex-wrap gap-3 text-sm text-[#0C3B2E]/70 font-semibold">
                                <span class="bg-[#C7F3E7]/60 px-3 py-1 rounded-full">#Sejarah</span>
                                <span class="bg-[#E8C187]/20 px-3 py-1 rounded-full">#Budaya</span>
                                <span class="bg-[#619C6A]/20 px-3 py-1 rounded-full">#DesaWisata</span>
                            </div>
                        </div>
                    </div>

                    <!-- Gambar Sejarah -->
                    <div class="w-full lg:w-2/5 flex justify-center items-center">
                        <div
                            class="relative group transition-all duration-500 hover:scale-105 shadow-2xl rounded-3xl overflow-hidden border-4 border-[#E8C187]/50 bg-white/50">
                            <img src="{{ asset('images/kantor-timpik.png') }}" alt="Kantor Desa Timpik"
                                class="w-[340px] md:w-[410px] h-auto object-cover block rounded-3xl drop-shadow-xl transition duration-500 group-hover:brightness-105">
                            <div
                                class="absolute inset-0 bg-gradient-to-tr from-[#E8C187]/20 to-transparent pointer-events-none rounded-3xl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Peta Lokasi -->
        <section class="py-14 bg-[#f7f6f3] overflow-x-clip" style="font-family: 'Poppins', sans-serif;">
            <div class="container mx-auto px-4 md:px-12 lg:px-28">
                <div class="mb-12 reveal-on-scroll">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-center lg:text-left bg-gradient-to-r from-[#125D4E] via-[#619C6A] to-[#E8C187] bg-clip-text text-transparent inline-block mb-2"
                        style="font-family: 'Poppins', sans-serif;">
                        Peta Lokasi
                    </h2>
                    <div class="h-1 w-28 bg-gradient-to-r from-[#12715D] to-[#E8C187] rounded-full mx-auto lg:mx-0">
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center reveal-on-scroll">

                    <div
                        class="bg-white/90 border border-[#E8C187]/40 rounded-2xl shadow-xl p-8 flex flex-col gap-6 text-[#155145]">
                        <div class="flex flex-wrap gap-6 mb-3">
                            <div class="flex-1 min-w-[120px]">
                                <div class="flex items-center gap-2 mb-1 text-[#C2977D]">
                                    <i data-lucide="compass" class="w-5 h-5"></i> <span class="font-bold">Timur:</span>
                                </div>
                                <div>Kabupaten Boyolali</div>
                            </div>
                            <div class="flex-1 min-w-[120px]">
                                <div class="flex items-center gap-2 mb-1 text-[#C2977D]">
                                    <i data-lucide="compass" class="w-5 h-5"></i> <span
                                        class="font-bold">Utara:</span>
                                </div>
                                <div>Kecamatan Suruh</div>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-6 mb-3">
                            <div class="flex-1 min-w-[120px]">
                                <div class="flex items-center gap-2 mb-1 text-[#C2977D]">
                                    <i data-lucide="compass" class="w-5 h-5"></i> <span
                                        class="font-bold">Barat:</span>
                                </div>
                                <div>Kec. Tengaran & Boyolali</div>
                            </div>
                            <div class="flex-1 min-w-[120px]">
                                <div class="flex items-center gap-2 mb-1 text-[#C2977D]">
                                    <i data-lucide="compass" class="w-5 h-5">></i> <span
                                        class="font-bold">Selatan:</span>
                                </div>
                                <div>Kecamatan Kaliwungu</div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-6 mb-2">
                            <div>
                                <span class="font-bold">Luas Desa:</span>
                                <div>7,29 km²</div>
                            </div>
                            <div>
                                <span class="font-bold">Penduduk:</span>
                                <div>5.554 jiwa</div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="rounded-2xl overflow-hidden shadow-xl h-[350px] sm:h-[400px] border border-[#12715D]/30">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.18114084348!2d110.5712737!3d-7.4338208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a71945f88f9e9%3A0x27718c090face7ff!2sTimpik%2C%20Kec.%20Susukan%2C%20Kabupaten%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1721380000000!5m2!1sid!2sid"
                            width="100%" height="100%" class="w-full h-full" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
        });
    </script>

</body>

</html>
