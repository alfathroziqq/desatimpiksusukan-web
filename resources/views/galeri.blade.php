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
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-[#0C3B2E] mt-20"
                        style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Galeri Desa
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
                                    <span class="ml-2 text-sm font-semibold text-white">Galeri</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <div class="container mx-auto px-6 lg:px-16 py-12">
            <!-- Title Section -->
            <div class="border-b-2 border-gray-200 pb-4 mb-8 text-center">
                <h1 class="text-4xl font-bold text-gray-800">Galeri Desa</h1>
                <p class="text-gray-500 mt-2">Menampilkan seluruh gambar yang ada di desa.</p>
            </div>

            <!-- Photo Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                @forelse ($galleryItems as $index => $item)
                    <div @click="openModal({{ $index }})"
                        class="group relative block w-full rounded-xl shadow-lg overflow-hidden cursor-pointer aspect-square">

                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                            onerror="this.onerror=null;this.src='https://placehold.co/400x400/E0E0E0/BDBDBD?text=Gambar';"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>

                        <div
                            class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-black/40">
                            <i data-lucide="search" class="text-white text-3xl"></i></i>
                        </div>

                        <div class="absolute bottom-0 left-0 w-full p-4 flex justify-end">
                            <h3 class="bg-white inline-block rounded-sm px-2 py-1 font-semibold text-sm truncate"
                                title="{{ $item->judul }}">
                                {{ $item->judul }}
                            </h3>
                        </div>
                    </div>
                @empty
                    <p class="col-span-full text-gray-500 text-center py-12">Belum ada gambar dalam galeri.</p>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-12">
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

    @include('layouts.partials.footer')

    <script>
        lucide.createIcons();
    </script>
</body>

</html>
