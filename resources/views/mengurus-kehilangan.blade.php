<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kehilangan Surat | Desa Timpik</title>

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
                <span class="text-[#DBAA7C]">Mengurus Surat Kehilangan</span>
            </div>

            <div class="container mx-auto px-2 sm:px-12 lg:px-40 py-8">
                <section class="flex flex-col items-center font-['Poppins']" x-data="{ modalOpen: false, modalImg: '' }">

                    <div class="mb-6 mt-[-30px] max-w-5xl w-full text-center mx-auto reveal-on-scroll">
                        <h1 class="text-2xl md:text-5xl font-extrabold text-[#0C3B2E] mb-2 drop-shadow"
                            style="font-family: 'Poppins', sans-serif;">
                            Panduan Mengurus Surat Kehilangan
                        </h1>

                        <div
                            class="w-20 md:w-32 h-1 mx-auto bg-gradient-to-r from-[#C7F3E7] via-[#0C3B2E] to-[#F9DCC1] rounded-lg">
                        </div>

                        <p class="mt-6 text-[#155145] text-md md:text-xl mx-auto max-w-4xl">
                            <span class="bg-[#E8C187]/30 rounded-md px-2 py-1">Kehilangan dokumen penting?</span>
                            Desa Timpik siap membantu Anda mengurus surat kehilangan secara mudah dan legal, baik untuk
                            STNK, KTP, ATM, Buku Tabungan, Ijazah, SIM, Akta, BPKB, hingga Sertifikat Tanah.
                        </p>
                    </div>

                    <!-- Tips -->
                    <div
                        class="bg-[#F9DCC1]/50 border-l-4 border-[#E8C187] text-[#155145] px-5 py-4 rounded-xl mb-8 flex items-center gap-3 shadow-sm max-w-2xl mx-auto reveal-on-scroll">
                        <i data-lucide="info" class="w-10 h-10 text-[#E8C187]"></i>
                        <span class="text-sm md:text-base">
                            Surat kehilangan akan diterbitkan oleh kepolisian. Kantor desa membantu mengurus
                            pengantar & dokumen pendukung.<br>
                            <b>Laporkan segera setelah kehilangan, siapkan data dan dokumen yang diperlukan!</b>
                        </span>
                    </div>

                    <div class="mb-10 flex justify-center w-full reveal-on-scroll">
                        <div class="relative">
                            <img src="{{ asset('images/surat-kehilangan.png') }}" alt="Surat Kehilangan"
                                class="rounded-xl w-110 h-150 object-cover shadow border-4 border-[#0C3B2E] cursor-pointer transition group-hover:scale-105"
                                @click="modalOpen = true; modalImg = '{{ asset('images/surat-kehilangan.png') }}'">
                            <div
                                class="absolute inset-0 bg-gradient-to-tr from-[#0C3B2E]/10 to-transparent rounded-3xl pointer-events-none">
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-5xl mx-auto">
                        <!-- Card STNK -->
                        <div
                            class="bg-white/90 border-l-4 border-[#C7F3E7]/80 shadow-xl rounded-2xl px-6 py-6 flex flex-col gap-3 reveal-on-scroll">
                            <div class="flex items-center gap-2 mb-1">
                                <i data-lucide="car" class="w-7 h-7 text-[#12715D]"></i>
                                <span class="text-lg font-bold text-[#12715D]">STNK</span>
                            </div>
                            <div class="text-sm text-[#155145] mb-1">Kehilangan surat kendaraan bermotor.</div>
                            <ul class="list-disc pl-4 text-xs text-[#0C3B2E] mb-2">
                                <li>Foto Copy KTP dan STNK</li>
                                <li>Surat Keterangan dari Leasing</li>
                                <li>Surat Pengantar dari Kepala Desa/Kelurahan</li>
                                <li>Bukti Iklan</li>
                                <li>Surat Rekomendasi Satlantas</li>
                            </ul>
                        </div>
                        <!-- Card KTP/KK -->
                        <div
                            class="bg-white/90 border-l-4 border-[#E8C187]/80 shadow-xl rounded-2xl px-6 py-6 flex flex-col gap-3 reveal-on-scroll">
                            <div class="flex items-center gap-2 mb-1">
                                <i data-lucide="id-card" class="w-7 h-7 text-[#E8C187]"></i>
                                <span class="text-lg font-bold text-[#C2977D]">KTP / KK</span>
                            </div>
                            <div class="text-sm text-[#155145] mb-1">Kehilangan KTP Elektronik / Kartu Keluarga.</div>
                            <ul class="list-disc pl-4 text-xs text-[#0C3B2E] mb-2">
                                <li>Surat Pengantar dari Kepala Desa/Kelurahan</li>
                                <li>Fotokopi dokumen hilang (jika ada), KTP anggota keluarga</li>
                                <li>Lanjutkan ke Dukcapil untuk cetak dokumen baru</li>
                            </ul>
                        </div>
                        <!-- Card Buku Tabungan/ATM -->
                        <div
                            class="bg-white/90 border-l-4 border-[#619C6A]/80 shadow-xl rounded-2xl px-6 py-6 flex flex-col gap-3 reveal-on-scroll">
                            <div class="flex items-center gap-2 mb-1">
                                <i data-lucide="credit-card" class="w-7 h-7 text-[#619C6A]"></i>
                                <span class="text-lg font-bold text-[#619C6A]">ATM / Buku Tabungan</span>
                            </div>
                            <div class="text-sm text-[#155145] mb-1">Kehilangan kartu ATM atau buku tabungan bank.</div>
                            <ul class="list-disc pl-4 text-xs text-[#0C3B2E] mb-2">
                                <li>Surat Pengantar dari Kepala Desa/Kelurahan</li>
                                <li>KTP & buku tabungan/ATM (jika ada)</li>
                                <li>Bawa ke Bank untuk cetak baru</li>
                            </ul>
                        </div>
                        <!-- Card Akta Nikah -->
                        <div
                            class="bg-white/90 border-l-4 border-[#C2977D]/80 shadow-xl rounded-2xl px-6 py-6 flex flex-col gap-3 reveal-on-scroll">
                            <div class="flex items-center gap-2 mb-1">
                                <i data-lucide="book" class="w-7 h-7 text-[#C2977D]"></i>
                                <span class="text-lg font-bold text-[#C2977D]">Akta Nikah</span>
                            </div>
                            <div class="text-sm text-[#155145] mb-1">Kehilangan Buku Nikah (KUA).</div>
                            <ul class="list-disc pl-4 text-xs text-[#0C3B2E] mb-2">
                                <li>Surat Pengantar dari Kepala Desa/Kelurahan</li>
                                <li>Foto Copy KTP, KK, & Buku Nikah (jika ada)</li>
                                <li>Ajukan duplikat ke KUA</li>
                            </ul>
                        </div>
                        <!-- Card SIM -->
                        <div
                            class="bg-white/90 border-l-4 border-[#619C6A]/80 shadow-xl rounded-2xl px-6 py-6 flex flex-col gap-3 reveal-on-scroll">
                            <div class="flex items-center gap-2 mb-1">
                                <i data-lucide="shield" class="w-7 h-7 text-[#12715D]"></i>
                                <span class="text-lg font-bold text-[#12715D]">SIM</span>
                            </div>
                            <div class="text-sm text-[#155145] mb-1">Kehilangan SIM A/C.</div>
                            <ul class="list-disc pl-4 text-xs text-[#0C3B2E] mb-2">
                                <li>Surat Pengantar dari Kepala Desa/Kelurahan</li>
                                <li>Foto Copy KTP, SIM lama (jika ada), & tanda bukti permohonan SIM</li>
                                <li>Proses di Satlantas/Polres</li>
                            </ul>
                        </div>
                        <!-- Card Ijazah -->
                        <div
                            class="bg-white/90 border-l-4 border-[#12715D]/80 shadow-xl rounded-2xl px-6 py-6 flex flex-col gap-3 reveal-on-scroll">
                            <div class="flex items-center gap-2 mb-1">
                                <i data-lucide="graduation-cap" class="w-7 h-7 text-[#12715D]"></i>
                                <span class="text-lg font-bold text-[#12715D]">Ijazah</span>
                            </div>
                            <div class="text-sm text-[#155145] mb-1">Kehilangan ijazah sekolah/kuliah.</div>
                            <ul class="list-disc pl-4 text-xs text-[#0C3B2E] mb-2">
                                <li>Surat Pengantar dari Kepala Desa/Kelurahan</li>
                                <li>Surat Keterangan dari Sekolah</li>
                                <li>Foto Copy KTP & Ijazah</li>
                                <li>Ajukan duplikat ke sekolah</li>
                            </ul>
                        </div>
                        <!-- Card BPKB -->
                        <div
                            class="bg-white/90 border-l-4 border-[#12715D]/80 shadow-xl rounded-2xl px-6 py-6 flex flex-col gap-3 reveal-on-scroll">
                            <div class="flex items-center gap-2 mb-1">
                                <i data-lucide="graduation-cap" class="w-7 h-7 text-[#12715D]"></i>
                                <span class="text-lg font-bold text-[#12715D]">BPKB</span>
                            </div>
                            <div class="text-sm text-[#155145] mb-1">Kehilangan BPKB</div>
                            <ul class="list-disc pl-4 text-xs text-[#0C3B2E] mb-2">
                                <li>Surat Pengantar dari Kepala Desa/Kelurahan</li>
                                <li>Surat Rekomendasi dari Satlantas</li>
                                <li>Surat Keterangan dari Bank Nasional</li>
                                <li>Foto Copy KTP & BPKB</li>
                                <li>Bukti Iklan</li>
                                <li>Proses di Satlantas</li>
                            </ul>
                        </div>
                        <!-- Card Sertifikat Tanah -->
                        <div
                            class="bg-white/90 border-l-4 border-[#0C3B2E]/80 shadow-xl rounded-2xl px-6 py-6 flex flex-col gap-3 reveal-on-scroll">
                            <div class="flex items-center gap-2 mb-1">
                                <i data-lucide="map-pin" class="w-7 h-7 text-[#0C3B2E]"></i>
                                <span class="text-lg font-bold text-[#0C3B2E]">Sertifikat Tanah</span>
                            </div>
                            <div class="text-sm text-[#155145] mb-1">Kehilangan Sertifikat Hak Milik / Girik.</div>
                            <ul class="list-disc pl-4 text-xs text-[#0C3B2E] mb-2">
                                <li>Surat Pengantar dari Kepala Desa/Kelurahan</li>
                                <li>Surat Keterangan dari Kelurahan bahwa tanah tidak dalam sengketa</li>
                                <li>Surat Keterangan dari Bank Nasional</li>
                                <li>Surat Pernyataan Kehilangan Bermaterai</li>
                                <li>Pemilik harus hadir/ Surat Kuasa</li>
                                <li>Foto Copy KTP Pemilik, Pelapor, KK, Akta Jual Beli, Sertifikat, & PBB Terakhir</li>
                                <li>Surat Ahli Waris, Surat Kematian</li>
                                <li>Bukti Iklan</li>
                                <li>Bawa dokumen pendukung (fotokopi sertifikat, bukti kepemilikan)</li>
                            </ul>
                        </div>
                    </div>

                    <!-- FAQ Mini -->
                    <div class="mt-10 w-full max-w-4xl mx-auto" x-data="{ openFaq: null }">
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
                                    <span class="font-semibold text-[#12715D]">Apakah wajib lapor ke polisi?</span>
                                    <i data-lucide="chevron-down"
                                        class="ml-auto w-6 h-6 transition-transform duration-300"
                                        :class="{ 'rotate-180': openFaq === 1 }"></i>
                                </div>
                                <div x-show="openFaq === 1" x-collapse>
                                    <div class="mt-2 pl-10 text-[#155145]">
                                        <span class="font-semibold text-[#12715D]">Jawaban:</span>
                                        Ya. Laporan kehilangan polisi adalah syarat utama menerbitkan surat/dokumen
                                        pengganti.
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
                                    <span class="font-semibold text-[#12715D]">Berapa lama proses surat
                                        kehilangan?</span>
                                    <i data-lucide="chevron-down"
                                        class="ml-auto w-6 h-6 transition-transform duration-300"
                                        :class="{ 'rotate-180': openFaq === 2 }"></i>
                                </div>
                                <div x-show="openFaq === 2" x-collapse>
                                    <div class="mt-2 pl-10 text-[#155145]">
                                        <span class="font-semibold text-[#12715D]">Jawaban:</span>
                                        Umumnya 1 hari kerja di kantor polisi & desa, namun proses dokumen baru
                                        tergantung instansi terkait.
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
                                    <span class="font-semibold text-[#12715D]">Jika kehilangan di luar kota?</span>
                                    <i data-lucide="chevron-down"
                                        class="ml-auto w-6 h-6 transition-transform duration-300"
                                        :class="{ 'rotate-180': openFaq === 3 }"></i>
                                </div>
                                <div x-show="openFaq === 3" x-collapse>
                                    <div class="mt-2 pl-10 text-[#155145]">
                                        <span class="font-semibold text-[#12715D]">Jawaban:</span>
                                        Laporan kehilangan bisa dilakukan di polsek/polres terdekat lokasi kehilangan.
                                        Surat pengantar tetap dari desa asal.
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

                    <!-- Modal -->
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
                            <img :src="modalImg" alt="Preview Surat Kehilangan"
                                class="rounded-xl max-h-[80vh] object-contain w-full" />
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
