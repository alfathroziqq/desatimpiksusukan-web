<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Keagamaan | Desa Timpik</title>

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
        use App\Models\DataKeagamaan;

        $data = DataKeagamaan::latest()->first() ?? (object)[
            'islam' => 0,
            'katolik' => 0,
            'kristen' => 0,
            'hindu' => 0,
            'budha' => 0,
            'kepercayaan' => 0,
            'masjid' => 0,
            'gereja' => 0,
            'pura' => 0,
            'vihara' => 0,
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
                                    <span class="ml-2 text-sm font-semibold text-white">Data Keagamaan</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Data Keagamaan Section -->
        <section class="py-12 md:py-10 bg-white" style="font-family: 'Poppins', sans-serif;">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-5 reveal-on-scroll">
                    <h2 class="text-3xl sm:text-[45px] font-bold text-[#0C3B2E]">Data Keagamaan</h2>
                    <div class="w-70 md:w-105 h-1 bg-[#0C3B2E] mx-auto mt-3"></div>
                    <p class="text-md sm:text-[20px] text-[#0C3B2E] mt-5 px-5 md:px-30">Informasi yang mencakup jumlah pemeluk agama, sebaran agama yang dianut penduduk, serta fasilitas keagamaan seperti tempat ibadah dan kegiatan keagamaan di desa timpik.</p>
                </div>
            </div>
        </section>

        <div class="container mx-auto px-6 lg:px-16 space-y-14 mt-[-20px] mb-20 text-[#0C3B2E]" style="font-family: 'Poppins', sans-serif;">

            <!-- Jumlah Pemeluk Agama -->
            <section class="reveal-on-scroll">
                <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-xl border border-gray-100">
                    <div class="overflow-x-auto mb-8">
                        <table class="min-w-full text-sm">
                            <thead class="border-b-2 border-gray-200">
                                <tr>
                                    <th scope="col" class="px-4 py-3 text-left font-semibold text-gray-600">Agama
                                    </th>
                                    <th scope="col" class="px-4 py-3 text-right font-semibold text-gray-600">
                                        Jumlah</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr>
                                    <td class="px-4 py-3 text-gray-700">Islam</td>
                                    <td class="px-4 py-3 text-gray-800 text-right font-medium">{{ number_format($data->islam) }} Orang</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-gray-700">Katolik</td>
                                    <td class="px-4 py-3 text-gray-800 text-right font-medium">{{ number_format($data->katolik) }} Orang</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-gray-700">Kristen</td>
                                    <td class="px-4 py-3 text-gray-800 text-right font-medium">{{ number_format($data->kristen) }} Orang</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-gray-700">Hindu</td>
                                    <td class="px-4 py-3 text-gray-800 text-right font-medium">{{ number_format($data->hindu) }} Orang</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-gray-700">Budha</td>
                                    <td class="px-4 py-3 text-gray-800 text-right font-medium">{{ number_format($data->budha) }} Orang</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-gray-700">Aliran Kepercayaan Lainnya</td>
                                    <td class="px-4 py-3 text-gray-800 text-right font-medium">{{ number_format($data->kepercayaan) }} Orang</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="w-full h-96">
                        <canvas id="agamaChart"></canvas>
                    </div>
                </div>
            </section>

            <!-- Sarana Peribadatan -->
            <section class="reveal-on-scroll">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold tracking-tight">Sarana Peribadatan</h2>
                    <p class="mt-2 text-lg">Fasilitas tempat ibadah yang tersedia di Desa Kunden.</p>
                </div>
                <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="bg-white p-6 rounded-xl shadow-lg border hover:border-green-500 hover:shadow-xl transition-all duration-300 text-center">
                        <div
                            class="mx-auto bg-green-100 text-green-600 w-20 h-20 rounded-full flex items-center justify-center mb-4">
                            <i data-lucide="moon" class="w-10 h-10"></i>
                        </div>
                        <h3 class="text-xl font-bold">Masjid / Musholla</h3>
                        <p class="text-3xl font-extrabold text-green-600 mt-2">{{ number_format($data->masjid) }}</p>
                        <p class="text-sm text-gray-500">Buah</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-xl shadow-lg border hover:border-blue-500 hover:shadow-xl transition-all duration-300 text-center">
                        <div
                            class="mx-auto bg-blue-100 text-blue-600 w-20 h-20 rounded-full flex items-center justify-center mb-4">
                            <i data-lucide="church" class="w-10 h-10"></i>
                        </div>
                        <h3 class="text-xl font-bold">Gereja</h3>
                        <p class="text-3xl font-extrabold text-blue-600 mt-2">{{ number_format($data->gereja) }}</p>
                        <p class="text-sm text-gray-500">Buah</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-xl shadow-lg border hover:border-red-500 hover:shadow-xl transition-all duration-300 text-center">
                        <div
                            class="mx-auto bg-red-100 text-red-600 w-20 h-20 rounded-full flex items-center justify-center mb-4">
                            <i data-lucide="castle" class="w-10 h-10"></i>
                        </div>
                        <h3 class="text-xl font-bold">Pura</h3>
                        <p class="text-3xl font-extrabold text-red-600 mt-2">{{ number_format($data->pura) }}</p>
                        <p class="text-sm text-gray-500">Buah</p>
                    </div>
                    <div
                        class="bg-white p-6 rounded-xl shadow-lg border hover:border-purple-500 hover:shadow-xl transition-all duration-300 text-center">
                        <div
                            class="mx-auto bg-purple-100 text-purple-600 w-20 h-20 rounded-full flex items-center justify-center mb-4">
                            <i data-lucide="tent" class="w-10 h-10"></i>
                        </div>
                        <h3 class="text-xl font-bold">Vihara</h3>
                        <p class="text-3xl font-extrabold text-purple-600 mt-2">{{ number_format($data->vihara) }}</p>
                        <p class="text-sm text-gray-500">Buah</p>
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

            // --- Chart Pemeluk Agama ---
            const agamaCtx = document.getElementById('agamaChart').getContext('2d');
            new Chart(agamaCtx, {
                type: 'bar',
                data: {
                    labels: ['Islam', 'Katolik', 'Kristen', 'Hindu', 'Budha', 'Lainnya'],
                    datasets: [{
                        label: 'Jumlah Pemeluk',
                        data: [
                            @json($data->islam),
                            @json($data->katolik),
                            @json($data->kristen),
                            @json($data->hindu),
                            @json($data->budha),
                            @json($data->kepercayaan)
                        ],
                        backgroundColor: [
                            'rgba(16, 185, 129, 0.7)',
                            'rgba(168, 85, 247, 0.7)',
                            'rgba(59, 130, 246, 0.7)',
                            'rgba(249, 115, 22, 0.7)',
                            'rgba(234, 179, 8, 0.7)',
                            'rgba(107, 114, 128, 0.7)'
                        ],
                        borderColor: [
                            'rgba(16, 185, 129, 1)',
                            'rgba(168, 85, 247, 1)',
                            'rgba(59, 130, 246, 1)',
                            'rgba(249, 115, 22, 1)',
                            'rgba(234, 179, 8, 1)',
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
                                label: (c) => `Jumlah: ${c.raw.toLocaleString('id-ID')} Orang`
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
