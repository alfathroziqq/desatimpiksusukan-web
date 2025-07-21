<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen - Desa Timpik</title>

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
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-[#0C3B2E] mt-20"
                        style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Dokumen
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
                                    <span class="ml-2 text-sm font-semibold text-white">Dokumen</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <!-- PPID Section -->
        <section id="ppid-intro" class="px-12 md:px-30 py-12 mb-16" style="font-family: 'Poppins', sans-serif">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="reveal-on-scroll">
                    <h2 class="text-3xl md:text-[45px] font-bold text-[#0C3B2E] text-center lg:text-left"
                        style="font-family: 'Poppins', sans-serif;">
                        PPID
                    </h2>
                    <div class="w-20 md:w-25 h-1 bg-[#0C3B2E] mx-auto lg:mx-0 mt-3 mb-5"></div>
                    <p class="text-[#0C3B2E]">
                        Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di
                        bidang penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi di badan
                        publik.
                    </p>
                </div>
                <div class="grid grid-cols-3 gap-4 text-center reveal-on-scroll">
                    <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-sm">
                        <i data-lucide="folder-archive" class="w-12 h-12 text-[#0C3B2E] mb-3"></i>
                        <span class="text-sm font-semibold text-[#0C3B2E]">Informasi Secara Berkala</span>
                    </div>
                    <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-sm">
                        <i data-lucide="file-check-2" class="w-12 h-12 text-[#0C3B2E] mb-3"></i>
                        <span class="text-sm font-semibold text-[#0C3B2E]">Informasi Serta Merta</span>
                    </div>
                    <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-sm">
                        <i data-lucide="clock-4" class="w-12 h-12 text-[#0C3B2E] mb-3"></i>
                        <span class="text-sm font-semibold text-[#0C3B2E]">Informasi Setiap Saat</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Informasi Publik Terbaru Section -->
        <section id="informasi-publik">
            <div class="pt-8 px-12 md:px-30 reveal-on-scroll">
                <h2 class="text-2xl md:text-3xl font-bold text-[#0C3B2E] mb-2"
                    style="font-family: 'Poppins', sans-serif">
                    Informasi Publik Terbaru
                </h2>
                <div class="w-24 md:w-40 h-1 bg-[#0C3B2E] mt-3 mb-5"></div>
            </div>

            <!-- Daftar Dokumen -->
            <div class="space-y-6 px-12 md:px-30 reveal-on-scroll" style="font-family: 'Poppins', sans-serif">
                @forelse ($dokumens as $dokumen)
                    <div
                        class="bg-white rounded-lg shadow-sm p-6 flex flex-col gap-4 md:flex-row md:justify-between md:items-center">
                        <!-- Kiri: Judul dan Info -->
                        <div>
                            <h3 class="font-bold text-lg md:text-xl mb-2 text-[#0C3B2E]">{{ $dokumen->judul }}</h3>
                            <div class="flex flex-col text-[#0C3B2E] text-sm space-y-2">
                                <span class="flex items-center">
                                    <i data-lucide="book" class="w-4 h-4 mr-1.5 text-[#0C3B2E]"></i>
                                    {{ $dokumen->jenis_dokumen }}
                                </span>
                                <span class="flex items-center">
                                    <i data-lucide="calendar" class="w-4 h-4 mr-1.5 text-[#0C3B2E]"></i>
                                    {{ \Carbon\Carbon::parse($dokumen->tanggal_input)->isoFormat('dddd, D MMMM Y') }}
                                </span>
                            </div>
                        </div>

                        <!-- Kanan: Tombol -->
                        <div class="flex flex-col gap-2 w-full md:w-auto">
                            <a href="{{ asset('storage/' . $dokumen->file_path) }}" target="_blank"
                                class="bg-[#F9DCC1] text-[#0C3B2E] font-semibold px-4 py-2 rounded-lg flex items-center justify-center md:justify-start space-x-2 hover:bg-orange-300 transition-colors">
                                <i data-lucide="eye" class="w-5 h-5"></i>
                                <span>Lihat Berkas</span>
                            </a>
                            <a href="{{ route('dokumen.download', $dokumen->id) }}"
                                class="bg-[#C7F3E7] text-[#0C3B2E] font-semibold px-4 py-2 rounded-lg flex items-center justify-center md:justify-start space-x-2 hover:bg-green-300 transition-colors">
                                <i data-lucide="download-cloud" class="w-5 h-5"></i>
                                <span>Unduh ({{ $dokumen->download_count }}x)</span>
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-center col-span-3 text-[#0C3B2E]">Belum ada dokumen yang tersedia.</p>
                @endforelse
            </div>
        </section>


        <!-- Ajukan Permohonan Informasi Section -->
        <section id="permohonan-info" class="mt-16 mb-6 text-center bg-gray-200/50 p-10 rounded-lg reveal-on-scroll"
            style="font-family: 'Poppins', sans-serif">
            <h2 class="text-2xl font-bold text-[#0C3B2E] mb-3">Ingin mengajukan permohonan informasi?</h2>
            <a href="{{ route('permohonan.create') }}"
                class="inline-block bg-white text-[##0C3B2E] font-semibold border border-green-700 px-8 py-3 rounded-lg hover:bg-[#0C3B2E] hover:text-white transition-colors duration-300 mt-4">
                Ajukan Permohonan Informasi
            </a>
        </section>

    </main>

    @include('layouts.partials.footer')

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
        });
    </script>

</body>

</html>
