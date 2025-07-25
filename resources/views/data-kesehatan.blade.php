<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jenis Kelamin | Desa Timpik</title>

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

    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

    @php
        use App\Models\DataKesehatan;

        $data = DataKesehatan::latest()->first() ?? (object)[
            'bayi_lahir' => 0,
            'bayi_meninggal' => 0,
            'ibu_melahirkan' => 0,
            'ibu_meninggal' => 0,
            'jumlah_balita' => 0,
            'gizi_baik' => 0,
            'gizi_kurang' => 0,
            'gizi_buruk' => 0,
            'imunisasi_polio' => 0,
            'imunisasi_dpt1' => 0,
            'imunisasi_cacar' => 0,
            'sumur_galian' => 0,
            'air_pah' => 0,
            'sumur_pompa' => 0,
            'hidran_umum' => 0,
            'air_sungai' => 0,
        ];
    @endphp

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
                    <h1 class="text-4xl md:text-5xl lg:text-5xl font-bold text-[#0C3B2E] mt-20"
                        style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Data Kesehatan
                    </h1>
                    <p class="text-4xl md:text-5xl lg:text-7xl text-white italic"
                        style="font-family: 'Playfair Display', serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Desa <span class="text-[#E8C187]">Timpik</span>
                    </p>
                    <nav class="mt-4 flex justify-center lg:justify-start" aria-label="Breadcrumb">
                        <ol role="list"
                            class="flex items-center space-x-2 bg-black/20 backdrop-blur-sm px-4 py-2 rounded-full">
                            <li>
                                <a href="{{ route('welcome') }}" class="text-gray-300 hover:text-white transition-colors">
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
                                    <span class="ml-2 text-sm font-medium text-gray-300">Data Desa</span>
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
                                    <span class="ml-2 text-sm font-semibold text-white">Data Kesehatan</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Data Kesehatan Section -->
        <section class="py-12 md:py-10 bg-white" style="font-family: 'Poppins', sans-serif;">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-5 reveal-on-scroll">
                    <h2 class="text-3xl sm:text-[45px] font-bold text-[#0C3B2E]">Grafik Kesehatan</h2>
                    <div class="mx-auto mt-4 w-24 md:w-48 h-1 bg-gradient-to-r from-[#C7F3E7] via-[#0C3B2E] to-[#E8C187] rounded-full mb-1">
                    </div>
                    <p class="text-md sm:text-[20px] text-[#0C3B2E] mt-5">Statistik dan fasilitas kesehatan untuk kesejahteraan masyarakat desa timpik.</p>
                </div>
            </div>
        </section>

        <div class="container mx-auto px-8 sm:px-10 lg:px-30 space-y-14 mt-[-20px] mb-20 text-[#0C3B2E] font-poppins">

            <section class="grid md:grid-cols-2 gap-10 max-w-6xl mx-auto reveal-on-scroll">
                <!-- Kematian Bayi -->
                <div class="bg-gradient-to-br from-[#e8fdf5] via-[#d1fae5] to-[#fdf6e8] rounded-3xl shadow-xl border border-[#C7F3E7]/70 p-8 group relative overflow-hidden transition hover:scale-101 hover:shadow-2xl">
                    <span class="absolute top-6 right-8 bg-[#3C7167] text-white px-3 py-1 rounded-full text-xs tracking-wider font-bold shadow">Statistik</span>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="bg-[#34bea2]/70 text-white rounded-full p-3 shadow-lg">
                            <i data-lucide="baby" class="w-7 h-7"></i>
                        </div>
                        <h3 class="text-2xl font-extrabold text-[#12715D] drop-shadow">Kematian Bayi</h3>
                    </div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex-1 p-4 bg-white rounded-xl border border-[#c7f3e7] shadow">
                            <div class="flex items-center gap-2">
                                <span class="inline-block bg-green-100 text-green-800 text-xs font-bold px-2 py-1 rounded">Lahir</span>
                                <span class="text-lg font-bold">{{ number_format($data->bayi_lahir) }}</span>
                            </div>
                            <div class="w-full bg-green-50 rounded h-2 mt-2">
                                <div class="bg-green-400 h-2 rounded" style="width: {{ $data->bayi_lahir ? min(100, $data->bayi_lahir * 2) : 5 }}%"></div>
                            </div>
                        </div>
                        <div class="flex-1 p-4 bg-white rounded-xl border border-[#fde2e2] shadow">
                            <div class="flex items-center gap-2">
                                <span class="inline-block bg-red-100 text-red-800 text-xs font-bold px-2 py-1 rounded">Meninggal</span>
                                <span class="text-lg font-bold">{{ number_format($data->bayi_meninggal) }}</span>
                            </div>
                            <div class="w-full bg-red-50 rounded h-2 mt-2">
                                <div class="bg-red-400 h-2 rounded" style="width: {{ $data->bayi_meninggal ? min(100, $data->bayi_meninggal * 5) : 3 }}%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="h-48">
                        <canvas id="bayiChart"></canvas>
                    </div>
                </div>

                <!-- Kematian Ibu -->
                <div class="bg-gradient-to-br from-[#FFF9D6]/80 via-[#f8e5c2]/70 to-[#fffbe7] rounded-3xl shadow-xl border border-[#E8C187]/60 p-8 group relative overflow-hidden transition hover:scale-101 hover:shadow-2xl">
                    <span class="absolute top-6 right-8 bg-[#E8C187] text-white px-3 py-1 rounded-full text-xs tracking-wider font-bold shadow">Statistik</span>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="bg-[#e8c187]/80 text-white rounded-full p-3 shadow-lg">
                            <i data-lucide="user" class="w-7 h-7"></i>
                        </div>
                        <h3 class="text-2xl font-extrabold text-[#B3872D] drop-shadow">Kematian Ibu</h3>
                    </div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex-1 p-4 bg-white rounded-xl border border-[#fbeedb] shadow">
                            <div class="flex items-center gap-2">
                                <span class="inline-block bg-yellow-100 text-yellow-800 text-xs font-bold px-2 py-1 rounded">Melahirkan</span>
                                <span class="text-lg font-bold">{{ number_format($data->ibu_melahirkan) }}</span>
                            </div>
                            <div class="w-full bg-yellow-50 rounded h-2 mt-2">
                                <div class="bg-yellow-400 h-2 rounded" style="width: {{ $data->ibu_melahirkan ? min(100, $data->ibu_melahirkan * 2) : 5 }}%"></div>
                            </div>
                        </div>
                        <div class="flex-1 p-4 bg-white rounded-xl border border-[#fde2e2] shadow">
                            <div class="flex items-center gap-2">
                                <span class="inline-block bg-red-100 text-red-800 text-xs font-bold px-2 py-1 rounded">Meninggal</span>
                                <span class="text-lg font-bold">{{ number_format($data->ibu_meninggal) }}</span>
                            </div>
                            <div class="w-full bg-red-50 rounded h-2 mt-2">
                                <div class="bg-red-400 h-2 rounded" style="width: {{ $data->ibu_meninggal ? min(100, $data->ibu_meninggal * 5) : 3 }}%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="h-48">
                        <canvas id="ibuChart"></canvas>
                    </div>
                </div>
            </section>

            <!-- Status Gizi -->
            <section class="reveal-on-scroll py-4">
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-[#0C3B2E]">Status Gizi Balita</h2>
                    <p class="mt-2 text-lg text-gray-600">Data kondisi gizi balita di Desa Timpik</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-7 max-w-5xl mx-auto">
                    <div class="bg-gradient-to-b from-[#c7f3e7]/80 to-[#ecfdf5] border border-green-100 rounded-xl p-7 flex flex-col items-center shadow hover:shadow-xl transition">
                        <i data-lucide="users" class="w-8 h-8 text-green-600 mb-3"></i>
                        <span class="font-semibold text-gray-500 mb-1">Jumlah Balita</span>
                        <span class="text-2xl md:text-3xl font-extrabold text-[#12715D]">{{ number_format($data->jumlah_balita) }}</span>
                    </div>
                    <div class="bg-gradient-to-b from-[#defaf0] to-[#d0f5df] border border-green-200 rounded-xl p-7 flex flex-col items-center shadow hover:shadow-xl transition">
                        <i data-lucide="smile" class="w-8 h-8 text-green-600 mb-3"></i>
                        <span class="font-semibold text-gray-500 mb-1">Gizi Baik</span>
                        <span class="text-2xl md:text-3xl font-extrabold text-green-700">{{ number_format($data->gizi_baik) }}</span>
                    </div>
                    <div class="bg-gradient-to-b from-[#fef9c3] to-[#fdf6e8] border border-yellow-200 rounded-xl p-7 flex flex-col items-center shadow hover:shadow-xl transition">
                        <i data-lucide="meh" class="w-8 h-8 text-yellow-500 mb-3"></i>
                        <span class="font-semibold text-gray-500 mb-1">Gizi Kurang</span>
                        <span class="text-2xl md:text-3xl font-extrabold text-yellow-500">{{ number_format($data->gizi_kurang) }}</span>
                    </div>
                    <div class="bg-gradient-to-b from-[#fcd8da] to-[#fff0f1] border border-red-200 rounded-xl p-7 flex flex-col items-center shadow hover:shadow-xl transition">
                        <i data-lucide="alert-triangle" class="w-8 h-8 text-red-600 mb-3"></i>
                        <span class="font-semibold text-gray-500 mb-1">Gizi Buruk</span>
                        <span class="text-2xl md:text-3xl font-extrabold text-red-500">{{ number_format($data->gizi_buruk) }}</span>
                    </div>
                </div>
            </section>

            <!-- Imunsisasi dan Air Bersih -->
            <section class="w-full reveal-on-scroll">
                <div class="max-w-7xl mx-auto px-4 sm:px-10 lg:px-30">
                    <h2 class="text-3xl md:text-4xl font-bold text-[#12715D] mb-12 text-center">Cakupan Imunisasi & Akses Air Bersih</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                        <!-- Imunisasi -->
                        <div class="bg-white/90 rounded-2xl shadow-lg p-7 border border-green-100 hover:shadow-2xl transition">
                            <div class="flex items-center gap-2 mb-5 text-green-800">
                                <i data-lucide="shield-check" class="w-7 h-7"></i>
                                <h3 class="text-xl font-semibold">Cakupan Imunisasi</h3>
                            </div>
                            <div class="space-y-3 text-base mb-4">
                                <div class="flex justify-between items-center bg-green-50 p-3 rounded shadow-sm font-semibold">
                                    <span>Polio 3</span>
                                    <span class="text-green-700">{{ number_format($data->imunisasi_polio) }} Anak</span>
                                </div>
                                <div class="flex justify-between items-center bg-green-50 p-3 rounded shadow-sm font-semibold">
                                    <span>DPT-1</span>
                                    <span class="text-green-700">{{ number_format($data->imunisasi_dpt1) }} Anak</span>
                                </div>
                                <div class="flex justify-between items-center bg-green-50 p-3 rounded shadow-sm font-semibold">
                                    <span>Cacar</span>
                                    <span class="text-green-700">{{ number_format($data->imunisasi_cacar) }} Anak</span>
                                </div>
                            </div>
                            <div class="h-52">
                                <canvas id="imunisasiChart"></canvas>
                            </div>
                        </div>

                        <!-- Air Bersih -->
                        <div class="bg-white/90 rounded-2xl shadow-lg p-7 border border-yellow-100 hover:shadow-2xl transition">
                            <div class="flex items-center gap-2 mb-5 text-yellow-800">
                                <i data-lucide="droplets" class="w-7 h-7"></i>
                                <h3 class="text-xl font-semibold">Akses Air Bersih</h3>
                            </div>
                            <div class="space-y-3 text-base mb-4">
                                <div class="flex justify-between items-center bg-yellow-50 p-3 rounded shadow-sm font-semibold">
                                    <span>Sumur Galian</span>
                                    <span class="text-yellow-700">{{ number_format($data->sumur_galian) }} KK</span>
                                </div>
                                <div class="flex justify-between items-center bg-yellow-50 p-3 rounded shadow-sm font-semibold">
                                    <span>Air PAH</span>
                                    <span class="text-yellow-700">{{ number_format($data->air_pah) }} KK</span>
                                </div>
                                <div class="flex justify-between items-center bg-yellow-50 p-3 rounded shadow-sm font-semibold">
                                    <span>Sumur Pompa</span>
                                    <span class="text-yellow-700">{{ number_format($data->sumur_pompa) }} KK</span>
                                </div>
                                <div class="flex justify-between items-center bg-yellow-50 p-3 rounded shadow-sm font-semibold">
                                    <span>Hidran Umum</span>
                                    <span class="text-yellow-700">{{ number_format($data->hidran_umum) }} KK</span>
                                </div>
                                <div class="flex justify-between items-center bg-yellow-50 p-3 rounded shadow-sm font-semibold">
                                    <span>Air Sungai</span>
                                    <span class="text-yellow-700">{{ number_format($data->air_sungai) }} KK</span>
                                </div>
                            </div>
                            <div class="h-52">
                                <canvas id="airChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main>

    @include('layouts.partials.footer')

    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();

            function createBarChart(canvasId, labels, data, colors, title) {
                const ctx = document.getElementById(canvasId).getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: title,
                            data: data,
                            backgroundColor: colors.map(c => c.replace('1)', '0.7)')),
                            borderColor: colors,
                            borderWidth: 1,
                            borderRadius: 5,
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                grid: {
                                    color: '#e5e7eb'
                                }
                            },
                            x: {
                                grid: {
                                    display: false
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                callbacks: {
                                    label: (c) => `${c.dataset.label}: ${c.raw.toLocaleString('id-ID')}`
                                }
                            }
                        }
                    }
                });
            }

            const bayiLahir = @json($data->bayi_lahir);
            const bayiMeninggal = @json($data->bayi_meninggal);
            const ibuMelahirkan = @json($data->ibu_melahirkan);
            const ibuMeninggal = @json($data->ibu_meninggal);
            const imunisasiPolio = @json($data->imunisasi_polio);
            const imunisasiDpt1 = @json($data->imunisasi_dpt1);
            const imunisasiCacar = @json($data->imunisasi_cacar);
            const sumurGalian = @json($data->sumur_galian);
            const airPah = @json($data->air_pah);
            const sumurPompa = @json($data->sumur_pompa);
            const hidranUmum = @json($data->hidran_umum);
            const airSungai = @json($data->air_sungai);

            createBarChart('bayiChart', ['Jumlah Bayi Lahir', 'Jumlah Bayi Meninggal'], [bayiLahir, bayiMeninggal], ['#3b82f6', '#ef4444'], 'Jumlah');
            createBarChart('ibuChart', ['Jumlah Ibu Melahirkan', 'Jumlah Ibu Meninggal'], [ibuMelahirkan, ibuMeninggal], ['#ec4899', '#ef4444'], 'Jumlah');
            createBarChart('imunisasiChart', ['Polio 3', 'DPT-1', 'Cacar'], [imunisasiPolio, imunisasiDpt1, imunisasiCacar], ['#8b5cf6', '#10b981', '#f97316'], 'Jumlah Anak');
            createBarChart('airChart', ['Sumur Galian', 'Air PAH', 'Sumur Pompa', 'Hidran Umum', 'Air Sungai'], [sumurGalian, airPah, sumurPompa, hidranUmum, airSungai], ['#06b6d4', '#0891b2', '#6366f1', '#4f46e5', '#a855f7'], 'Jumlah KK');

            const observerOptions = { root: null, rootMargin: '0px', threshold: 0.1 };
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in-up');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const targets = document.querySelectorAll('.reveal-on-scroll');
            targets.forEach(target => observer.observe(target));
        });
    </script>

</body>

</html>
