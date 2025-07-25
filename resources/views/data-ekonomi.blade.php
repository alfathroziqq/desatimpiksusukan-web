<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ekonomi | Desa Timpik</title>

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
        use App\Models\DataEkonomi;
        $data =
            DataEkonomi::latest()->first() ??
            (object) [
                'padi_sawah' => 0,
                'padi_ladang' => 0,
                'jagung' => 0,
                'palawija' => 0,
                'tebu' => 0,

                'kambing' => 0,
                'sapi' => 0,
                'ayam' => 0,
                'burung' => 0,

                'petani' => 0,
                'pedagang' => 0,
                'pns' => 0,
                'tukang' => 0,
                'guru' => 0,
                'bidan_perawat' => 0,
                'tni_polri' => 0,
                'pensiunan' => 0,
                'sopir_angkutan' => 0,
                'buruh' => 0,
                'jasa_persewaan' => 0,
                'swasta' => 0,
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
                        Data Ekonomi
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
                                    <span class="ml-2 text-sm font-semibold text-white">Data Ekonomi</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Data Ekonomi Section -->
        <section class="py-12 md:py-10 bg-white" style="font-family: 'Poppins', sans-serif;">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-5 reveal-on-scroll">
                    <h2 class="text-3xl sm:text-[45px] font-bold text-[#0C3B2E]">Data Ekonomi</h2>
                    <div class="mx-auto mt-4 w-24 md:w-48 h-1 bg-gradient-to-r from-[#C7F3E7] via-[#0C3B2E] to-[#E8C187] rounded-full mb-1">
                    </div>
                    <p class="text-md sm:text-[20px] text-[#0C3B2E] mt-5 px-5 md:px-30">Pemanfaatan lahan pertanian desa
                        timpik.</p>
                </div>
            </div>
        </section>

        <div class="container mx-auto px-6 lg:px-16 space-y-20 mt-[-20px] mb-20 text-[#0C3B2E]" style="font-family: 'Poppins', sans-serif;">

            <!-- LUAS TANAMAN PERTANIAN -->
            <section class="reveal-on-scroll px-4 sm:px-8 py-10">
                <div class="bg-gradient-to-br from-[#F4FCF9] to-[#FFF6EC] p-6 sm:p-10 rounded-3xl shadow-xl border border-gray-100 relative overflow-hidden">
                    <!-- Aksen Dekoratif -->
                    <div class="absolute top-4 left-4 w-20 h-20 bg-[#D7EFE8] rounded-full opacity-30 blur-xl"></div>
                    <div class="absolute bottom-4 right-4 w-32 h-32 bg-[#FFE7C6] rounded-full opacity-40 blur-xl"></div>

                    <!-- Judul -->
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-[#0C3B2E] text-white p-2 rounded-full">
                            <i data-lucide="sprout" class="w-6 h-6"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-[#0C3B2E]">Data Luas Tanaman Pertanian</h2>
                    </div>

                    <!-- Grid: Chart -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <!-- Chart di KIRI -->
                        <div class="relative w-full h-80">
                            <canvas id="tanamanChart"></canvas>
                        </div>

                        <!-- Legend -->
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-green-400/80 shadow-md"></span>
                                <span class="text-gray-700 font-medium text-sm bg-white rounded-full px-3 py-1 shadow border">Padi Sawah</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-yellow-400/80 shadow-md"></span>
                                <span class="text-gray-700 font-medium text-sm bg-white rounded-full px-3 py-1 shadow border">Padi Ladang</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-orange-400/80 shadow-md"></span>
                                <span class="text-gray-700 font-medium text-sm bg-white rounded-full px-3 py-1 shadow border">Jagung</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-purple-400/80 shadow-md"></span>
                                <span class="text-gray-700 font-medium text-sm bg-white rounded-full px-3 py-1 shadow border">Palawija</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-4 h-4 rounded-full bg-blue-400/80 shadow-md"></span>
                                <span class="text-gray-700 font-medium text-sm bg-white rounded-full px-3 py-1 shadow border">Tebu</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- JENIS TERNAK -->
            <section class="reveal-on-scroll">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold tracking-tight text-[#0C3B2E]">Jenis Ternak</h2>
                    <p class="text-gray-600 mt-2">Jumlah ternak berdasarkan jenis di Desa Timpik.</p>
                </div>

                <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1: Kambing -->
                    <div class="bg-white rounded-3xl shadow-lg p-6 border-t-4 border-green-500 flex flex-col items-center text-center hover:-translate-y-1 transition">
                        <div class="bg-green-100 p-4 rounded-full mb-3">
                            <i data-lucide="mountain" class="w-8 h-8 text-green-700"></i> <!-- pengganti sheep -->
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Kambing</h3>
                        <p class="text-2xl font-bold text-[#0C3B2E] mt-2">{{ $data->kambing }} Ekor</p>
                    </div>

                    <!-- Card 2: Sapi -->
                    <div class="bg-white rounded-3xl shadow-lg p-6 border-t-4 border-yellow-500 flex flex-col items-center text-center hover:-translate-y-1 transition">
                        <div class="bg-yellow-100 p-4 rounded-full mb-3">
                            <i data-lucide="milk" class="w-8 h-8 text-yellow-700"></i> <!-- pengganti cow -->
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Sapi</h3>
                        <p class="text-2xl font-bold text-[#0C3B2E] mt-2">{{ $data->sapi }} Ekor</p>
                    </div>
                    <!-- Card 3: Ayam -->
                    <div class="bg-white rounded-3xl shadow-lg p-6 border-t-4 border-red-500 flex flex-col items-center text-center hover:-translate-y-1 transition">
                        <div class="bg-red-100 p-4 rounded-full mb-3">
                            <i data-lucide="egg-fried" class="w-8 h-8 text-red-700"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Ayam</h3>
                        <p class="text-2xl font-bold text-[#0C3B2E] mt-2">{{ $data->ayam }} Ekor</p>
                    </div>

                    <!-- Card 4: Burung -->
                    <div class="bg-white rounded-3xl shadow-lg p-6 border-t-4 border-blue-500 flex flex-col items-center text-center hover:-translate-y-1 transition">
                        <div class="bg-blue-100 p-4 rounded-full mb-3">
                            <i data-lucide="bird" class="w-8 h-8 text-blue-700"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Burung</h3>
                        <p class="text-2xl font-bold text-[#0C3B2E] mt-2">{{ $data->burung }} Ekor</p>
                    </div>
                </div>
            </section>

            <!-- STRUKTUR MATA PENCAHARIAN -->
            <section class="reveal-on-scroll py-10">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold tracking-tight text-[#0C3B2E]">Struktur Mata Pencaharian</h2>
                    <p class="mt-2 text-lg text-gray-600">Distribusi jenis pekerjaan utama masyarakat Desa Timpik.</p>
                </div>

                <div class="bg-white p-6 sm:p-8 rounded-3xl shadow-xl border border-gray-100">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        
                        <!-- Chart -->
                        <div class="w-full h-80 md:h-96">
                            <canvas id="pekerjaanChart"></canvas>
                        </div>

                        <!-- Pekerjaan List -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700">
                            <div class="flex items-center space-x-3 bg-[#F3F8F7] p-4 rounded-xl shadow-sm">
                                <i class="fas fa-tractor text-xl text-[#3C7167]"></i>
                                <span class="font-medium">Petani: {{ $data->petani }} Orang</span>
                            </div>
                            <div class="flex items-center space-x-3 bg-[#F3F8F7] p-4 rounded-xl shadow-sm">
                                <i class="fas fa-store text-xl text-[#3C7167]"></i>
                                <span class="font-medium">Pedagang: {{ $data->pedagang }} Orang</span>
                            </div>
                            <div class="flex items-center space-x-3 bg-[#F3F8F7] p-4 rounded-xl shadow-sm">
                                <i class="fas fa-user-tie text-xl text-[#3C7167]"></i>
                                <span class="font-medium">PNS: {{ $data->pns }} Orang</span>
                            </div>
                            <div class="flex items-center space-x-3 bg-[#F3F8F7] p-4 rounded-xl shadow-sm">
                                <i class="fas fa-tools text-xl text-[#3C7167]"></i>
                                <span class="font-medium">Tukang: {{ $data->tukang }} Orang</span>
                            </div>
                            <div class="flex items-center space-x-3 bg-[#F3F8F7] p-4 rounded-xl shadow-sm">
                                <i class="fas fa-chalkboard-teacher text-xl text-[#3C7167]"></i>
                                <span class="font-medium">Guru: {{ $data->guru }} Orang</span>
                            </div>
                            <div class="flex items-center space-x-3 bg-[#F3F8F7] p-4 rounded-xl shadow-sm">
                                <i class="fas fa-user-nurse text-xl text-[#3C7167]"></i>
                                <span class="font-medium">Bidan/Perawat: {{ $data->bidan_perawat }} Orang</span>
                            </div>
                            <div class="flex items-center space-x-3 bg-[#F3F8F7] p-4 rounded-xl shadow-sm">
                                <i class="fas fa-shield-alt text-xl text-[#3C7167]"></i>
                                <span class="font-medium">TNI/Polri: {{ $data->tni_polri }} Orang</span>
                            </div>
                            <div class="flex items-center space-x-3 bg-[#F3F8F7] p-4 rounded-xl shadow-sm">
                                <i class="fas fa-user-clock text-xl text-[#3C7167]"></i>
                                <span class="font-medium">Pensiunan: {{ $data->pensiunan }} Orang</span>
                            </div>
                            <div class="flex items-center space-x-3 bg-[#F3F8F7] p-4 rounded-xl shadow-sm">
                                <i class="fas fa-bus text-xl text-[#3C7167]"></i>
                                <span class="font-medium">Sopir/Angkutan: {{ $data->sopir_angkutan }} Orang</span>
                            </div>
                            <div class="flex items-center space-x-3 bg-[#F3F8F7] p-4 rounded-xl shadow-sm">
                                <i class="fas fa-hard-hat text-xl text-[#3C7167]"></i>
                                <span class="font-medium">Buruh: {{ $data->buruh }} Orang</span>
                            </div>
                            <div class="flex items-center space-x-3 bg-[#F3F8F7] p-4 rounded-xl shadow-sm">
                                <i class="fas fa-home text-xl text-[#3C7167]"></i>
                                <span class="font-medium">Jasa Persewaan: {{ $data->jasa_persewaan }} Orang</span>
                            </div>
                            <div class="flex items-center space-x-3 bg-[#F3F8F7] p-4 rounded-xl shadow-sm">
                                <i class="fas fa-briefcase text-xl text-[#3C7167]"></i>
                                <span class="font-medium">Swasta: {{ $data->swasta }} Orang</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>


        </div>

    </main>

    @include('layouts.partials.footer')

    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            lucide.createIcons();

            // --- Chart Luas Tanaman Pertanian ---
            const tanamanCtx = document.getElementById('tanamanChart').getContext('2d');
            new Chart(tanamanCtx, {
                type: 'bar',
                data: {
                    labels: ['Padi Sawah', 'Padi Ladang', 'Jagung', 'Palawija', 'Tebu'],
                    datasets: [{
                        label: 'Luas Tanaman (ha)',
                        data: [
                            {{ $data->padi_sawah }},
                            {{ $data->padi_ladang }},
                            {{ $data->jagung }},
                            {{ $data->palawija }},
                            {{ $data->tebu }}
                        ],
                        backgroundColor: [
                            'rgba(34, 197, 94, 0.7)',
                            'rgba(234, 179, 8, 0.7)',
                            'rgba(249, 115, 22, 0.7)',
                            'rgba(168, 85, 247, 0.7)',
                            'rgba(59, 130, 246, 0.7)'
                        ],
                        borderColor: [
                            'rgba(34, 197, 94, 1)',
                            'rgba(234, 179, 8, 1)',
                            'rgba(249, 115, 22, 1)',
                            'rgba(168, 85, 247, 1)',
                            'rgba(59, 130, 246, 1)'
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
                                label: (c) => `Luas: ${c.raw.toLocaleString('id-ID')} ha`
                            }
                        }
                    }
                }
            });

            // --- Chart Mata Pencaharian ---
            const pekerjaanCtx = document.getElementById('pekerjaanChart').getContext('2d');
            new Chart(pekerjaanCtx, {
                type: 'pie',
                data: {
                    labels: ['Petani', 'Pedagang', 'PNS', 'Tukang', 'Guru', 'Bidan/Perawat', 'TNI/Polri',
                        'Pensiunan', 'Sopir/Angkutan', 'Buruh', 'Jasa Persewaan', 'Swasta'
                    ],
                    datasets: [{
                        label: 'Jumlah Orang',
                        data: [
                            {{ $data->petani }},
                            {{ $data->pedagang }},
                            {{ $data->pns }},
                            {{ $data->tukang }},
                            {{ $data->guru }},
                            {{ $data->bidan_perawat }},
                            {{ $data->tni_polri }},
                            {{ $data->pensiunan }},
                            {{ $data->sopir_angkutan }},
                            {{ $data->buruh }},
                            {{ $data->jasa_persewaan }},
                            {{ $data->swasta }}
                        ],
                        backgroundColor: [
                            '#22c55e', '#3b82f6', '#8b5cf6', '#f97316', '#ec4899', '#14b8a6',
                            '#6366f1', '#64748b', '#0ea5e9', '#f59e0b', '#84cc16', '#d946ef'
                        ],
                        hoverOffset: 10
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right',
                            labels: {
                                padding: 15,
                                boxWidth: 12,
                                font: {
                                    size: 12
                                }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const total = context.dataset.data.reduce((acc, val) => acc + val,
                                        0);
                                    const percentage = ((context.raw / total) * 100).toFixed(2);
                                    return `${context.label}: ${context.raw.toLocaleString('id-ID')} Orang (${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });

            // --- Intersection Observer ---
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
