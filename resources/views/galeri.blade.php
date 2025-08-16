<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri | Desa Timpik</title>

    <link rel="icon" type="image/png" href="images/logo-timpik.png">

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

    <!-- AlpineJS -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Styling untuk filmstrip di lightbox */
        .filmstrip::-webkit-scrollbar {
            height: 8px;
        }

        .filmstrip::-webkit-scrollbar-track {
            background: #444;
            border-radius: 4px;
        }

        .filmstrip::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        .filmstrip::-webkit-scrollbar-thumb:hover {
            background: #bbb;
        }

        [x-cloak] {
            display: none !important;
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

<body class="text-[#0C3B2E]" style="font-family: 'Poppins', sans-serif;">

    @include('layouts.partials.header')

    @php
        $galleryItems = \App\Models\Galeri::latest()->paginate(12);
    @endphp

    <main x-data="{
        showModal: false,
        currentIndex: 0,
        // PERBAIKAN: ->values() dipanggil sebelum json_encode()
        images: {{ json_encode($galleryItems->map(fn($item) => ['src' => asset('storage/' . $item->gambar), 'title' => $item->judul])->values()) }},
        openModal(index) {
            this.currentIndex = index;
            this.showModal = true;
        },
        closeModal() {
            this.showModal = false;
        },
        nextImage() {
            this.currentIndex = (this.currentIndex + 1) % this.images.length;
            this.scrollToActiveThumbnail();
        },
        prevImage() {
            this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
            this.scrollToActiveThumbnail();
        },
        scrollToActiveThumbnail() {
            this.$nextTick(() => {
                const activeThumb = this.$refs.filmstrip.querySelector('.active-thumbnail');
                if (activeThumb) {
                    activeThumb.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                }
            });
        }
    }">

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
                        Galeri Desa
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
                                    <span class="ml-2 text-sm font-semibold text-white">Galeri</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <div class="container mx-auto px-8 sm:px-12 lg:px-40 py-14">

            <!-- Title Section -->
            <div class="flex flex-col items-center mb-6 md:mb-14">
                <span
                    class="uppercase tracking-widest text-[13px] font-semibold text-[#12715D] bg-[#C7F3E7]/60 rounded-full px-4 py-1 mb-3 shadow-sm">Galeri
                    Desa</span>
                <h1
                    class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-[#0C3B2E] via-[#12715D] to-[#E8C187] drop-shadow-lg text-center mb-3">
                    Temukan Keindahan Desa</h1>
                <p class="text-lg text-gray-500 text-center max-w-2xl">Kumpulan momen, pemandangan, dan aktivitas seru
                    di Desa Timpik. Klik gambar untuk melihat lebih besar!</p>
            </div>

            <!-- Photo Grid -->
            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @forelse ($galleryItems as $index => $item)
                    <div @click="openModal({{ $index }})"
                        class="gallery-card relative rounded-2xl shadow-2xl border border-[#C7F3E7]/60 overflow-hidden cursor-pointer bg-gradient-to-tl from-white via-[#F9DCC1]/20 to-[#C7F3E7]/10 transition-all duration-700 opacity-0 translate-y-8 group hover:shadow-[0_8px_40px_-8px_#0C3B2E33] hover:scale-[1.03]">

                        <div
                            class="absolute inset-0 z-10 bg-gradient-to-b from-[#0C3B2E]/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <i data-lucide="search" class="text-white text-5xl drop-shadow-xl"></i>
                        </div>
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                            onerror="this.onerror=null;this.src='https://placehold.co/400x400/E0E0E0/BDBDBD?text=Gambar';"
                            class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-500">

                        <div
                            class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-[#0C3B2E]/70 via-transparent to-transparent px-5 pt-10 pb-4">
                            <h3 class="font-semibold text-base text-white drop-shadow group-hover:text-[#C7F3E7] truncate"
                                title="{{ $item->judul }}">
                                {{ $item->judul }}
                            </h3>
                        </div>
                        <span
                            class="absolute top-4 right-4 w-3 h-3 rounded-full bg-[#E8C187] shadow-lg border-2 border-white"></span>
                    </div>
                @empty
                    <p class="col-span-full text-gray-500 text-center py-16">Belum ada gambar dalam galeri.</p>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-14">
                {{ $galleryItems->links() }}
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div x-show="showModal" x-transition @keydown.escape.window="closeModal()"
            @keydown.arrow-right.window="nextImage()" @keydown.arrow-left.window="prevImage()"
            class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-black bg-opacity-90" x-cloak>

            <!-- Top Bar -->
            <div class="w-full flex justify-between items-center p-4 text-white absolute top-0 left-0 z-10">
                <span x-text="images[currentIndex]?.title" class="text-lg font-semibold"></span>
                <button @click="closeModal()" class="text-white hover:opacity-75 text-3xl">&times;</button>
            </div>

            <!-- Main Image and Navigation -->
            <div class="flex items-center justify-center h-full w-full">
                <button @click.stop="prevImage()"
                    class="absolute left-4 p-2 text-white bg-black/30 rounded-full hover:bg-black/50 transition-colors z-10">
                    <i data-lucide="chevron-left" class="w-8 h-8"></i>
                </button>

                <div class="relative flex flex-col items-center justify-center text-center">
                    <img :src="images[currentIndex]?.src"
                        class="object-contain max-h-[70vh] max-w-[90vw] shadow-lg rounded-md">
                    <div class="mt-4">
                        <p x-text="`${currentIndex + 1} / ${images.length}`" class="text-white/70 font-mono text-sm">
                        </p>
                    </div>
                </div>

                <button @click.stop="nextImage()"
                    class="absolute right-4 p-2 text-white bg-black/30 rounded-full hover:bg-black/50 transition-colors z-10">
                    <i data-lucide="chevron-right" class="w-8 h-8"></i>
                </button>
            </div>

            <!-- Filmstrip Thumbnails -->
            <div class="absolute bottom-0 left-0 w-full p-4 overflow-hidden">
                <div x-ref="filmstrip" class="flex justify-center space-x-2 overflow-x-auto filmstrip pb-2">
                    <template x-for="(image, index) in images" :key="index">
                        <img @click="currentIndex = index" :src="image.src"
                            class="w-20 h-14 object-cover rounded-md cursor-pointer transition-opacity"
                            :class="{
                                'border-2 border-white opacity-100': currentIndex ===
                                    index,
                                'opacity-50 hover:opacity-100': currentIndex !==
                                    index,
                                'active-thumbnail': currentIndex === index
                            }">
                    </template>
                </div>
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
            const galleryCards = document.querySelectorAll('.gallery-card');
            const observer = new IntersectionObserver(entries => {
                entries.forEach((entry, i) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add('opacity-100', 'translate-y-0');
                            entry.target.classList.remove('opacity-0', 'translate-y-8');
                        }, i * 100);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15
            });

            galleryCards.forEach(card => observer.observe(card));
        });

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
