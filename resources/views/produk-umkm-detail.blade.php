<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $produk->nama_produk }} - Produk UMKM</title>

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

<body class="bg-gray-50">

    @include('layouts.partials.header')

    <main>
        <div class="container mx-auto px-6 lg:px-16 py-12" style="font-family: 'Poppins', sans-serif">

            <!-- Breadcrumbs -->
            <div class="mb-6 text-[15px] font-semibold text-[#0C3B2E]">
                <a href="{{ route('welcome') }}" class="hover:text-[#DBAA7C]">Home</a>
                <span class="mx-2">></span>
                <a href="{{ route('belanja.index') }}" class="hover:text-[#DBAA7C]">Produk UMKM</a>
                <span class="mx-2">></span>
                <span class="text-[#DBAA7C]">{{ Str::limit($produk->nama_produk, 30) }}</span>
            </div>

            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-lg border border-gray-200/80 reveal-on-scroll">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-start">
                    <!-- Gambar -->
                    <div class="max-w-[350px] max-h-[400px] rounded-xl overflow-hidden">
                        <img src="{{ asset('storage/' . $produk->foto) }}" alt="{{ $produk->nama_produk }}"
                            onerror="this.onerror=null;this.src='https://placehold.co/500x500?text=No+Image';"
                            class="w-full ma h-full object-cover">
                    </div>

                    <!-- Detail Produk -->
                    <div class="flex flex-col justify-start h-full space-y-3">
                        <h1 class="text-3xl md:text-4xl font-bold text-[#0C3B2E]">{{ $produk->nama_produk }}</h1>
                        <p class="text-xl md:text-2xl font-semibold text-[#DBAA7C]">
                            {{ $produk->format_harga ?? '-' }}
                        </p>
                        <p class="text-[#0C3B2E] leading-relaxed">
                            {!! nl2br(e($produk->deskripsi)) !!}
                        </p>

                        @if ($produk->nomor_wa)
                            <a href="https://wa.me/{{ $produk->nomor_wa }}" target="_blank"
                                class="inline-flex items-center justify-center px-6 py-2 bg-[#3C7167] text-white text-sm font-semibold rounded-full shadow-md hover:bg-[#2F5C54] transition-all duration-300">
                                <i data-lucide="send" class="w-4 h-4 mr-2"></i>
                                Hubungi Penjual
                            </a>
                        @endif

                    </div>
                </div>
            </div>

            <!-- Ulasan dan Komentar -->
            <div class="bg-white mt-10 p-6 md:p-8 rounded-2xl shadow-lg border border-gray-200/80 reveal-on-scroll text-[#0C3B2E]">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Ulasan dan Komentar</h2>

                @if (session('success'))
                    <div class="mb-6 px-4 py-3 rounded-lg bg-green-100 text-green-800 border border-green-300">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($produk->komentars->count())
                    <div class="space-y-6 mb-8">
                        @foreach ($produk->komentars as $komentar)
                            <div class="border border-gray-200 p-4 rounded-lg bg-gray-50">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-semibold text-gray-800">{{ $komentar->nama }}</h4>
                                    <span class="text-sm text-gray-500">
                                        {{ \Carbon\Carbon::parse($komentar->created_at)->isoFormat('D MMMM Y') }}
                                    </span>
                                </div>
                                <p class="text-gray-700 leading-relaxed">{{ $komentar->komentar }}</p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center text-gray-500 py-8">
                        <p>Belum ada ulasan untuk saat ini</p>
                    </div>
                @endif

                <div class="mt-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Tuliskan Komentar</h3>

                    @if ($errors->any())
                        <div class="mb-4 text-red-600">
                            <ul class="list-disc list-inside text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('belanja.komentar', $produk->id) }}" method="POST">
                        @csrf
                        <div class="grid gap-4">
                            <input type="text" name="nama" placeholder="Nama" required
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-green-600">
                            <input type="email" name="email" placeholder="Email" required
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-green-600">
                            <textarea name="komentar" rows="4" placeholder="Tambahkan komentar anda disini" required
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-green-600"></textarea>
                        </div>
                        <div class="mt-4 flex justify-end">
                            <button type="submit"
                                class="bg-[#C7F3E7] hover:bg-green-800 font-semibold text-[#0C3B2E] px-6 py-2 rounded-lg flex items-center gap-2">
                                <i data-lucide="send" class="w-4 h-4"></i>
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>

    @include('layouts.partials.footer')

    <script>
        lucide.createIcons();

        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in-up');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                root: null,
                threshold: 0.1
            });

            document.querySelectorAll('.reveal-on-scroll').forEach(target => observer.observe(target));
        });
    </script>

</body>

</html>
