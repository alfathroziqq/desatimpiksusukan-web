<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita | Desa Timpik</title>

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
                        Berita
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
                                    <span class="ml-2 text-sm font-semibold text-white">Berita Desa</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Berita Desa Section -->
        <section class="py-12 font-['Poppins',sans-serif]">
            <div class="container mx-auto px-8 sm:px-12 lg:px-40">

                <!-- Section Title -->
                <div class="text-center mb-14 reveal-on-scroll">
                    <span
                        class="inline-block mb-3 bg-[#C7F3E7] text-[#12715D] px-4 py-1 rounded-full font-semibold text-xs tracking-wider shadow">
                        INFO & PERISTIWA
                    </span>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-[#0C3B2E] drop-shadow-lg mb-2">Berita Desa</h2>
                    <div
                        class="mx-auto w-24 md:w-48 h-1 bg-gradient-to-r from-[#C7F3E7] via-[#0C3B2E] to-[#E8C187] rounded-full mb-1">
                    </div>
                    <p class="mt-4 text-base md:text-lg text-gray-700 opacity-80">
                        Update informasi, agenda, dan cerita menarik seputar <span class="text-[#E8C187] font-bold">Desa
                            Timpik</span>.
                    </p>
                </div>

                <!-- Highlight Berita Terbaru -->
                @if ($beritas->count() > 0)
                    @php $highlight = $beritas->first(); @endphp
                    <div
                        class="reveal-on-scroll relative bg-white/90 backdrop-blur-lg shadow-2xl border border-[#C7F3E7]/40 rounded-3xl mb-16 flex flex-col md:flex-row overflow-hidden hover:shadow-3xl transition group">
                        <div
                            class="md:w-1/3 min-h-[270px] bg-gradient-to-tr from-[#C7F3E7]/40 via-[#E8C187]/30 to-[#f7efe5]/50 relative">
                            <img src="{{ asset('storage/' . $highlight->foto) }}" alt="{{ $highlight->nama_berita }}"
                                class="w-full h-full object-cover object-center rounded-t-3xl md:rounded-tr-none md:rounded-l-3xl transition group-hover:scale-105"
                                onerror="this.src='https://placehold.co/600x400?text=Foto+Tidak+Tersedia';">
                            <span
                                class="absolute left-4 top-4 px-4 py-1 bg-[#C7F3E7] text-[#12715D] rounded-full font-semibold text-xs shadow">
                                TERBARU
                            </span>
                        </div>
                        <div class="flex-1 p-7 flex flex-col">
                            <a href="{{ route('berita.detail', $highlight->id) }}">
                                <h3
                                    class="font-extrabold text-2xl md:text-3xl mb-2 text-[#0C3B2E] group-hover:text-[#12715D] transition-colors">
                                    {{ $highlight->nama_berita }}
                                </h3>
                            </a>
                            <p class="text-gray-700 text-sm md:text-base opacity-90 mb-5 line-clamp-4 text-justify">
                                {{ \Illuminate\Support\Str::limit(strip_tags($highlight->deskripsi), 230, '...') }}
                            </p>
                            <div class="flex justify-between items-center mt-auto text-xs md:text-sm text-[#12715D]">
                                <span>
                                    <i class="lucide lucide-calendar w-4 h-4 mr-1 align-middle"></i>
                                    {{ \Carbon\Carbon::parse($highlight->tanggal)->isoFormat('dddd, D MMMM Y') }}
                                </span>
                                <span>
                                    <i class="lucide lucide-eye w-4 h-4 mr-1 align-middle"></i>
                                    {{ $highlight->views ?? 0 }} views
                                </span>
                            </div>
                            <a href="{{ route('berita.detail', $highlight->id) }}"
                                class="inline-block mt-5 px-6 py-2 bg-[#0C3B2E] text-white rounded-xl shadow font-semibold hover:bg-[#12715D] hover:scale-101 transition-all">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                @endif

                <!-- Grid Berita Lainnya -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 reveal-on-scroll">
                    @php $skip = 0; @endphp
                    @foreach ($beritas as $i => $berita)
                        @if ($i == 0)
                            @php
                                $skip = 1;
                                continue;
                            @endphp
                        @endif
                        <div
                            class="bg-white rounded-2xl shadow-lg overflow-hidden group transform hover:-translate-y-2 transition-all duration-300 border border-gray-200/80">
                            <a href="{{ route('berita.detail', $berita->id) }}" class="block">
                                <img src="{{ asset('storage/' . $berita->foto) }}" alt="{{ $berita->nama_berita }}"
                                    class="w-full h-52 object-cover"
                                    onerror="this.src='https://placehold.co/600x400?text=Foto+Tidak+Tersedia';">
                                <div class="p-5">
                                    <h3
                                        class="font-bold text-lg text-[#0C3B2E] leading-snug mb-2 group-hover:text-green-600 transition-colors">
                                        {{ \Illuminate\Support\Str::limit($berita->nama_berita, 60) }}
                                    </h3>
                                    <p
                                        class="text-gray-600 text-sm leading-relaxed mb-4 break-words line-clamp-3 text-justify">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($berita->deskripsi), 180, '...') }}
                                    </p>
                                    <a href="{{ route('berita.detail', $berita->id) }}"
                                        class="inline-block border border-teal-600 px-4 py-1 rounded-full text-teal-600 hover:bg-teal-100 text-sm font-medium mb-4 transition duration-300">
                                        Selengkapnya
                                    </a>
                                    <div class="flex justify-between items-center text-xs text-gray-500">
                                        <span>Semarang,
                                            {{ \Carbon\Carbon::parse($berita->tanggal)->isoFormat('D MMMM Y') }}</span>
                                        <div class="flex items-center space-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                                                <circle cx="12" cy="12" r="3" />
                                            </svg>
                                            <span>{{ $berita->views ?? 0 }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    @if ($beritas->count() - $skip == 0)
                        <p class="text-center col-span-full text-gray-500 py-8">Belum ada berita yang tersedia.</p>
                    @endif
                </div>

            </div>
            <div class="mt-12">
                {{ $beritas->links('vendor.pagination.tailwind') }}
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
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        });
    </script>

</body>

</html>
