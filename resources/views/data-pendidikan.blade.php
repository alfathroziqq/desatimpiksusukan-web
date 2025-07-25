<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendidikan | Desa Timpik</title>

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
        use App\Models\DataPendidikan;

        $data =
            DataPendidikan::latest()->first() ??
            (object) [
                'sd_mi' => 0,
                'sltp_mts' => 0,
                'slta_ma' => 0,
                's1_diploma' => 0,
                'putus_sekolah' => 0,
                'buta_huruf' => 0,
                'gedung_tk_paud' => 0,
                'gedung_sd_mi' => 0,
                'gedung_sltp_mts' => 0,
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
                        Data Pendidikan
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
                                    <span class="ml-2 text-sm font-semibold text-white">Data Pendidikan</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Data Pendidikan Section -->
        <section class="py-12 md:py-10 bg-white" style="font-family: 'Poppins', sans-serif;">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-5 reveal-on-scroll">
                    <h2 class="text-3xl sm:text-[45px] font-bold text-[#0C3B2E]">Data Pendidikan</h2>
                    <div class="mx-auto mt-4 w-24 md:w-48 h-1 bg-gradient-to-r from-[#C7F3E7] via-[#0C3B2E] to-[#E8C187] rounded-full mb-1">
                    </div>
                    <p class="text-md sm:text-[20px] text-[#0C3B2E] mt-5 px-5 md:px-30">Persebaran penduduk menurut
                        tingkat pendidikan yang telah ditempuh.</p>
                </div>
            </div>
        </section>

        <div class="container mx-auto px-6 lg:px-16 space-y-14 mt-[-20px] mb-20 text-[#0C3B2E]"
            style="font-family: 'Poppins', sans-serif;">

            <!-- Grafik dan Tabel Pendidikan -->
            <section class="reveal-on-scroll">
                <div class="bg-yellow-50 p-6 sm:p-10 rounded-3xl shadow-xl border border-gray-100">
                    <!-- Judul -->
                    <div class="flex items-center gap-3 mb-6">
                        <!-- Icon Pendidikan -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.84 4.626c0 2.21-.895 4.21-2.344 5.656A7.967 7.967 0 0112 22a7.967 7.967 0 01-4.656-1.344A7.972 7.972 0 015 15.204c0-1.651.528-3.177 1.428-4.422L12 14z" />
                        </svg>
                        <h2 class="text-xl sm:text-2xl font-bold text-[#0C3B2E]">Distribusi Tingkat Pendidikan Penduduk</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                        <!-- Chart -->
                        <div class="relative w-full h-80">
                            <canvas id="pendidikanChart"></canvas>
                        </div>

                        <!-- Legend -->
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-blue-500/70 shadow-md"></span>
                                <span class="text-gray-700 font-medium text-sm bg-white rounded-full px-3 py-1 shadow border">SD / MI</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-pink-500/70 shadow-md"></span>
                                <span class="text-gray-700 font-medium text-sm bg-white rounded-full px-3 py-1 shadow border">SLTP / MTs</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-emerald-500/70 shadow-md"></span>
                                <span class="text-gray-700 font-medium text-sm bg-white rounded-full px-3 py-1 shadow border">SLTA / MA</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-purple-500/70 shadow-md"></span>
                                <span class="text-gray-700 font-medium text-sm bg-white rounded-full px-3 py-1 shadow border">S1 / Diploma</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-orange-500/70 shadow-md"></span>
                                <span class="text-gray-700 font-medium text-sm bg-white rounded-full px-3 py-1 shadow border">Putus Sekolah</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-gray-500/70 shadow-md"></span>
                                <span class="text-gray-700 font-medium text-sm bg-white rounded-full px-3 py-1 shadow border">Buta Huruf</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-16 px-6 md:px-16 bg-gradient-to-b from-[#F7FBE8] to-[#E8F5E9]">
                <div class="max-w-3xl mx-auto">
                    <h2 class="text-3xl md:text-4xl font-bold text-[#2F5233] mb-10 flex items-center gap-4">
                        <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 100 16 8 8 0 000-16zM8.5 11.5l-3-3 1.41-1.42L8.5 8.67l4.59-4.58L14.5 5.5l-6 6z" />
                        </svg>
                        Data Tingkat Pendidikan Penduduk
                    </h2>

                    @php
                        $totalPendidikan = $data->sd_mi + $data->sltp_mts + $data->slta_ma + $data->s1_diploma + $data->putus_sekolah + $data->buta_huruf;
                    @endphp

                    @php
                        $items = [
                            ['label' => 'SD / MI', 'value' => $data->sd_mi, 'color' => 'bg-green-600', 'icon' => '<path d="M12 2H8a2 2 0 00-2 2v14l6-3 6 3V4a2 2 0 00-2-2z"/>' ],
                            ['label' => 'SLTP / MTs', 'value' => $data->sltp_mts, 'color' => 'bg-yellow-400', 'icon' => '<path d="M5 3h10a2 2 0 012 2v2H3V5a2 2 0 012-2z"/><path d="M3 9h14v2H3z"/><path d="M7 13h2v4H7zM11 13h2v4h-2z"/>' ],
                            ['label' => 'SLTA / MA', 'value' => $data->slta_ma, 'color' => 'bg-green-400', 'icon' => '<circle cx="10" cy="6" r="4"/><path d="M2 18a8 8 0 0116 0z"/>' ],
                            ['label' => 'S1 / Diploma', 'value' => $data->s1_diploma, 'color' => 'bg-indigo-400', 'icon' => '<path d="M10 2L2 6l8 4 8-4-8-4z"/><path d="M2 10v4l8 4 8-4v-4"/>' ],
                            ['label' => 'Putus Sekolah', 'value' => $data->putus_sekolah, 'color' => 'bg-red-300', 'icon' => '<path d="M10 2a8 8 0 100 16 8 8 0 000-16zM6 6l8 8M14 6l-8 8"/>' ],
                            ['label' => 'Buta Huruf', 'value' => $data->buta_huruf, 'color' => 'bg-gray-400', 'icon' => '<path d="M10 2a8 8 0 100 16 8 8 0 000-16z"/><path d="M4 10h12"/>' ],
                        ];
                    @endphp

                    <div class="space-y-6">
                        @foreach ($items as $item)
                            @php
                                $percentage = $totalPendidikan > 0 ? ($item['value'] / $totalPendidikan) * 100 : 0;
                            @endphp
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center gap-3 text-gray-700">
                                        <svg class="w-5 h-5 text-[#2F5233]" fill="currentColor" viewBox="0 0 20 20">{!! $item['icon'] !!}</svg>
                                        <span class="text-sm font-semibold">{{ $item['label'] }}</span>
                                    </div>
                                    <span class="text-sm font-medium text-gray-600">{{ number_format($item['value']) }} Orang</span>
                                </div>
                                <div class="w-full bg-white rounded-full h-3 shadow-inner">
                                    <div class="{{ $item['color'] }} h-3 rounded-full transition-all duration-500"
                                        style="width: {{ $percentage }}%">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>


            <section class="reveal-on-scroll">
                <div class="text-center mb-4">
                    <h2 class="text-3xl font-bold tracking-tight">Lembaga Pendidikan di Desa Kunden</h2>
                    <p class="mt-2 text-lg">Sarana dan prasarana pendidikan yang tersedia untuk masyarakat.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    @php
                        $gedungList = [
                            [
                                'label' => 'TK/PAUD',
                                'jumlah' => $data->gedung_tk_paud ?? 0,
                                'lokasi' => $data->lokasi_gedung_tk_paud ?? ['Dukuh Hagskap', 'Dukuh Jakla'],
                                'icon' => 'building',
                                'color' => 'blue',
                            ],
                            [
                                'label' => 'SD / MI',
                                'jumlah' => $data->gedung_sd_mi ?? 0,
                                'lokasi' => $data->lokasi_gedung_sd_mi ?? ['Dukuh Hagskap', 'Dukuh Lahag', 'Dukuh Jakla'],
                                'icon' => 'book-open',
                                'color' => 'green',
                            ],
                            [
                                'label' => 'SLTP / MTs',
                                'jumlah' => $data->gedung_sltp_mts ?? 0,
                                'lokasi' => $data->lokasi_gedung_sltp_mts ?? ['Dukuh Hagskap'],
                                'icon' => 'school',
                                'color' => 'yellow',
                            ],
                            [
                                'label' => 'SLTA / MA',
                                'jumlah' => $data->gedung_sltp_mts ?? 0,
                                'lokasi' => $data->lokasi_gedung_sltp_mts ?? ['Dukuh Hagskap'],
                                'icon' => 'graduation-cap',
                                'color' => 'red',
                            ],
                        ];
                    @endphp

                    @foreach ($gedungList as $idx => $item)
                        <div
                            x-data="{ open: false }"
                            class="bg-white p-0 rounded-xl shadow-lg border transition-all duration-300"
                        >
                            <!-- Header (Klik Hanya di Bagian Ini) -->
                            <div
                                class="flex items-center justify-between p-6 rounded-xl hover:shadow-xl hover:border-{{ $item['color'] }}-500 transition-all duration-300 cursor-pointer"
                                @click="open = !open"
                            >
                                <div class="flex items-start space-x-4">
                                    <div class="bg-{{ $item['color'] }}-100 text-{{ $item['color'] }}-600 p-3 rounded-lg flex-shrink-0">
                                        <i data-lucide="{{ $item['icon'] }}"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-lg mb-1">{{ $item['label'] }}</h3>
                                        <div class="text-2xl font-bold leading-tight">{{ $item['jumlah'] }}</div>
                                    </div>
                                </div>
                                <div class="ml-3 flex items-center">
                                    <template x-if="!open">
                                        <i data-lucide="plus" class="w-6 h-6 text-gray-500"></i>
                                    </template>
                                    <template x-if="open">
                                        <i data-lucide="minus" class="w-6 h-6 text-gray-500"></i>
                                    </template>
                                </div>
                            </div>
                            <!-- Accordion content -->
                            <div
                                x-show="open"
                                x-transition:enter="transition-all ease-out duration-400"
                                x-transition:enter-start="opacity-0 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-[300px]"
                                x-transition:leave="transition-all ease-in duration-300"
                                x-transition:leave-start="opacity-100 max-h-[300px]"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="px-6 pb-6 overflow-hidden"
                                style="display: none;"
                            >
                                <div class="mt-2">
                                    <div class="font-semibold mb-1">Lokasi:</div>
                                    <ol class="list-decimal pl-5 space-y-1 text-gray-800">
                                        @foreach ($item['lokasi'] as $lok)
                                            <li>{{ $lok }}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <script>
                    document.addEventListener('alpine:init', () => {
                        lucide.createIcons();
                    });
                    document.addEventListener('DOMContentLoaded', () => {
                        lucide.createIcons();
                    });
                </script>
            </section>

        </div>

    </main>

    @include('layouts.partials.footer')

    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            lucide.createIcons();

            // Data untuk Bar Chart
            const pendidikanData = {
                labels: ['SD/MI', 'SLTP/MTs', 'SLTA/MA', 'S1/Diploma', 'Putus Sekolah', 'Buta Huruf'],
                values: [
                    {{ $data->sd_mi }},
                    {{ $data->sltp_mts }},
                    {{ $data->slta_ma }},
                    {{ $data->s1_diploma }},
                    {{ $data->putus_sekolah }},
                    {{ $data->buta_huruf }}
                ]

            };

            const ctx = document.getElementById('pendidikanChart').getContext('2d');
            const pendidikanChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: pendidikanData.labels,
                    datasets: [{
                        label: 'Jumlah Penduduk',
                        data: pendidikanData.values,
                        backgroundColor: [
                            'rgba(59, 130, 246, 0.7)',
                            'rgba(236, 72, 153, 0.7)',
                            'rgba(16, 185, 129, 0.7)',
                            'rgba(168, 85, 247, 0.7)',
                            'rgba(249, 115, 22, 0.7)',
                            'rgba(107, 114, 128, 0.7)'
                        ],
                        borderColor: [
                            'rgba(59, 130, 246, 1)',
                            'rgba(236, 72, 153, 1)',
                            'rgba(16, 185, 129, 1)',
                            'rgba(168, 85, 247, 1)',
                            'rgba(249, 115, 22, 1)',
                            'rgba(107, 114, 128, 1)'
                        ],
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
                                label: function (context) {
                                    return `Jumlah: ${context.raw.toLocaleString('id-ID')} Orang`;
                                }
                            }
                        }
                    }
                }
            });

            // Intersection Observer
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
