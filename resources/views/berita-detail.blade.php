<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - Desa Timpik</title>

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
        <div class="container mx-auto px-6 lg:px-16 py-12">

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
                <div class="lg:col-span-2">
                    <div class="bg-white p-6 md:p-8 rounded-lg shadow-md">
                        <h1 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-4">{{ $berita->nama_berita }}</h1>

                        <!-- Meta Info -->
                        <div class="flex flex-wrap items-center justify-between text-sm text-gray-500 mb-6">
                            <span class="flex items-center mb-2 md:mb-0">
                                <i data-lucide="calendar" class="w-4 h-4 mr-1.5"></i>
                                Semarang, {{ \Carbon\Carbon::parse($berita->tanggal)->isoFormat('D MMMM Y') }}
                            </span>

                            <div class="flex items-center space-x-4">
                                <span class="flex items-center"><i data-lucide="eye" class="w-4 h-4 mr-1.5"></i>Dilihat {{ $berita->views ?? 0 }} kali</span>
                            </div>
                        </div>

                        <!-- Featured Image -->
                        <img src="{{ asset('storage/' . $berita->foto) }}" alt="{{ $berita->nama_berita }}" class="w-full aspect-video object-cover rounded-lg mb-8 shadow">

                        <!-- Article Content -->
                        <div class="prose max-w-none text-gray-700 leading-relaxed">
                            {!! $berita->deskripsi !!}
                        </div>
                    </div>
                </div>

                <aside class="lg:col-span-1 mt-12 lg:mt-0">
                    <div class="sticky top-24">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-bold border-b pb-3 mb-4">Artikel Terbaru</h3>
                            <div class="space-y-4">
                                @foreach ($latestBeritas as $item)
                                    @if ($item->id === $berita->id)
                                        @continue
                                    @endif
                                    <a href="{{ route('berita.detail', $item) }}" class="flex items-center space-x-3 group">
                                        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama_berita }}" class="w-20 h-20 object-cover rounded-md flex-shrink-0">
                                        <div>
                                            <h4 class="font-semibold text-gray-800 group-hover:text-blue-600 transition-colors line-clamp-2" title="{{ $item->nama_berita }}">
                                                {{ $item->nama_berita }}
                                            </h4>
                                            <div class="text-xs font-semibold text-blue-600 mb-2 uppercase">
                                                {{ $item->jenis }}
                                            </div>
                                            <p class="text-xs text-gray-500 mt-1">
                                                {{ \Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMM Y') }}
                                            </p>
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
        });
    </script>

</body>

</html>
