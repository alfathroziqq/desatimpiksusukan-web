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

        html {
            scroll-behavior: smooth;
        }

        #scrollTopBtn {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.4s ease, transform 0.4s ease;
        }

        #scrollTopBtn.show {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        #scrollTopBtn.hide {
            opacity: 0;
            transform: translateY(20px);
            pointer-events: none;
        }
    </style>
</head>

<body>

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
                    <h1 class="text-4xl md:text-5xl lg:text-5xl font-bold text-[#0C3B2E] mt-20 reveal-on-scroll"
                        style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Data Keagamaan
                    </h1>
                    <p class="text-4xl md:text-5xl lg:text-7xl text-white italic reveal-on-scroll"
                        style="font-family: 'Playfair Display', serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Desa <span class="text-[#E8C187]">Timpik</span>
                    </p>
                    <nav class="mt-4 flex justify-center lg:justify-start reveal-on-scroll" aria-label="Breadcrumb">
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
                    <div class="mx-auto mt-4 w-24 md:w-48 h-1 bg-gradient-to-r from-[#C7F3E7] via-[#0C3B2E] to-[#E8C187] rounded-full mb-1">
                    </div>
                    <p class="text-md sm:text-[20px] text-[#0C3B2E] mt-5 px-5 md:px-30">Informasi yang mencakup jumlah pemeluk agama, sebaran agama yang dianut penduduk, serta fasilitas keagamaan seperti tempat ibadah dan kegiatan keagamaan di desa timpik.</p>
                </div>
            </div>
        </section>

        <div class="container mx-auto px-8 sm:px-12 lg:px-45 space-y-14 mt-[-20px] mb-20 text-[#0C3B2E]" style="font-family: 'Poppins', sans-serif;">

            <!-- Pemeluk Agama Card View -->
            <section>
                <div class="bg-gradient-to-br from-[#e0f9ee]/80 via-[#fff7e5]/90 to-[#fff] p-6 sm:p-8 rounded-3xl shadow-xl border border-[#E8C187]/30">
                    <div class="mb-8 text-center reveal-on-scroll">
                        <h3 class="text-2xl font-bold text-[#0C3B2E] mb-2 flex items-center justify-center gap-2">
                            <i data-lucide="users" class="w-6 h-6 text-[#E8C187]"></i>
                            Jumlah Pemeluk Agama
                        </h3>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        @php
                            $agamaList = [
                                ['label' => 'Islam', 'jumlah' => $data->islam, 'icon' => 'moon', 'color' => 'green'],
                                ['label' => 'Katolik', 'jumlah' => $data->katolik, 'icon' => 'cross', 'color' => 'red'],
                                ['label' => 'Kristen', 'jumlah' => $data->kristen, 'icon' => 'book-open', 'color' => 'blue'],
                                ['label' => 'Hindu', 'jumlah' => $data->hindu, 'icon' => 'flame', 'color' => 'amber'],
                                ['label' => 'Budha', 'jumlah' => $data->budha, 'icon' => 'circle', 'color' => 'yellow'],
                                ['label' => 'Kepercayaan Lain', 'jumlah' => $data->kepercayaan, 'icon' => 'stars', 'color' => 'indigo'],
                            ];
                        @endphp

                        @foreach ($agamaList as $agama)
                            <div class="bg-gradient-to-tr from-{{ $agama['color'] }}-100 to-white border-t-4 border-{{ $agama['color'] }}-500 rounded-2xl shadow-md p-5 flex items-center justify-between hover:-translate-y-1 transition duration-300 reveal-on-scroll">
                                <div>
                                    <p class="text-sm text-gray-600">{{ $agama['label'] }}</p>
                                    <h4 class="text-2xl font-bold text-[#0C3B2E] mt-1">{{ number_format($agama['jumlah']) }} Orang</h4>
                                </div>
                                <div class="p-3 bg-{{ $agama['color'] }}-100 rounded-full shadow">
                                    <i data-lucide="{{ $agama['icon'] ?? 'help-circle' }}" class="w-6 h-6 text-{{ $agama['color'] }}-600"></i>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Chart -->
                    <div class="mt-10 w-full h-96 reveal-on-scroll">
                        <canvas id="agamaChart"></canvas>
                    </div>
                </div>
            </section>

            <!-- Sarana Peribadatan -->
            <section>
                <div class="text-center mb-10 reveal-on-scroll">
                    <h2 class="text-3xl sm:text-4xl font-bold text-[#0C3B2E]">Sarana Peribadatan</h2>
                    <p class="mt-2 text-lg text-gray-600">Fasilitas tempat ibadah yang tersedia di Desa Timpik</p>
                </div>
                <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    @php
                        $sarana = [
                            ['label' => 'Masjid / Musholla', 'jumlah' => $data->masjid, 'icon' => 'moon', 'color' => 'green'],
                            ['label' => 'Gereja', 'jumlah' => $data->gereja, 'icon' => 'church', 'color' => 'blue'],
                            ['label' => 'Pura', 'jumlah' => $data->pura, 'icon' => 'castle', 'color' => 'red'],
                            ['label' => 'Vihara', 'jumlah' => $data->vihara, 'icon' => 'tent', 'color' => 'purple'],
                        ];
                    @endphp

                    @foreach ($sarana as $item)
                        <div class="bg-gradient-to-tr from-white to-{{ $item['color'] }}-50 p-6 rounded-3xl shadow-xl border-t-4 border-{{ $item['color'] }}-600 transition-all hover:shadow-2xl hover:-translate-y-1 text-center reveal-on-scroll">
                            <div class="mx-auto bg-{{ $item['color'] }}-100 text-{{ $item['color'] }}-600 w-20 h-20 rounded-full flex items-center justify-center mb-4">
                                <i data-lucide="{{ $item['icon'] }}" class="w-10 h-10"></i>
                            </div>
                            <h3 class="text-xl font-bold text-[#0C3B2E]">{{ $item['label'] }}</h3>
                            <p class="text-3xl font-extrabold text-{{ $item['color'] }}-600 mt-2">{{ number_format($item['jumlah']) }}</p>
                            <p class="text-sm text-gray-500">Tempat</p>
                        </div>
                    @endforeach
                </div>
            </section>


        </div>

    </main>

    <button id="scrollTopBtn"
        class="fixed bottom-6 right-6 z-[100] bg-gray-300/60 hover:bg-gray-400/80 text-white rounded-xl p-2 shadow-md hide transition backdrop-blur-sm"
        aria-label="Scroll to top">
        <i data-lucide="arrow-up" class="w-6 h-6 text-gray-700"></i>
    </button>

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
                            'rgba(109, 151, 115, 0.7)',  // #6D9773
                            'rgba(12, 59, 46, 0.7)',     // #0C3B2E
                            'rgba(187, 138, 82, 0.7)',   // #BB8A52
                            'rgba(162, 103, 105, 0.7)',  // #A26769
                            'rgba(224, 192, 151, 0.7)',  // #E0C097
                            'rgba(76, 75, 22, 0.7)'      // #4C4B16
                        ],
                        borderColor: [
                            'rgba(109, 151, 115, 1)',    // #6D9773
                            'rgba(12, 59, 46, 1)',       // #0C3B2E
                            'rgba(187, 138, 82, 1)',     // #BB8A52
                            'rgba(162, 103, 105, 1)',    // #A26769
                            'rgba(224, 192, 151, 1)',    // #E0C097
                            'rgba(76, 75, 22, 1)'        // #4C4B16
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

            const scrollTopBtn = document.getElementById("scrollTopBtn");

            window.addEventListener("scroll", () => {
                if (window.scrollY > 200) {
                    scrollTopBtn.classList.remove("hide");
                    scrollTopBtn.classList.add("show");
                } else {
                    scrollTopBtn.classList.remove("show");
                    scrollTopBtn.classList.add("hide");
                }
            });

            scrollTopBtn.addEventListener("click", () => {
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        });
    </script>

</body>

</html>
