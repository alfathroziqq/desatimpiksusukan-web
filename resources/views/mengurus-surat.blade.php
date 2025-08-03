<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengurus Surat Masuk & Keluar | Desa Timpik</title>

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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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

<body class="bg-gray-50">

    @include('layouts.partials.header')

    <main>
        <div class="container mx-auto px-6 lg:px-16 py-12 font-['Poppins']">

            <!-- Breadcrumbs -->
            <div class="mb-6 text-[15px] font-semibold text-[#0C3B2E]">
                <a href="{{ route('welcome') }}" class="hover:text-[#DBAA7C]">Home</a>
                <span class="mx-2">></span>
                <span class="text-[#0C3B2E]">Layanan Publik</span>
                <span class="mx-2">></span>
                <span class="text-[#DBAA7C]">Surat Masuk & Keluar</span>
            </div>

            <div class="container mx-auto px-2 sm:px-12 lg:px-40 py-8" x-data="{ modalOpen: false, modalImg: '' }">
                <div class="mt-[-30px] mb-6 reveal-on-scroll max-w-2xl w-full text-center mx-auto">
                    <h1 class="text-3xl md:text-5xl font-extrabold text-[#0C3B2E] mb-3 drop-shadow"
                        style="font-family: 'Poppins', sans-serif;">
                        Alur Pengurusan Surat Masuk & Keluar
                    </h1>

                    <div
                        class="w-24 md:w-40 h-1 mx-auto bg-gradient-to-r from-[#C7F3E7] via-[#0C3B2E] to-[#F9DCC1] rounded-lg">
                    </div>

                    <p class="mt-4 text-[#155145] text-md md:text-lg mx-auto">
                        Berikut alur resmi pelayanan surat-menyurat di <b>Desa Timpik</b>. Layanan ini dibuat untuk
                        memudahkan dan mempercepat pengelolaan surat masuk maupun keluar, demi keterbukaan dan
                        tertib administrasi desa.
                    </p>
                </div>

                <!-- Tips -->
                <div
                    class="bg-[#E8C187]/30 border-l-4 border-[#C2977D] text-[#0C3B2E] px-4 py-3 rounded-xl mb-8 flex items-center gap-3 shadow-sm max-w-3xl mx-auto reveal-on-scroll">
                    <i data-lucide="alert-circle" class="w-6 h-6"></i>
                    <span class="text-sm md:text-base">
                        Tips: Bawa dokumen asli & fotokopi untuk kelancaran proses surat. Pelayanan buka
                            Senin–Jumat, 08.00–14.00 WIB.
                    </span>
                </div>

                <!-- Surat Masuk -->
                <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center mb-16 reveal-on-scroll w-full max-w-4xl mx-auto">

                    <div class="flex justify-center">
                        <div
                            class="relative group w-full max-w-xl md:max-w-2xl lg:max-w-3xl mx-auto h-64 md:h-[320px]">
                            <img src="{{ asset('images/surat-masuk.jpg') }}" alt="Alur Surat Masuk"
                                class="w-full h-full object-cover rounded-3xl shadow-xl border-4 border-[#C7F3E7]/70 group-hover:scale-105 transition-all duration-300 bg-white/50 cursor-pointer"
                                @click="modalOpen = true; modalImg = '{{ asset('images/surat-masuk.jpg') }}'">
                            <div
                                class="absolute inset-0 bg-gradient-to-tr from-[#C7F3E7]/10 to-transparent rounded-3xl pointer-events-none">
                            </div>
                        </div>
                    </div>

                    <div class="mx-auto">
                        <h2
                            class="text-2xl md:text-3xl font-bold text-[#12715D] mb-4 flex items-center gap-2 justify-center md:justify-start">
                            <i data-lucide="inbox" class="w-7 h-7 text-[#C2977D]"></i>
                            Alur Surat Masuk
                        </h2>
                        <ol class="space-y-5 pl-3 border-l-4 border-[#E8C187]/80">
                            <li>
                                <span class="font-semibold text-[#0C3B2E]">1. Penerimaan Surat</span>
                                <div class="text-[#155145] text-sm ml-4">
                                    Surat masuk diterima oleh <b>Unit Kearsipan (Sekdes)</b>.
                                </div>
                            </li>
                            <li>
                                <span class="font-semibold text-[#0C3B2E]">2. Pencatatan Surat</span>
                                <div class="text-[#155145] text-sm ml-4">
                                    Surat dicatat dalam <b>Buku Kendali Surat Masuk</b>.
                                </div>
                            </li>
                            <li>
                                <span class="font-semibold text-[#0C3B2E]">3. Disposisi Kepala Desa</span>
                                <div class="text-[#155145] text-sm ml-4">
                                    Surat diteruskan kepada <b>Kepala Desa</b> untuk diberikan <b>Lembar
                                        Disposisi</b>.
                                </div>
                            </li>
                            <li>
                                <span class="font-semibold text-[#0C3B2E]">4. Pengendalian & Distribusi</span>
                                <div class="text-[#155145] text-sm ml-4">
                                    Surat yang sudah didisposisi dikendalikan dan didistribusikan ke <b>Unit
                                        Pengelola (KAUR/KADUS)</b> sesuai disposisi.
                                </div>
                            </li>
                            <li>
                                <span class="font-semibold text-[#0C3B2E]">5. Tindak Lanjut</span>
                                <div class="text-[#155145] text-sm ml-4">
                                    Unit terkait melakukan tindak lanjut sesuai instruksi/disposisi yang diterima.
                                </div>
                            </li>
                        </ol>
                    </div>

                </div>

                <!-- Surat Keluar -->
                <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center reveal-on-scroll w-full max-w-4xl mx-auto">

                    <div class="order-2 md:order-1 mx-auto">
                        <h2
                            class="text-2xl md:text-3xl font-bold text-[#12715D] mb-4 flex items-center gap-2 justify-center md:justify-start">
                            <i data-lucide="send" class="w-7 h-7 text-[#E8C187]"></i>
                            Alur Surat Keluar
                        </h2>

                        <ol class="space-y-5 pl-3 border-l-4 border-[#C7F3E7]/80">
                            <li>
                                <span class="font-semibold text-[#0C3B2E]">1. Permohonan/Pembuatan Surat</span>
                                <div class="text-[#155145] text-sm ml-4">
                                    Permintaan surat dibuat oleh <b>Unit Pengelola (KAUR/KADUS)</b>.
                                </div>
                            </li>
                            <li>
                                <span class="font-semibold text-[#0C3B2E]">2. Verifikasi & Pengajuan</span>
                                <div class="text-[#155145] text-sm ml-4">
                                    Surat diajukan ke <b>Sekdes/Unit Kearsipan</b> untuk diverifikasi dan dicatat di
                                    <b>Buku Kendali Surat Keluar</b>.
                                </div>
                            </li>
                            <li>
                                <span class="font-semibold text-[#0C3B2E]">3. Persetujuan Kepala Desa</span>
                                <div class="text-[#155145] text-sm ml-4">
                                    Surat diserahkan ke <b>Kepala Desa</b> untuk diperiksa dan ditandatangani.
                                </div>
                            </li>
                            <li>
                                <span class="font-semibold text-[#0C3B2E]">4. Pengendalian & Expedisi</span>
                                <div class="text-[#155145] text-sm ml-4">
                                    Surat yang sudah ditandatangani dicatat pada <b>Buku Expedisi</b> lalu
                                    didistribusikan ke <b>Instansi Tujuan</b>.
                                </div>
                            </li>
                            <li>
                                <span class="font-semibold text-[#0C3B2E]">5. Penyampaian Surat</span>
                                <div class="text-[#155145] text-sm ml-4">
                                    Surat keluar diterima oleh instansi/pihak tujuan.
                                </div>
                            </li>
                        </ol>

                    </div>

                    <div class="flex justify-center order-1 md:order-2">
                        <div
                            class="relative group w-full max-w-xl md:max-w-2xl lg:max-w-3xl mx-auto h-64 md:h-[320px]">
                            <img src="{{ asset('images/surat-keluar.jpg') }}" alt="Alur Surat Keluar"
                                class="w-full h-full object-cover rounded-3xl shadow-xl border-4 border-[#E8C187]/70 group-hover:scale-105 transition-all duration-300 bg-white/50 cursor-pointer"
                                @click="modalOpen = true; modalImg = '{{ asset('images/surat-keluar.jpg') }}'">
                            <div
                                class="absolute inset-0 bg-gradient-to-tr from-[#E8C187]/10 to-transparent rounded-3xl pointer-events-none">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- FAQ Mini -->
                <div class="mt-14 w-full max-w-4xl mx-auto" x-data="{ openFaq: null }">
                    <h3 class="text-lg font-bold text-[#12715D] mb-4 flex items-center gap-2 reveal-on-scroll">
                        <i data-lucide="help-circle" class="w-6 h-6 text-[#E8C187]"></i>
                        Tanya Jawab Mengurus Surat
                    </h3>
                    <div class="space-y-4">
                        <!-- FAQ 1 -->
                        <div @click="openFaq === 1 ? openFaq = null : openFaq = 1"
                            class="cursor-pointer group bg-[#F9DCC1]/40 hover:bg-[#E8C187]/30 rounded-xl shadow transition-all p-4 reveal-on-scroll">
                            <div class="flex items-center gap-3">
                                <span
                                    class="bg-[#E8C187]/70 text-[#12715D] rounded-full w-7 h-7 flex items-center justify-center font-bold mr-1 group-hover:bg-[#C7F3E7] transition">
                                    <i data-lucide="user-check" class="w-5 h-5"></i>
                                </span>
                                <span class="font-semibold text-[#12715D]">Apakah surat bisa diurus oleh
                                    keluarga?</span>
                                <i data-lucide="chevron-down"
                                    class="ml-auto w-6 h-6 transition-transform duration-300"
                                    :class="{ 'rotate-180': openFaq === 1 }"></i>
                            </div>
                            <div x-show="openFaq === 1" x-collapse>
                                <div class="mt-2 pl-10 text-[#155145]">
                                    <span class="font-semibold text-[#12715D]">Jawaban:</span>
                                    Bisa, dengan membawa surat kuasa & KTP asli.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 2 -->
                        <div @click="openFaq === 2 ? openFaq = null : openFaq = 2"
                            class="cursor-pointer group bg-[#C7F3E7]/30 hover:bg-[#C7F3E7]/50 rounded-xl shadow transition-all p-4 reveal-on-scroll">
                            <div class="flex items-center gap-3">
                                <span
                                    class="bg-[#C7F3E7]/70 text-[#0C3B2E] rounded-full w-7 h-7 flex items-center justify-center font-bold mr-1 group-hover:bg-[#E8C187] transition">
                                    <i data-lucide="timer" class="w-5 h-5"></i>
                                </span>
                                <span class="font-semibold text-[#12715D]">Berapa lama proses surat keluar?</span>
                                <i data-lucide="chevron-down"
                                    class="ml-auto w-6 h-6 transition-transform duration-300"
                                    :class="{ 'rotate-180': openFaq === 2 }"></i>
                            </div>
                            <div x-show="openFaq === 2" x-collapse>
                                <div class="mt-2 pl-10 text-[#155145]">
                                    <span class="font-semibold text-[#12715D]">Jawaban:</span>
                                    Biasanya 1 hari kerja jika dokumen lengkap.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 3 -->
                        <div @click="openFaq === 3 ? openFaq = null : openFaq = 3"
                            class="cursor-pointer group bg-[#E8C187]/20 hover:bg-[#F9DCC1]/50 rounded-xl shadow transition-all p-4 reveal-on-scroll">
                            <div class="flex items-center gap-3">
                                <span
                                    class="bg-[#F9DCC1]/80 text-[#C2977D] rounded-full w-7 h-7 flex items-center justify-center font-bold mr-1 group-hover:bg-[#C7F3E7] transition">
                                    <i data-lucide="badge-check" class="w-5 h-5"></i>
                                </span>
                                <span class="font-semibold text-[#12715D]">Apakah ada biaya untuk pengurusan
                                    surat?</span>
                                <i data-lucide="chevron-down"
                                    class="ml-auto w-6 h-6 transition-transform duration-300"
                                    :class="{ 'rotate-180': openFaq === 3 }"></i>
                            </div>
                            <div x-show="openFaq === 3" x-collapse>
                                <div class="mt-2 pl-10 text-[#155145]">
                                    <span class="font-semibold text-[#12715D]">Jawaban:</span>
                                    Tidak ada biaya alias gratis.
                                </div>
                            </div>
                        </div>
                        <!-- FAQ 4 -->
                        <div @click="openFaq === 4 ? openFaq = null : openFaq = 4"
                            class="cursor-pointer group bg-[#C7F3E7]/20 hover:bg-[#C7F3E7]/40 rounded-xl shadow transition-all p-4 reveal-on-scroll">
                            <div class="flex items-center gap-3">
                                <span
                                    class="bg-[#C7F3E7]/80 text-[#0C3B2E] rounded-full w-7 h-7 flex items-center justify-center font-bold mr-1 group-hover:bg-[#E8C187] transition">
                                    <i data-lucide="phone" class="w-5 h-5"></i>
                                </span>
                                <span class="font-semibold text-[#12715D]">Jika ada kendala, ke mana
                                    menghubungi?</span>
                                <i data-lucide="chevron-down"
                                    class="ml-auto w-6 h-6 transition-transform duration-300"
                                    :class="{ 'rotate-180': openFaq === 4 }"></i>
                            </div>
                            <div x-show="openFaq === 4" x-collapse>
                                <div class="mt-2 pl-10 text-[#155145]">
                                    <span class="font-semibold text-[#12715D]">Jawaban:</span>
                                    Silakan datang ke kantor desa atau hubungi petugas PPID Desa Timpik.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Preview Gambar -->
                <div x-show="modalOpen"
                    x-effect="if(modalOpen){ setTimeout(()=>{ if(window.lucide) lucide.createIcons(); }, 10); }"
                    @click.self="modalOpen = false" x-transition:enter="transition ease-out duration-80"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-80" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 z-[200] flex items-center justify-center bg-black/60 backdrop-blur-sm"
                    style="display: none;">
                    <div
                        class="relative bg-black rounded-2xl p-2 shadow-2xl max-w-3xl w-full mx-4 flex flex-col items-center">
                        <button @click="modalOpen = false"
                            class="absolute top-3 right-3 bg-gray-200 hover:bg-gray-400 text-gray-800 rounded-full p-2 transition">
                            <i data-lucide="x" class="w-6 h-6"></i>
                        </button>
                        <img :src="modalImg" alt="Preview Gambar Surat"
                            class="rounded-xl max-h-[80vh] object-contain w-full" />
                    </div>
                </div>
            </div>

        </div>
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
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        });
    </script>

</body>

</html>
