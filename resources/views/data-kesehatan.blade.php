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
                    <div class="w-45 md:w-163 h-1 bg-[#0C3B2E] mx-auto mt-3"></div>
                    <p class="text-md sm:text-[20px] text-[#0C3B2E] mt-5">Statistik dan fasilitas kesehatan untuk kesejahteraan masyarakat desa timpik.</p>
                </div>
            </div>
        </section>

        <div class="container mx-auto px-6 lg:px-16 space-y-14 mt-[-20px] mb-20 text-[#0C3B2E]" style="font-family: 'Poppins', sans-serif;">

            <!-- Kematian Bayi & Ibu Melahirkan -->
            <section class="reveal-on-scroll grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Kematian Bayi -->
                <div>
                    <div class="text-center mb-4">
                        <h2 class="text-3xl font-bold tracking-tight">Kematian Bayi</h2>
                        <p class="mt-2 text-lg">Data kelahiran dan kematian bayi tahun ini.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100">
                        <table class="min-w-full mb-6 text-sm">
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-2 text-gray-600">Jumlah Bayi Lahir</td>
                                    <td class="py-3 px-2 font-semibold text-right">{{ number_format($data->bayi_lahir) }} Orang</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-2">Jumlah Bayi Meninggal</td>
                                    <td class="py-3 px-2 font-semibold text-right">{{ number_format($data->bayi_meninggal) }} Orang</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="w-full h-80">
                            <canvas id="bayiChart"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Kematian Ibu Melahirkan -->
                <div>
                    <div class="text-center mb-4">
                        <h2 class="text-3xl font-bold tracking-tight">Kematian Ibu Melahirkan</h2>
                        <p class="mt-2 text-lg">Data kelahiran dan kematian ibu tahun ini.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100">
                        <table class="min-w-full mb-6 text-sm">
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-2">Jumlah Ibu Melahirkan</td>
                                    <td class="py-3 px-2 font-semibold text-right">{{ number_format($data->ibu_melahirkan) }} Orang</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-2">Jumlah Ibu Melahirkan Meninggal</td>
                                    <td class="py-3 px-2 font-semibold text-right">{{ number_format($data->ibu_meninggal) }} Orang</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="w-full h-80">
                            <canvas id="ibuChart"></canvas>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gizi Balita -->
            <section class="reveal-on-scroll">
                <div class="text-center mb-6">
                    <h2 class="text-3xl font-bold tracking-tight">Status Gizi Balita</h2>
                    <p class="mt-2 text-lg">Data kondisi gizi anak-anak balita di Desa Kunden.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-blue-500 text-white p-6 rounded-xl shadow-lg">
                        <i data-lucide="users" class="w-8 h-8 mb-3 opacity-70"></i>
                        <p class="text-3xl font-bold">{{ number_format($data->jumlah_balita) }}</p>
                        <p class="text-blue-100">Jumlah Balita</p>
                    </div>
                    <div class="bg-green-500 text-white p-6 rounded-xl shadow-lg">
                        <i data-lucide="smile" class="w-8 h-8 mb-3 opacity-70"></i>
                        <p class="text-3xl font-bold">{{ number_format($data->gizi_baik) }}</p>
                        <p class="text-green-100">Balita Gizi Baik</p>
                    </div>
                    <div class="bg-yellow-500 text-white p-6 rounded-xl shadow-lg">
                        <i data-lucide="frown" class="w-8 h-8 mb-3 opacity-70"></i>
                        <p class="text-3xl font-bold">{{ number_format($data->gizi_kurang) }}</p>
                        <p class="text-yellow-100">Balita Gizi Kurang</p>
                    </div>
                    <div class="bg-red-500 text-white p-6 rounded-xl shadow-lg">
                        <i data-lucide="alert-triangle" class="w-8 h-8 mb-3 opacity-70"></i>
                        <p class="text-3xl font-bold">{{ number_format($data->gizi_buruk) }}</p>
                        <p class="text-red-100">Balita Gizi Buruk</p>
                    </div>
                </div>
            </section>

            <!-- Cakupan Imunisasi & Air Bersih -->
            <section class="reveal-on-scroll grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <div class="text-center lg:text-left mb-4">
                        <h2 class="text-3xl font-bold tracking-tight">Cakupan Imunisasi</h2>
                        <p class="mt-2 text-lg">Partisipasi program imunisasi anak.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100">
                        <table class="min-w-full mb-6 text-sm">
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-2 text-gray-600">Cakupan Imunisasi Polio 3</td>
                                    <td class="py-3 px-2 font-semibold text-gray-800 text-right">{{ number_format($data->imunisasi_polio) }} Orang</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-2 text-gray-600">Cakupan Imunisasi DPT-1</td>
                                    <td class="py-3 px-2 font-semibold text-gray-800 text-right">{{ number_format($data->imunisasi_dpt1) }} Orang</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-2 text-gray-600">Cakupan Imunisasi Cacar</td>
                                    <td class="py-3 px-2 font-semibold text-gray-800 text-right">{{ number_format($data->imunisasi_cacar) }} Orang</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="w-full h-80">
                            <canvas id="imunisasiChart"></canvas>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="text-center lg:text-left mb-4">
                        <h2 class="text-3xl font-bold tracking-tight">Akses Air Bersih</h2>
                        <p class="mt-2 text-lg">Sumber air bersih utama keluarga.</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-xl border border-gray-100">
                        <table class="min-w-full mb-6 text-sm">
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-2 text-gray-600">Pengguna Sumur Galian</td>
                                    <td class="py-3 px-2 font-semibold text-gray-800 text-right">{{ number_format($data->sumur_galian) }} KK</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-2 text-gray-600">Pengguna Air PAH</td>
                                    <td class="py-3 px-2 font-semibold text-gray-800 text-right">{{ number_format($data->air_pah) }} KK</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-2 text-gray-600">Pengguna Sumur Pompa</td>
                                    <td class="py-3 px-2 font-semibold text-gray-800 text-right">{{ number_format($data->sumur_pompa) }} KK</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-2 text-gray-600">Pengguna Sumur Hidran Umum</td>
                                    <td class="py-3 px-2 font-semibold text-gray-800 text-right">{{ number_format($data->hidran_umum) }} KK</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-2 text-gray-600">Pengguna Air Sungai</td>
                                    <td class="py-3 px-2 font-semibold text-gray-800 text-right">{{ number_format($data->air_sungai) }} KK</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="w-full h-80">
                            <canvas id="airChart"></canvas>
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
