<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ekonomi | Desa Timpik</title>

    <link rel="icon" type="image/png" href="{{ asset('/public/images/logo-timpik.png') }}">

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
                <img src="{{ asset('/public/images/timpik_sawah2.png') }}"
                    onerror="this.onerror=null;this.src='https://placehold.co/1920x1080/445566/FFFFFF?text=Latar+Belakang';"
                    alt="Pemandangan sawah Desa Timpik"
                    class="w-full h-full object-cover transform translate-y-10">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#0C3B2E]/60 via-transparent to-transparent"></div>
            <div class="absolute inset-0 bg-black/20"></div>

            <div class="relative z-10 container mx-auto px-6 text-center lg:text-left lg:pl-24">
                <div class="max-w-xl lg:max-w-2xl">
                    <h1 class="text-4xl md:text-5xl lg:text-5xl font-bold text-[#0C3B2E] mt-20 reveal-on-scroll"
                        style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Data Ekonomi
                    </h1>
                    <p class="text-4xl md:text-5xl lg:text-7xl text-white italic reveal-on-scroll"
                        style="font-family: 'Playfair Display', serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Desa <span class="text-[#E8C187]">Timpik</span>
                    </p>
                    <nav class="mt-4 flex justify-center lg:justify-start reveal-on-scroll" aria-label="Breadcrumb">
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

        <div class="container mx-auto px-8 sm:px-12 lg:px-45 space-y-20 mt-[-20px] mb-20 text-[#0C3B2E]" style="font-family: 'Poppins', sans-serif;">

            <!-- LUAS TANAMAN PERTANIAN -->
            <section class="reveal-on-scroll">
                <div class="bg-gradient-to-br from-[#e0f9ee]/80 via-[#fff7e5]/90 to-[#fff] rounded-3xl shadow-2xl p-10 relative overflow-hidden">
                    <!-- Decorative Accent -->
                    <div class="absolute -top-10 -left-10 w-48 h-48 bg-[#bff1d7] opacity-20 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-[#ffe1b7] opacity-25 rounded-full blur-2xl"></div>
                    <div class="flex flex-col md:flex-row gap-10 items-center justify-between z-10 relative">

                        <div class="w-full md:w-1/2 h-80">
                            <canvas id="tanamanChart"></canvas>
                        </div>

                        <div class="w-full md:w-1/2 flex flex-col gap-3">
                            <h3 class="text-2xl font-bold mb-4 flex items-center gap-2">
                                <span class="bg-[#0C3B2E] text-white rounded-full p-2"><i data-lucide="sprout" class="w-6 h-6"></i></span>
                                Data Luas Tanaman Pertanian
                            </h3>
                            <div class="flex flex-col gap-3">
                                @php
                                $tanaman = [
                                    ['label' => 'Padi Sawah', 'value' => $data->padi_sawah, 'color' => 'bg-[#6D9773]'],
                                    ['label' => 'Padi Ladang', 'value' => $data->padi_ladang, 'color' => 'bg-[#0C3B2E]'],
                                    ['label' => 'Jagung', 'value' => $data->jagung, 'color' => 'bg-[#BB8A52]'],
                                    ['label' => 'Palawija', 'value' => $data->palawija, 'color' => 'bg-[#A26769]'],
                                    ['label' => 'Tebu', 'value' => $data->tebu, 'color' => 'bg-[#E0C097]'],
                                ];
                                @endphp
                                @foreach($tanaman as $t)
                                <div class="flex items-center gap-3">
                                    <span class="w-4 h-4 rounded-full shadow-md {{ $t['color'] }}"></span>
                                    <span class="font-semibold text-[#0C3B2E] min-w-[100px]">{{ $t['label'] }}</span>
                                    <span class="flex-1 bg-gray-100 h-2 mx-2 rounded">
                                        <span class="block h-2 rounded transition-all duration-700 {{ $t['color'] }}"
                                            style="width:{{ max(7,min(93,($t['value'] ?? 0) * 2)) }}%"></span>
                                    </span>
                                    <span class="font-bold text-lg text-right" style="font-variant-numeric: tabular-nums;">
                                        {{ number_format($t['value']) }} ha
                                    </span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- JENIS TERNAK -->
            <section>
                <div class="text-center mb-8 reveal-on-scroll">
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight">Populasi Ternak</h2>
                    <p class="text-gray-600 mt-2">Jumlah ternak berdasarkan jenis di Desa Timpik, satuan: ekor.</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-7 max-w-5xl mx-auto reveal-on-scroll">
                    @php
                    $ternak = [
                        [
                            'label' => 'Kambing',
                            'val' => $data->kambing,
                            'icon' => 'mountain',
                            'color' => 'white',
                            'border' => 'border-[#6D9773]' // rgba(109, 151, 115, 1)
                        ],
                        [
                            'label' => 'Sapi',
                            'val' => $data->sapi,
                            'icon' => 'milk',
                            'color' => 'white',
                            'border' => 'border-[#0C3B2E]' // rgba(12, 59, 46, 1)
                        ],
                        [
                            'label' => 'Ayam',
                            'val' => $data->ayam,
                            'icon' => 'egg-fried',
                            'color' => 'white',
                            'border' => 'border-[#BB8A52]' // rgba(187, 138, 82, 1)
                        ],
                        [
                            'label' => 'Burung',
                            'val' => $data->burung,
                            'icon' => 'bird',
                            'color' => 'white',
                            'border' => 'border-[#A26769]' // rgba(162, 103, 105, 1)
                        ]
                    ];

                    @endphp
                    @foreach($ternak as $t)
                    <div class="bg-gradient-to-br {{ $t['color'] }} rounded-2xl p-7 border-t-4 {{ $t['border'] }} shadow-xl flex flex-col items-center hover:-translate-y-1 transition">
                        <div class="bg-white/60 p-4 rounded-full shadow mb-2">
                            <i data-lucide="{{ $t['icon'] }}" class="w-10 h-10 text-[#0C3B2E]"></i>
                        </div>
                        <div class="text-xl font-semibold mb-1">{{ $t['label'] }}</div>
                        <div class="text-2xl font-extrabold text-[#12715D]">{{ number_format($t['val']) }} <span class="text-sm font-semibold">ekor</span></div>
                    </div>
                    @endforeach
                </div>
            </section>

            <!-- STRUKTUR MATA PENCAHARIAN -->
            <section class="reveal-on-scroll">
                <div class="bg-gradient-to-br from-[#e0f9ee]/80 via-[#fff7e5]/90 to-[#fff] rounded-3xl shadow-2xl p-6">
                    <div class="text-center mb-6">
                        <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-[#12715D]">Struktur Mata Pencaharian</h2>
                        <p class="mt-2 text-base md:text-lg text-gray-600">Distribusi jenis pekerjaan utama masyarakat Desa Timpik.</p>
                    </div>
                    <div class="flex flex-col md:flex-row gap-6 items-center">
                        <!-- Chart -->
                        <div class="w-full md:w-1/2 h-72 md:h-80">
                            <canvas id="pekerjaanChart"></canvas>
                        </div>
                        <!-- List pekerjaan -->
                        <div class="w-full md:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-3">
                            @php
                            $pekerjaan = [
                                ['icon'=>'tractor','label'=>'Petani','val'=>$data->petani],
                                ['icon'=>'store','label'=>'Pedagang','val'=>$data->pedagang],
                                ['icon'=>'badge-check','label'=>'PNS','val'=>$data->pns],
                                ['icon'=>'hammer','label'=>'Tukang','val'=>$data->tukang],
                                ['icon'=>'book','label'=>'Guru','val'=>$data->guru],
                                ['icon'=>'stethoscope','label'=>'Bidan/Perawat','val'=>$data->bidan_perawat],
                                ['icon'=>'shield','label'=>'TNI/Polri','val'=>$data->tni_polri],
                                ['icon'=>'user-check','label'=>'Pensiunan','val'=>$data->pensiunan],
                                ['icon'=>'bus','label'=>'Sopir/Angkutan','val'=>$data->sopir_angkutan],
                                ['icon'=>'hammer','label'=>'Buruh','val'=>$data->buruh],
                                ['icon'=>'home','label'=>'Jasa Persewaan','val'=>$data->jasa_persewaan],
                                ['icon'=>'briefcase','label'=>'Swasta','val'=>$data->swasta],
                            ];
                            @endphp
                            @foreach($pekerjaan as $p)
                            <div class="flex items-center gap-3 bg-white/90 p-2 rounded-xl shadow-sm hover:shadow-lg transition border border-[#E8C187]/20">
                                <i data-lucide="{{ $p['icon'] }}" class="w-5 h-5 text-[#12715D]"></i>
                                <span class="flex-1 font-semibold text-sm">{{ $p['label'] }}</span>
                                <span class="font-bold text-[#12715D] text-sm">{{ number_format($p['val']) }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
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
                            'rgba(109, 151, 115, 0.7)',  // #6D9773
                            'rgba(12, 59, 46, 0.7)',     // #0C3B2E
                            'rgba(187, 138, 82, 0.7)',   // #BB8A52
                            'rgba(162, 103, 105, 0.7)',  // #A26769
                            'rgba(224, 192, 151, 0.7)',  // #E0C097
                        ],
                        borderColor: [
                            'rgba(109, 151, 115, 1)',    // #6D9773
                            'rgba(12, 59, 46, 1)',       // #0C3B2E
                            'rgba(187, 138, 82, 1)',     // #BB8A52
                            'rgba(162, 103, 105, 1)',    // #A26769
                            'rgba(224, 192, 151, 1)',    // #E0C097
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
                            '#6D9773',
                            '#BB8A52',
                            '#A26769',
                            '#E0C097',
                            '#4C4B16',
                            '#0C3B2E',
                            '#7C9D96',
                            '#BCA371',
                            '#A47148',
                            '#5A6650',
                            '#AC8E7E',
                            '#8F7E4F'
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
