<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi | Desa Timpik</title>

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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

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

        .slider-container {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .slider-container::-webkit-scrollbar {
            display: none;
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

    <main>
        <!-- Hero Section -->
        <section class="relative h-80 md:h-120 w-full flex items-center justify-center text-white -mt-20">
            <div class="absolute inset-0 overflow-hidden">
                <img src="{{ asset('images/timpik_sawah2.jpg') }}"
                    onerror="this.onerror=null;this.src='https://placehold.co/1920x1080/445566/FFFFFF?text=Latar+Belakang';"
                    alt="Pemandangan sawah Desa Timpik"
                    class="w-full h-full object-cover transform translate-y-10">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#0C3B2E]/60 via-transparent to-transparent"></div>
            <div class="absolute inset-0 bg-black/20"></div>

            <div class="relative z-10 container mx-auto px-6 text-center lg:text-left lg:pl-24">
                <div class="max-w-xl lg:max-w-2xl">
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-[#0C3B2E] mt-20 reveal-on-scroll"
                        style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.4);">
                        Tata Kelola
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
                                    <span class="ml-2 text-sm font-medium text-gray-300">Profil Desa</span>
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
                                    <span class="ml-2 text-sm font-semibold text-white">Tata Kelola Desa</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Visi dan Misi -->
        <section class="py-12 md:py-10 bg-white">
            <div class="container mx-auto px-8 sm:px-12 lg:px-45">
                <div class="mb-12 text-center reveal-on-scroll">
                    <h2 class="text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-[#0C3B2E] via-[#12715D] to-[#E8C187] bg-clip-text text-transparent inline-block mb-2"
                        style="font-family: 'Poppins', sans-serif;">Visi & Misi</h2>
                    <div class="w-24 h-1 mx-auto bg-gradient-to-r from-[#12715D] to-[#E8C187] rounded-full mb-2"></div>
                    <p class="text-gray-500 text-base max-w-2xl mx-auto">Menuju desa cerdas, berdaya saing dan berbudaya
                        untuk masa depan yang lebih baik.</p>
                </div>

                <div class="space-y-8" style="font-family: 'Poppins', sans-serif;">
                    <div class="bg-[#1A3A31] text-[#C8C7CC] p-8 md:p-5 rounded-2xl shadow-xl reveal-on-scroll">
                        <h3 class="text-3xl md:text-4xl font-bold text-center mb-4">
                            Visi
                        </h3>
                        <p class="text-center text-base md:text-lg text-[#C8C7CC] max-w-5xl mx-auto leading-relaxed">
                            "TERWUJUDNYA DESA TIMPIK YANG AMAN TENTERAM MAJU MAKMUR DAN BERKEADILAN"
                        </p>
                    </div>
                    <div class="bg-[#1A3A31] text-[#C8C7CC] p-8 md:p-5 rounded-2xl shadow-xl reveal-on-scroll">
                        <h3 class="text-3xl md:text-4xl font-bold text-center mb-6">
                            Misi
                        </h3>
                        <ol class="list-[upper-alpha] pl-3 space-y-2 text-[#C8C7CC] max-w-5xl mx-auto text-base md:text-lg text-justify">
                            <li>Melanjutkan program-program yang telah dilaksanakan oleh pemerintah Desa Timpik periode lalu sebagaimana tercantum dalam RPJMDes Timpik.</li>
                            <li>Pemberdayaan semua potensi yang ada di masyarakat yang meliputi:
                                <ol class="list-decimal ml-6">
                                    <li>Pemberdayaan Sumber Daya Manusia (SDM)</li>
                                    <li>Pemberdayaan Sumber Daya Alam (SDA)</li>
                                    <li>Pemberdayaan Ekonomi</li>
                                </ol>
                            </li>
                            <li>Menciptakan kondisi masyarakat Desa Timpik yang aman, tertib, guyub dan rukun dalam kehidupan bermasyarakat dengan berpegang prinsip-prinsip yaitu:
                                <ol class="list-decimal ml-6">
                                    <li>Duduk sama rendah berdiri sama tinggi</li>
                                    <li>Ringan sama dijinjing berat sama dipikul</li>
                                    <li>Sepi ing pamrih, rame ing gawe, narimo ing pandum</li>
                                </ol>
                            </li>
                            <li>Optimalisasi penyelenggaraan pemerintahan Desa Timpik yang meliputi:
                                <ol class="list-decimal ml-6">
                                    <li>Pemerintah yang transparan dan akuntabel</li>
                                    <li>Pelayanan kepada masyarakat yang prima: cepat, tepat, dan benar</li>
                                    <li>Pelaksanaan pembangunan yang berkesinambungan, serta mengedepankan partisipasi dan gotong royong</li>
                                </ol>
                            </li>
                        </ol>

                    </div>
                </div>
            </div>
        </section>

        <!-- Struktur Organisasi -->
        <section class="py-12 md:py-10" style="font-family: 'Poppins', sans-serif;">
            <div class="container mx-auto px-8 sm:px-12 lg:px-45">
                <div class="mb-10 text-center reveal-on-scroll">
                    <h2 class="text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-[#0C3B2E] via-[#12715D] to-[#E8C187] bg-clip-text text-transparent inline-block mb-2"
                        style="font-family: 'Poppins', sans-serif; line-height: 1.15; padding-bottom: 2px;">
                        Struktur <span class="whitespace-nowrap">Organisasi</span>
                    </h2>
                    <div class="w-24 h-1 mx-auto bg-gradient-to-r from-[#12715D] to-[#E8C187] rounded-full mb-2"></div>
                </div>

                <div
                    class="max-w-5xl mx-auto p-4 rounded-2xl shadow-lg border border-gray-200/80 reveal-on-scroll">
                    <img src="{{ asset('images/struktur-org.png') }}"
                        onerror="this.onerror=null;this.src='https://placehold.co/1200x800/E0E0E0/BDBDBD?text=Bagan+Struktur+Organisasi';"
                        alt="Bagan Struktur Organisasi Desa Timpik" class="w-full h-auto">
                </div>
            </div>
        </section>

        <!-- Aparatur Desa -->
        @php
            use App\Models\Aparatur;
            $aparaturs = Aparatur::all();
        @endphp

        <section id="aparatur" class="py-12 md:py-10 bg-white" x-data="slider()">
            <div class="container mx-auto px-8 sm:px-12 lg:px-45">
                <div class="mb-12 text-center reveal-on-scroll">
                    <h2 class="text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-[#0C3B2E] via-[#12715D] to-[#E8C187] bg-clip-text text-transparent inline-block mb-2"
                        style="font-family: 'Poppins', sans-serif;">Aparatur Desa</h2>
                    <div class="w-24 h-1 mx-auto bg-gradient-to-r from-[#12715D] to-[#E8C187] rounded-full mb-2"></div>
                </div>

                <div class="overflow-hidden p-2 mt-[-4px] reveal-on-scroll">
                    <div x-ref="slider" @scroll.debounce.100ms="updateButtons()"
                        class="rounded-3xl flex overflow-x-auto gap-2 slider-container snap-x snap-mandatory scroll-smooth">

                        @forelse ($aparaturs as $aparatur)
                            <div class="flex-shrink-0 w-65 h-80 snap-start p-2"
                                style="font-family: 'Poppins', sans-serif;">
                                <div
                                    class="bg-gradient-to-br from-[#f7fbe9] via-[#ebf6f2] to-[#f9f6f0] rounded-lg shadow-md overflow-hidden h-full group transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg border border-gray-300">
                                    <img src="{{ asset('storage/' . $aparatur->foto) }}" alt="{{ $aparatur->nama }}"
                                        class="mt-4 w-auto max-w-full max-h-55 mx-auto object-contain">
                                    <div class="px-3 text-center mt-3 mb-4">
                                        <h4 class="font-bold text-[17px] text-[#0C3B2E] leading-snug">
                                            {{ Str::limit($aparatur->nama, 22, '...') }}
                                        </h4>
                                        <p class="text-sm text-[#0C3B2E] leading-tight">
                                            {{ Str::limit($aparatur->jabatan, 27, '...') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="flex justify-center items-center w-full h-40">
                                <p class="text-center text-gray-500">Belum ada data aparatur desa.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Tombol Panah -->
                <div class="flex justify-center mt-6 mb-4 sm:mb-6 space-x-2 reveal-on-scroll">
                    <button @click="scroll('left')"
                        class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 transition-colors disabled:opacity-50"
                        :disabled="atStart"><i data-lucide="arrow-left" class="w-5 h-5"></i></button>
                    <button @click="scroll('right')"
                        class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 transition-colors disabled:opacity-50"
                        :disabled="atEnd"><i data-lucide="arrow-right" class="w-5 h-5"></i></button>
                </div>
            </div>
        </section>
    </main>

    <button id="scrollTopBtn"
        class="fixed bottom-6 right-6 z-[100] bg-gray-300/60 hover:bg-gray-400/80 text-white rounded-xl p-2 shadow-md hide transition backdrop-blur-sm"
        aria-label="Scroll to top">
        <i data-lucide="arrow-up" class="w-6 h-6 text-gray-700"></i>
    </button>

    @include('layouts.partials.footer')

    <script>
        lucide.createIcons();

        document.addEventListener('DOMContentLoaded', () => {
            if (window.lucide) lucide.createIcons();

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

        window.slider = function() {
            return {
                atStart: true,
                atEnd: false,

                init() {
                    this.$nextTick(() => {
                        this.updateButtons();
                    });
                },

                scroll(direction) {
                    const container = this.$refs.slider;
                    const scrollAmount = container.clientWidth * 0.75;

                    if (direction === 'left') {
                        container.scrollLeft -= scrollAmount;
                    } else if (direction === 'right') {
                        container.scrollLeft += scrollAmount;
                    }

                    this.updateButtons();
                },

                updateButtons() {
                    const container = this.$refs.slider;
                    this.atStart = container.scrollLeft <= 10;
                    this.atEnd = container.scrollLeft + container.clientWidth >= container.scrollWidth - 10;
                }
            }
        }

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
    </script>

</body>

</html>
