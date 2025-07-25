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
                    <div class="w-55 md:w-82 h-1 bg-[#0C3B2E] mx-auto mt-3"></div>
                    <p class="text-md sm:text-[20px] text-[#0C3B2E] mt-5 px-5 md:px-30">Pemanfaatan lahan pertanian desa
                        timpik.</p>
                </div>
            </div>
        </section>

        <div class="container mx-auto px-6 lg:px-16 space-y-14 mt-[-20px] mb-20 text-[#0C3B2E]"
            style="font-family: 'Poppins', sans-serif;">

            <!-- Luas Tanaman Pertanian -->
            <section class="reveal-on-scroll">
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-xl border border-gray-100">
                    <!-- Legend Keterangan Warna -->
                    <div class="justify-center flex flex-wrap gap-5 items-center mb-4">
                        <div class="flex items-center">
                            <span class="w-4 h-4 rounded-full mr-2 inline-block"
                                style="background: rgba(34, 197, 94, 0.7);"></span>
                            <span class="text-sm">Padi Sawah</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-4 h-4 rounded-full mr-2 inline-block"
                                style="background: rgba(234, 179, 8, 0.7);"></span>
                            <span class="text-sm">Padi Ladang</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-4 h-4 rounded-full mr-2 inline-block"
                                style="background: rgba(249, 115, 22, 0.7);"></span>
                            <span class="text-sm">Jagung</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-4 h-4 rounded-full mr-2 inline-block"
                                style="background: rgba(168, 85, 247, 0.7);"></span>
                            <span class="text-sm">Palawija</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-4 h-4 rounded-full mr-2 inline-block"
                                style="background: rgba(59, 130, 246, 0.7);"></span>
                            <span class="text-sm">Tebu</span>
                        </div>
                    </div>
                    <div class="w-full h-96">
                        <canvas id="tanamanChart"></canvas>
                    </div>
                </div>
            </section>

            <!-- Jenis Ternak (Tabel) -->
            <section class="reveal-on-scroll">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold tracking-tight">Jenis Ternak</h2>
                </div>

                <div class="max-w-4xl mx-auto">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto">
                            <div class="align-middle inline-block min-w-full">
                                <div class="shadow-2xl overflow-hidden border-b border-gray-200 sm:rounded-2xl">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-slate-700">
                                            <tr>
                                                <th
                                                    class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    No
                                                </th>
                                                <th
                                                    class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                    Jenis Ternak
                                                </th>
                                                <th
                                                    class="px-6 py-4 text-right text-xs font-bold text-white uppercase tracking-wider">
                                                    Jumlah (Ekor)
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr class="hover:bg-blue-50 transition-colors duration-200">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1.
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    Kambing</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-right text-gray-800 font-semibold">
                                                    {{ $data->kambing }}</td>
                                            </tr>
                                            <tr class="bg-gray-50 hover:bg-blue-50 transition-colors duration-200">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2.
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    Sapi</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-right text-gray-800 font-semibold">
                                                    {{ $data->sapi }}</td>
                                            </tr>
                                            <tr class="hover:bg-blue-50 transition-colors duration-200">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3.
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    Ayam</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-right text-gray-800 font-semibold">
                                                    {{ $data->ayam }}</td>
                                            </tr>
                                            <tr class="bg-gray-50 hover:bg-blue-50 transition-colors duration-200">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4.
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    Burung</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-right text-gray-800 font-semibold">
                                                    {{ $data->burung }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Pekerjaan / Mata Pencaharian -->
            <section class="reveal-on-scroll">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold tracking-tight">Struktur Mata Pencaharian</h2>
                    <p class="mt-2 text-lg">Distribusi jenis pekerjaan utama masyarakat Desa Timpik.
                    </p>
                </div>
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-xl border border-gray-100">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div class="w-full h-80 md:h-96">
                            <canvas id="pekerjaanChart"></canvas>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm">
                                <thead class="border-b-2 border-gray-200">
                                    <tr>
                                        <th scope="col" class="px-4 py-3 text-left font-semibold text-gray-600">
                                            Jenis Pekerjaan
                                        </th>
                                        <th scope="col" class="px-4 py-3 text-right font-semibold text-gray-600">
                                            Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    <tr>
                                        <td class="px-4 py-3 text-gray-700">Petani</td>
                                        <td class="px-4 py-3 text-gray-800 text-right font-medium">{{ $data->petani }}
                                            Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-gray-700">Pedagang</td>
                                        <td class="px-4 py-3 text-gray-800 text-right font-medium">
                                            {{ $data->pedagang }} Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-gray-700">PNS</td>
                                        <td class="px-4 py-3 text-gray-800 text-right font-medium">{{ $data->pns }}
                                            Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-gray-700">Tukang</td>
                                        <td class="px-4 py-3 text-gray-800 text-right font-medium">{{ $data->tukang }}
                                            Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-gray-700">Guru</td>
                                        <td class="px-4 py-3 text-gray-800 text-right font-medium">{{ $data->guru }}
                                            Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-gray-700">Bidan/Perawat</td>
                                        <td class="px-4 py-3 text-gray-800 text-right font-medium">
                                            {{ $data->bidan_perawat }} Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-gray-700">TNI/Polri</td>
                                        <td class="px-4 py-3 text-gray-800 text-right font-medium">
                                            {{ $data->tni_polri }} Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-gray-700">Pensiunan</td>
                                        <td class="px-4 py-3 text-gray-800 text-right font-medium">
                                            {{ $data->pensiunan }} Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-gray-700">Sopir/Angkutan</td>
                                        <td class="px-4 py-3 text-gray-800 text-right font-medium">
                                            {{ $data->sopir_angkutan }} Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-gray-700">Buruh</td>
                                        <td class="px-4 py-3 text-gray-800 text-right font-medium">{{ $data->buruh }}
                                            Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-gray-700">Jasa Persewaan</td>
                                        <td class="px-4 py-3 text-gray-800 text-right font-medium">
                                            {{ $data->jasa_persewaan }} Orang</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-gray-700">Swasta</td>
                                        <td class="px-4 py-3 text-gray-800 text-right font-medium">{{ $data->swasta }}
                                            Orang</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

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
