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
        use App\Models\DataKelamin;

        $data = DataKelamin::latest()->first() ?? (object)[
            'laki_laki' => 0,
            'perempuan' => 0,
            'kepala_keluarga' => 0,
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
                        Data Jenis Kelamin
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
                                    <span class="ml-2 text-sm font-semibold text-white">Data Jenis Kelamin</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Data Jenis Kelamin Section -->
        <section class="py-12 md:py-10 bg-white" style="font-family: 'Poppins', sans-serif;">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-5 reveal-on-scroll">
                    <h2 class="text-3xl sm:text-[45px] font-bold text-[#0C3B2E]">Grafik Komposisi Penduduk</h2>
                    <div class="w-45 md:w-163 h-1 bg-[#0C3B2E] mx-auto mt-3"></div>
                    <p class="text-md sm:text-[20px] text-[#0C3B2E] mt-5">Menampilkan visualisasi data kependudukan desa timpik berdasarkan jenis kelamin.</p>
                </div>
            </div>
        </section>

        <div class="container mx-auto px-6 lg:px-16 space-y-14 mt-[-20px] mb-20">

            <section class="reveal-on-scroll">
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-xl border border-gray-100">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">

                        <div x-data="{ chartType: 'pie' }"
                            class="flex items-center space-x-2 mt-4 sm:mt-0 p-1 bg-gray-100 rounded-lg">
                            <button @click="chartType = 'pie'; toggleChartType('pie');"
                                :class="{ 'bg-white text-blue-600 shadow': chartType === 'pie', 'text-gray-600': chartType !== 'pie' }"
                                class="px-3 py-1.5 text-sm font-semibold rounded-md transition-all">
                                Pie Chart
                            </button>
                            <button @click="chartType = 'bar'; toggleChartType('bar');"
                                :class="{ 'bg-white text-blue-600 shadow': chartType === 'bar', 'text-gray-600': chartType !== 'bar' }"
                                class="px-3 py-1.5 text-sm font-semibold rounded-md transition-all">
                                Bar Chart
                            </button>
                        </div>
                    </div>
                    <div class="w-full h-80 md:h-96">
                        <canvas id="genderChart"></canvas>
                    </div>
                </div>
            </section>

            <!-- Kartu Statistik Utama -->
            <section class="reveal-on-scroll">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        class="bg-blue-500 text-white p-8 rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-lg font-medium text-blue-100">Laki-laki</p>
                                <p class="text-4xl font-extrabold">{{ number_format($data->laki_laki) }}</p>
                            </div>
                            <div class="bg-white/20 p-4 rounded-full">
                                <i data-lucide="male" class="w-8 h-8"></i>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-pink-500 text-white p-8 rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-lg font-medium text-pink-100">Perempuan</p>
                                <p class="text-4xl font-extrabold">{{ number_format($data->perempuan) }}</p>
                            </div>
                            <div class="bg-white/20 p-4 rounded-full">
                                <i data-lucide="female" class="w-8 h-8"></i>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-slate-700 text-white p-8 rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-lg font-medium text-slate-300">Total Penduduk</p>
                                <p class="text-4xl font-extrabold">{{ number_format($data->laki_laki + $data->perempuan) }}</p>
                            </div>
                            <div class="bg-white/20 p-4 rounded-full">
                                <i data-lucide="users" class="w-8 h-8"></i>
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
        // Data untuk chart
        const genderData = {
            labels: ['Laki-laki', 'Perempuan'],
            values: [{{ $data->laki_laki }}, {{ $data->perempuan }}],
            colors: ['#3b82f6', '#ec4899'] // blue-500, pink-500
        };

        // Konfigurasi umum
        const commonConfig = {
            data: {
                labels: genderData.labels,
                datasets: [{
                    label: 'Jumlah Penduduk',
                    data: genderData.values,
                    backgroundColor: genderData.colors,
                    borderColor: '#ffffff',
                    borderWidth: 2,
                    hoverOffset: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 1000,
                    easing: 'easeInOutQuart'
                },
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            padding: 20,
                            font: {
                                size: 14,
                                family: "'Instrument Sans', sans-serif"
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed !== null) {
                                    const total = context.dataset.data.reduce((acc, val) => acc + val, 0);
                                    const percentage = ((context.raw / total) * 100).toFixed(2);
                                    label += `${context.raw.toLocaleString('id-ID')} (${percentage}%)`;
                                }
                                return label;
                            }
                        }
                    }
                }
            }
        };

        let genderChart;
        const ctx = document.getElementById('genderChart').getContext('2d');

        function createOrUpdateChart(type) {
            if (genderChart) {
                genderChart.destroy();
            }

            let config = JSON.parse(JSON.stringify(commonConfig));
            config.type = type;

            if (type === 'bar') {
                config.options.scales = {
                    y: {
                        beginAtZero: true
                    },
                    x: {}
                };
                config.options.plugins.legend.display = false;
            } else {
                config.type = 'doughnut';
                config.options.plugins.legend.display = true;
            }

            genderChart = new Chart(ctx, config);
        }

        function toggleChartType(type) {
            createOrUpdateChart(type);
        }

        document.addEventListener('DOMContentLoaded', (event) => {
        createOrUpdateChart('pie');

        const targets = document.querySelectorAll('.reveal-on-scroll');
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

        targets.forEach(target => {
            observer.observe(target);
        });

        lucide.createIcons();
    });

    </script>

</body>

</html>
