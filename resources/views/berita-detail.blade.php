<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->nama_berita }} | Desa Timpik</title>

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

<body class="bg-gray-50">

    @include('layouts.partials.header')

    <main>
        <div class="container mx-auto px-6 lg:px-16 py-12 font-['Poppins']">

            <!-- Breadcrumbs -->
            <div class="mb-6 text-[15px] font-semibold text-[#0C3B2E]">
                <a href="{{ route('welcome') }}" class="hover:text-[#DBAA7C]">Home</a>
                <span class="mx-2">></span>
                <a href="{{ route('berita.index') }}" class="hover:text-[#DBAA7C]">Berita Desa</a>
                <span class="mx-2">></span>
                <span class="text-[#DBAA7C]">{{ Str::limit($berita->nama_berita, 30) }}</span>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-12">

                <!-- Main Content -->
                <section class="lg:col-span-2">
                    <article
                        class="relative bg-gradient-to-br from-[#F9F7F6] via-white to-[#E8F7F2]/60 border border-[#C7F3E7]/50 rounded-3xl shadow-2xl p-0 md:p-0 overflow-hidden mb-8 lg:mb-0">
                        <!-- Featured Image with overlay -->
                        <div class="relative">
                            <img src="{{ asset('storage/' . $berita->foto) }}" alt="{{ $berita->nama_berita }}"
                                class="w-full aspect-video object-cover rounded-t-3xl md:rounded-t-3xl shadow"
                                onerror="this.src='https://placehold.co/600x400?text=Foto+Tidak+Tersedia';">

                            <span
                                class="absolute top-4 left-4 px-4 py-1 bg-[#DBAA7C]/90 text-white rounded-full font-bold text-xs tracking-wider shadow-sm backdrop-blur-sm">
                                BERITA DESA
                            </span>
                            <span
                                class="absolute bottom-4 left-4 px-3 py-1 bg-[#C7F3E7]/80 text-[#12715D] font-semibold rounded-full text-xs shadow">
                                {{ \Carbon\Carbon::parse($berita->tanggal)->isoFormat('D MMM Y') }}
                            </span>
                            <span
                                class="absolute bottom-4 right-4 flex items-center gap-1 bg-white/80 rounded-full px-3 py-1 shadow text-xs font-semibold text-[#0C3B2E]">
                                <i data-lucide="eye" class="w-4 h-4 mr-1.5"></i>
                                {{ $berita->views ?? 0 }} views
                            </span>
                        </div>
                        <!-- Article Content -->
                        <div class="p-7 md:p-10">
                            <h1
                                class="text-3xl lg:text-4xl font-extrabold mb-2 text-[#0C3B2E] tracking-tight leading-tight drop-shadow-sm">
                                {{ $berita->nama_berita }}
                            </h1>
                            <div class="flex flex-wrap gap-2 items-center mb-8 text-sm text-[#12715D]/80">
                                <span
                                    class="flex items-center gap-1.5 bg-[#C7F3E7]/70 px-3 py-1 rounded-full font-medium">
                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                    {{ \Carbon\Carbon::parse($berita->tanggal)->isoFormat('dddd, D MMMM Y') }}
                                </span>
                                <span
                                    class="flex items-center gap-1 bg-[#F9DCC1]/70 px-3 py-1 rounded-full font-medium">
                                    <i data-lucide="map-pin" class="w-4 h-4"></i>
                                    Semarang
                                </span>
                            </div>
                            <div class="prose max-w-none text-[#253C36] leading-relaxed mb-6 break-words text-justify">
                                {!! $berita->deskripsi !!}
                            </div>
                            <hr class="my-8 border-[#C7F3E7]/60">
                            <div class="flex gap-4">
                                <a href="{{ route('berita.index') }}"
                                    class="inline-block bg-[#E8C187]/90 text-[#0C3B2E] px-6 py-2 rounded-xl shadow font-bold hover:bg-[#0C3B2E] hover:text-white transition-all duration-200">
                                    Kembali ke Berita Desa
                                </a>
                            </div>
                        </div>
                    </article>
                </section>

                <!-- Sidebar: Artikel Terbaru -->
                <aside class="lg:col-span-1 mt-12 lg:mt-0">
                    <div class="sticky top-24">
                        <div class="bg-white/90 border border-[#C7F3E7]/40 rounded-2xl shadow-lg px-5 py-6">
                            <h3 class="text-xl font-bold text-[#0C3B2E] mb-4 pb-2 border-b border-[#E8C187]/40">Artikel
                                Terbaru</h3>
                            <div class="flex flex-col gap-5">
                                @foreach ($latestBeritas as $item)
                                    @if ($item->id === $berita->id)
                                        @continue
                                    @endif
                                    <a href="{{ route('berita.detail', $item) }}"
                                        class="flex items-center gap-4 group p-2 rounded-xl hover:bg-[#C7F3E7]/20 transition-all duration-200 border border-transparent hover:border-[#C7F3E7]/60 shadow-sm">
                                        <div class="relative">
                                            <img src="{{ asset('storage/' . $item->foto) }}"
                                                alt="{{ $item->nama_berita }}"
                                                class="w-16 h-16 rounded-lg object-cover bg-[#e7e7e7] shadow group-hover:scale-105 transition-transform duration-200"
                                                onerror="this.src='https://placehold.co/100x100?text=No+Image';">
                                            <span
                                                class="absolute -top-2 -right-2 bg-[#E8C187]/90 text-white font-semibold text-[10px] px-2 py-0.5 rounded-full shadow">
                                                {{ $item->jenis ?? 'Berita' }}
                                            </span>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4 class="font-semibold text-[#0C3B2E] group-hover:text-[#12715D] text-base line-clamp-2 mb-0.5"
                                                title="{{ $item->nama_berita }}">
                                                {{ $item->nama_berita }}
                                            </h4>
                                            <div
                                                class="flex items-center gap-2 text-xs text-[#12715D]/80 font-semibold">
                                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                                {{ \Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMM Y') }}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </aside>

            </div>
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
