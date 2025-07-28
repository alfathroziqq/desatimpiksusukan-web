<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen | Desa Timpik</title>

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
                        Dokumen
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
                                    <span class="ml-2 text-sm font-semibold text-white">Dokumen</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <div class="container mx-auto px-8 sm:px-12 lg:px-40 py-12">
            <!-- PPID -->
            <section id="ppid-intro" style="font-family: 'Poppins', sans-serif;">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

                    <div class="reveal-on-scroll">
                        <div
                            class="bg-gradient-to-br from-[#E8C187]/70 via-[#C7F3E7]/50 to-[#0C3B2E]/10 shadow-xl rounded-3xl p-8 md:p-12 flex flex-col justify-center items-center md:items-start relative overflow-hidden">
                            <div class="absolute -top-10 -right-10 w-32 h-32 bg-[#E8C187]/20 rounded-full blur-2xl">
                            </div>
                            <h2 class="text-3xl md:text-[45px] font-extrabold text-[#0C3B2E] mb-2 drop-shadow-lg">
                                PPID <span
                                    class="ml-2 px-3 py-1 rounded-xl bg-[#C7F3E7]/60 text-[#12715D] text-base font-bold align-middle">Inovasi!</span>
                            </h2>
                            <div class="w-16 h-1 bg-[#0C3B2E] mb-6 rounded-xl"></div>
                            <p class="text-[#0C3B2E] text-lg opacity-90">
                                <span class="bg-white/50 px-2 py-0.5 rounded-lg font-medium">
                                    Pejabat Pengelola Informasi dan Dokumentasi (PPID)
                                </span> adalah ujung tombak keterbukaan informasi publik: penyimpanan, pendokumentasian,
                                penyediaan, & layanan informasi <b>di era digital</b>.
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center reveal-on-scroll">
                        <div
                            class="group flex flex-col items-center p-6 bg-white/80 backdrop-blur-lg rounded-2xl shadow-xl border border-[#E8C187]/20 hover:scale-105 hover:shadow-2xl transition-all duration-300 relative overflow-hidden">
                            <div class="absolute -top-2 -right-3 w-10 h-10 bg-[#C7F3E7]/30 rounded-full blur"></div>
                            <div
                                class="flex items-center justify-center w-14 h-14 bg-[#C7F3E7]/70 rounded-full mb-4 group-hover:scale-110 transition">
                                <i data-lucide="folder-archive" class="w-8 h-8 text-[#0C3B2E]"></i>
                            </div>
                            <span class="font-bold text-[#0C3B2E]">Informasi Berkala</span>
                            <span class="mt-2 text-xs text-[#12715D]/70">Update rutin & terbuka</span>
                        </div>
                        <div
                            class="group flex flex-col items-center p-6 bg-white/80 backdrop-blur-lg rounded-2xl shadow-xl border border-[#E8C187]/20 hover:scale-105 hover:shadow-2xl transition-all duration-300 relative overflow-hidden">
                            <div class="absolute top-2 left-3 w-10 h-10 bg-[#F9DCC1]/30 rounded-full blur"></div>
                            <div
                                class="flex items-center justify-center w-14 h-14 bg-[#F9DCC1]/70 rounded-full mb-4 group-hover:scale-110 transition">
                                <i data-lucide="file-check-2" class="w-8 h-8 text-[#0C3B2E]"></i>
                            </div>
                            <span class="font-bold text-[#0C3B2E]">Informasi Serta Merta</span>
                            <span class="mt-2 text-xs text-[#E8C187]/70">Saat keadaan genting</span>
                        </div>
                        <div
                            class="group flex flex-col items-center p-6 bg-white/80 backdrop-blur-lg rounded-2xl shadow-xl border border-[#E8C187]/20 hover:scale-105 hover:shadow-2xl transition-all duration-300 relative overflow-hidden">
                            <div class="absolute -bottom-3 right-4 w-10 h-10 bg-[#12715D]/20 rounded-full blur"></div>
                            <div
                                class="flex items-center justify-center w-14 h-14 bg-[#12715D]/40 rounded-full mb-4 group-hover:scale-110 transition">
                                <i data-lucide="clock-4" class="w-8 h-8 text-[#0C3B2E]"></i>
                            </div>
                            <span class="font-bold text-[#0C3B2E]">Informasi Setiap Saat</span>
                            <span class="mt-2 text-xs text-[#0C3B2E]/60">Siap akses kapanpun</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Informasi Publik Terbaru -->
            <section id="informasi-publik" class="mt-16">
                <div class="pt-8 reveal-on-scroll text-center">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-[#0C3B2E] mb-2 tracking-wide drop-shadow-md"
                        style="font-family: 'Poppins', sans-serif">
                        <i data-lucide="megaphone" class="inline w-7 h-7 mr-1 align-text-bottom text-[#C2977D]"></i>
                        Informasi Publik Terbaru
                    </h2>
                    <div
                        class="w-24 md:w-40 h-1 mx-auto bg-gradient-to-r from-[#C7F3E7] via-[#0C3B2E] to-[#F9DCC1] rounded-lg mt-3 mb-5">
                    </div>
                </div>

                <!-- Daftar Dokumen -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-6 reveal-on-scroll"
                    style="font-family: 'Poppins', sans-serif;">
                    @forelse ($dokumens as $dokumen)
                        <div
                            class="relative bg-white/80 backdrop-blur-md rounded-3xl shadow-xl border border-[#C7F3E7]/60 hover:shadow-2xl transition-all duration-300 flex flex-col p-6 group overflow-hidden">
                            <div class="absolute -top-6 -left-8 w-24 h-24 bg-[#C7F3E7]/30 rounded-full blur-2xl"></div>
                            <span
                                class="absolute top-5 right-5 bg-[#F9DCC1]/80 text-[#C2977D] font-bold px-3 py-1 rounded-xl text-xs shadow-md">
                                {{ $dokumen->jenis_dokumen }}
                            </span>
                            <h3 class="font-bold text-lg md:text-xl mb-1 text-[#0C3B2E] line-clamp-2">
                                {{ $dokumen->judul }}</h3>
                            <div class="flex items-center text-xs text-[#12715D]/80 mb-2 gap-2">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                {{ \Carbon\Carbon::parse($dokumen->tanggal_input)->isoFormat('dddd, D MMMM Y') }}
                            </div>
                            <div class="flex items-center gap-2 my-2">
                                <span class="text-[10px] text-[#C2977D]">Download</span>
                                <div class="w-full h-1 bg-[#E8C187]/30 rounded">
                                    <div class="h-1 rounded bg-gradient-to-r from-[#C2977D] to-[#12715D]"
                                        style="width: {{ min(100, $dokumen->download_count * 8) }}%"></div>
                                </div>
                                <span class="text-[10px] text-[#12715D]">{{ $dokumen->download_count }}x</span>
                            </div>
                            <div class="flex flex-col gap-2 mt-auto">
                                <a href="{{ asset('storage/' . $dokumen->file_path) }}" target="_blank"
                                    class="bg-[#F9DCC1]/90 text-[#0C3B2E] font-semibold px-4 py-2 rounded-lg flex items-center justify-center space-x-2 hover:bg-orange-300 hover:scale-105 transition-all">
                                    <i data-lucide="eye" class="w-5 h-5"></i>
                                    <span>Lihat Berkas</span>
                                </a>
                                <a href="{{ route('dokumen.download', $dokumen->id) }}"
                                    class="bg-[#C7F3E7]/90 text-[#0C3B2E] font-semibold px-4 py-2 rounded-lg flex items-center justify-center space-x-2 hover:bg-green-300 hover:scale-105 transition-all">
                                    <i data-lucide="download-cloud" class="w-5 h-5"></i>
                                    <span>Unduh</span>
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center col-span-full text-[#0C3B2E] py-8">Belum ada dokumen yang tersedia.</p>
                    @endforelse
                </div>
            </section>

            <!-- Permohonan Informasi -->
            <section id="permohonan-info"
                class="mt-20 mb-6 text-center bg-gradient-to-tr from-[#F9DCC1]/50 via-white to-[#C7F3E7]/50 p-10 rounded-3xl reveal-on-scroll shadow-lg relative overflow-hidden"
                style="font-family: 'Poppins', sans-serif">
                <div class="absolute left-0 top-0 w-28 h-28 bg-[#C7F3E7]/30 rounded-full blur-2xl"></div>
                <div class="absolute right-0 bottom-0 w-32 h-32 bg-[#E8C187]/40 rounded-full blur-2xl"></div>
                <h2 class="text-2xl md:text-3xl font-extrabold text-[#0C3B2E] mb-3 drop-shadow">
                    <i data-lucide="help-circle" class="inline w-7 h-7 align-text-bottom text-[#12715D] mr-2"></i>
                    Ingin mengajukan permohonan informasi?
                </h2>
                <a href="{{ route('permohonan.create') }}"
                    class="inline-block bg-[#0C3B2E] text-white font-bold px-8 py-3 rounded-xl shadow hover:bg-[#12715D] hover:scale-105 transition-all duration-300 mt-4 text-lg">
                    Ajukan Permohonan Informasi
                </a>
            </section>
        </div>

    </main>

    <button id="scrollTopBtn"
        class="fixed bottom-6 right-6 z-[100] bg-gray-300/60 hover:bg-gray-400/80 text-white rounded-xl p-2 shadow-md hide transition backdrop-blur-sm"
        aria-label="Scroll to top">
        <i data-lucide="arrow-up" class="w-6 h-6 text-gray-700"></i>
    </button>

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
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        });
    </script>

</body>

</html>
