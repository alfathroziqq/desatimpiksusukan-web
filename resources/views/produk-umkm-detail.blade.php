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
        <div class="container mx-auto px-6 lg:px-16 py-12 font-['Poppins']">

            <!-- Breadcrumbs -->
            <div class="mb-6 text-sm md:text-base font-semibold text-[#0C3B2E]">
                <a href="{{ route('welcome') }}" class="hover:text-[#DBAA7C]">Home</a>
                <span class="mx-2">></span>
                <a href="{{ route('belanja.index') }}" class="hover:text-[#DBAA7C]">Produk UMKM</a>
                <span class="mx-2">></span>
                <span class="text-[#DBAA7C]">{{ Str::limit($produk->nama_produk, 30) }}</span>
            </div>

            <!-- Card Produk -->
            <div
                class="bg-gradient-to-br from-[#C7F3E7]/60 via-white to-[#F9DCC1]/40 p-0 md:p-1 rounded-3xl shadow-xl border border-[#C7F3E7]/50 reveal-on-scroll">
                <div
                    class="flex flex-col md:flex-row gap-7 md:gap-12 items-center md:items-start bg-white rounded-3xl p-6 md:p-10">

                    <!-- Gambar Produk -->
                    <div
                        class="w-full md:w-[330px] max-h-[370px] flex-shrink-0 rounded-2xl overflow-hidden border-2 border-[#C7F3E7]/80 relative shadow-md group">
                        <img src="{{ asset('storage/' . $produk->foto) }}"
                            onerror="this.onerror=null;this.src='https://placehold.co/500x400?text=No+Image';"
                            alt="{{ $produk->nama_produk }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span
                            class="absolute top-3 left-3 bg-[#F9DCC1] text-[#C2977D] font-bold px-4 py-1 rounded-full text-xs shadow-lg">UMKM</span>
                        @if ($produk->format_harga)
                            <span
                                class="absolute bottom-3 right-3 bg-[#C7F3E7]/95 text-[#12715D] font-semibold px-4 py-1 rounded-full text-lg shadow-lg">
                                {{ $produk->format_harga }}
                            </span>
                        @endif
                    </div>

                    <!-- Detail Produk -->
                    <div class="flex flex-col space-y-3 w-full max-w-2xl">
                        <h1 class="text-2xl md:text-3xl font-extrabold text-[#0C3B2E] mb-1 tracking-tight">
                            {{ $produk->nama_produk }}
                        </h1>
                        @if ($produk->format_harga)
                            <div class="flex items-center gap-2 mb-2">
                                <span
                                    class="bg-[#C7F3E7]/70 text-[#12715D] px-3 py-1 rounded-lg font-semibold text-xl shadow-sm">
                                    {{ $produk->format_harga }}
                                </span>
                            </div>
                        @endif

                        <div class="text-sm text-[#0C3B2E] leading-relaxed opacity-90 mb-3 whitespace-pre-line">
                            {!! nl2br(e($produk->deskripsi)) !!}
                        </div>

                        @if ($produk->nomor_wa)
                            <a href="https://wa.me/{{ $produk->nomor_wa }}" target="_blank"
                                class="inline-flex items-center w-max px-6 py-2 mt-3 rounded-full bg-gradient-to-tr from-[#3C7167] to-[#12715D] text-white font-bold text-base shadow-lg hover:bg-[#2F5C54] transition-all hover:scale-105 gap-2 ring-2 ring-[#C7F3E7]/40">
                                <i data-lucide="send" class="w-5 h-5"></i>
                                Chat Penjual
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Ulasan dan Komentar -->
            <div
                class="bg-white/95 mt-12 p-8 md:p-10 rounded-3xl shadow-xl border border-[#C7F3E7]/40 reveal-on-scroll text-[#0C3B2E]">
                <h2 class="text-2xl font-bold text-[#0C3B2E] mb-7 flex items-center gap-2">
                    <i data-lucide="message-square-text" class="w-7 h-7 text-[#12715D]"></i>
                    Ulasan & Komentar Pembeli
                </h2>

                @if (session('success'))
                    <div
                        class="mb-6 px-4 py-3 rounded-lg bg-green-100 text-green-800 border border-green-300 text-center font-semibold">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($produk->komentars->count())
                    <div class="space-y-7 mb-12">
                        @foreach ($produk->komentars as $komentar)
                            <div class="border border-[#C7F3E7]/70 p-5 rounded-xl bg-[#F9FDFB] flex gap-3 shadow-sm">
                                <div class="flex-shrink-0">
                                    <div
                                        class="bg-[#C7F3E7] text-[#12715D] w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg shadow">
                                        {{ strtoupper(substr($komentar->nama, 0, 1)) }}
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-center mb-1">
                                        <h4 class="font-semibold text-[#0C3B2E]">{{ $komentar->nama }}</h4>
                                        <span class="text-xs text-[#C2977D]">
                                            {{ \Carbon\Carbon::parse($komentar->created_at)->isoFormat('D MMMM Y') }}
                                        </span>
                                    </div>
                                    <p class="text-gray-700 leading-relaxed text-[15px]">{{ $komentar->komentar }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center text-gray-400 italic py-12">
                        <p>Belum ada ulasan untuk saat ini.</p>
                    </div>
                @endif

                <!-- Form Komentar -->
                <div class="mt-10">
                    <h3 class="text-xl font-bold text-[#12715D] mb-3 flex items-center gap-2">
                        <i data-lucide="pen-line" class="w-5 h-5"></i>
                        Tulis Komentar / Review Anda
                    </h3>
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
                        <div class="grid gap-4 md:grid-cols-2">
                            <input type="text" name="nama" placeholder="Nama Anda" required
                                class="w-full border border-[#C7F3E7] rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#12715D]/40 font-medium">
                            <input type="email" name="email" placeholder="Email" required
                                class="w-full border border-[#C7F3E7] rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#12715D]/40 font-medium">
                        </div>
                        <div class="mt-4">
                            <textarea name="komentar" rows="4" placeholder="Tambahkan komentar atau pengalaman anda di sini" required
                                class="w-full border border-[#C7F3E7] rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#12715D]/40"></textarea>
                        </div>
                        <div class="mt-5 flex justify-end">
                            <button type="submit"
                                class="bg-gradient-to-r from-[#C7F3E7] to-[#12715D]/80 hover:from-[#A8E2D3] hover:to-[#12715D] text-[#0C3B2E] hover:text-white font-bold px-7 py-2 rounded-full flex items-center gap-2 shadow-lg transition-all duration-200">
                                <i data-lucide="send" class="w-4 h-4"></i>
                                Kirim Komentar
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
