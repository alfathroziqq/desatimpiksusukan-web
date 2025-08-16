<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Penduduk | Desa Timpik</title>

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
                <span class="text-[#DBAA7C]">Pendaftaran Penduduk</span>
            </div>

            <div class="container mx-auto px-2 sm:px-12 lg:px-30 py-8 font-['Poppins']" x-data="{ modalOpen: false, modalImg: '' }">

                <!-- Judul & Tips -->
                <div class="mt-[-30px] mb-8 flex flex-col items-center text-center reveal-on-scroll">
                    <h1 class="text-3xl md:text-5xl font-extrabold text-[#0C3B2E] mb-3 drop-shadow"
                        style="font-family: 'Poppins', sans-serif;">
                        Informasi Pelayanan Pendaftaran Penduduk
                    </h1>

                    <div
                        class="w-24 md:w-40 h-1 mx-auto bg-gradient-to-r from-[#C7F3E7] via-[#0C3B2E] to-[#F9DCC1] rounded-lg">
                    </div>

                    <p class="max-w-2xl mx-auto text-[#155145] text-md md:text-xl mt-3">
                        Semua layanan <b>KTP-el, KK, KIA, SKTT, Perpindahan Penduduk, Legalisir</b> dan lainnya bisa
                        diurus secara resmi, <b>gratis</b>, dan mudah. Cek syarat, alur, dan tips di bawah.
                    </p>

                    <div class="mt-4 flex flex-wrap justify-center gap-4">
                        <span
                            class="inline-flex items-center gap-2 bg-[#E8C187]/40 text-[#8d6245] font-semibold rounded-full px-4 py-1 text-sm">
                            <i data-lucide="id-card" class="w-5 h-5"></i>
                            KTP-el, KK, KIA, SKTT, Pindah
                        </span>
                        <span
                            class="inline-flex items-center gap-2 bg-[#C7F3E7]/50 text-[#12715D] font-semibold rounded-full px-4 py-1 text-sm">
                            <i data-lucide="star" class="w-5 h-5"></i>
                            Semua layanan GRATIS!
                        </span>
                    </div>
                </div>

                <!-- Tips -->
                <div
                    class="bg-[#E8C187]/30 border-l-4 border-[#C2977D] text-[#0C3B2E] px-4 py-3 rounded-xl mb-8 flex items-center gap-3 shadow-sm max-w-3xl mx-auto reveal-on-scroll">
                    <i data-lucide="info" class="w-10 h-10"></i>
                    <span class="text-sm md:text-base">
                        Layanan pendaftaran penduduk wajib untuk semua perubahan data (pindah, lahir, meninggal, nikah,
                        cerai, dll). Pastikan data sesuai dan tidak memakai calo!
                    </span>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-14">

                    <!-- Kolom 1 -->
                    <div class="flex flex-col gap-7 reveal-on-scroll">

                        <div class="relative group">
                            <img src="/public/images/pendaftaran-penduduk-1.png" alt="Brosur Pendaftaran Penduduk"
                                class="rounded-2xl w-full max-w-2xl h-auto object-cover shadow-xl border-4 border-[#0C3B2E] cursor-pointer transition-all duration-300 bg-white/50 mx-auto"
                                @click="modalOpen = true; modalImg = '/public/images/pendaftaran-penduduk-1.png'">
                            <div
                                class="absolute inset-0 bg-gradient-to-tr from-[#0C3B2E]/15 to-transparent rounded-3xl pointer-events-none">
                            </div>
                        </div>
                        <div class="relative group">
                            <img src="/public/images/pendaftaran-penduduk-2.png" alt="Brosur Pendaftaran Penduduk 2"
                                class="rounded-2xl w-full max-w-2xl h-auto object-cover shadow-xl border-4 border-[#0C3B2E] cursor-pointer transition-all duration-300 bg-white/50 mx-auto"
                                @click="modalOpen = true; modalImg = '/public/images/pendaftaran-penduduk-2.png'">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#0C3B2E]/15 to-transparent rounded-3xl pointer-events-none">
                            </div>
                        </div>
                        <div class="mt-2 text-xs md:text-base text-[#0C3B2E] italic text-center px-4">
                            Klik gambar untuk perbesar & lihat detail brosur. Semua layanan <b>GRATIS</b> (tidak
                            dipungut biaya).
                        </div>
                    </div>

                    <!-- Kolom 2-->
                    <div class="flex flex-col gap-8">

                        <!-- KTP-el -->
                        <section class="bg-white/80 rounded-xl shadow-lg px-6 py-5 border-l-4 border-[#0C3B2E] reveal-on-scroll">
                            <h2 class="text-xl font-bold flex items-center gap-2 mb-1 text-[#0C3B2E]">
                                <i data-lucide="id-card" class="w-6 h-6"></i>
                                KTP Elektronik (KTP-el)
                            </h2>
                            <ul class="list-disc pl-7 text-sm text-[#0C3B2E] space-y-1 mb-2">
                                <li>Usia minimal 17 tahun / pernah menikah</li>
                                <li>Fotokopi KK</li>
                            </ul>
                            <div class="text-xs text-[#0C3B2E] mb-2">KTP-el berlaku seumur hidup</div>
                            <h4 class="font-semibold text-[#0C3B2E]">KTP Hilang/Rusak</h4>
                            <ul class="list-disc pl-7 text-xs text-[#0C3B2E] space-y-1">
                                <li>Surat kehilangan dari kepolisian</li>
                                <li>KTP lama (jika rusak)</li>
                                <li>Fotokopi KK</li>
                            </ul>
                        </section>

                        <!-- KK -->
                        <section class="bg-white/80 rounded-xl shadow-lg px-6 py-5 border-l-4 border-[#0C3B2E] reveal-on-scroll">
                            <h2 class="text-xl font-bold flex items-center gap-2 mb-1 text-[#0C3B2E]">
                                <i data-lucide="users" class="w-6 h-6"></i>
                                Kartu Keluarga (KK)
                            </h2>
                            <ul class="list-disc pl-7 text-sm text-[#0C3B2E] space-y-1 mb-2">
                                <li>Buku nikah / akta perkawinan / akta cerai</li>
                                <li>Surat pindah datang dari luar daerah</li>
                                <li>Fotokopi akta kelahiran anggota baru</li>
                            </ul>
                            <div class="flex flex-wrap gap-2 mt-1 text-xs text-[#0C3B2E]">
                                <span class="bg-[#7AD7F0]/30 rounded px-2 py-1">Perubahan Data: KK lama & bukti
                                    perubahan</span>
                                <span class="bg-[#F9E77C]/40 rounded px-2 py-1">Hapus Data Ganda: KK asli & surat
                                    pengantar</span>
                            </div>
                        </section>

                        <!-- KIA -->
                        <section class="bg-white/80 rounded-xl shadow-lg px-6 py-5 border-l-4 border-[#0C3B2E] reveal-on-scroll">
                            <h2 class="text-xl font-bold flex items-center gap-2 mb-1 text-[#0C3B2E]">
                                <i data-lucide="smile" class="w-6 h-6"></i>
                                Kartu Identitas Anak (KIA)
                            </h2>
                            <ul class="list-disc pl-7 text-sm text-[#0C3B2E] space-y-1 mb-2">
                                <li>Fotokopi KK</li>
                                <li>Fotokopi akta kelahiran</li>
                                <li>Pas foto anak 4x6 (2 lembar) usia >5 tahun</li>
                            </ul>
                        </section>

                        <!-- Pindah Penduduk -->
                        <section class="bg-white/80 rounded-xl shadow-lg px-6 py-5 border-l-4 border-[#0C3B2E] reveal-on-scroll">
                            <h2 class="text-xl font-bold flex items-center gap-2 mb-1 text-[#0C3B2E]">
                                <i data-lucide="move-right" class="w-6 h-6"></i>
                                Perpindahan Penduduk (Mutasi)
                            </h2>
                            <ul class="list-disc pl-7 text-sm text-[#0C3B2E] space-y-1 mb-2">
                                <li>Surat keterangan pindah dari Disdukcapil asal</li>
                                <li>KTP-el asli tempat asal</li>
                            </ul>
                            <div class="text-xs text-[#0C3B2E]">Masa berlaku surat pindah: <b>100 hari</b></div>
                        </section>
                    </div>
                </div>

                <div class="mt-8">
                    <!-- Alur Pendaftaran Penduduk -->
                    <section
                        class="bg-gradient-to-br from-[#e0f9ee]/80 via-[#fff7e5]/90 to-[#fff] rounded-2xl shadow-lg px-7 py-7 reveal-on-scroll flex flex-col gap-2 border-l-4 border-[#7AD7F0]">
                        <h2 class="text-lg md:text-2xl font-bold text-[#0C3B2E] mb-3 flex items-center gap-2">
                            <i data-lucide="workflow" class="w-7 h-7 text-[#0C3B2E]"></i>
                            Alur & Prosedur Layanan
                        </h2>
                        <ol class="list-decimal pl-7 text-[#0C3B2E] text-base space-y-2">
                            <li>Datang ke kantor desa/disdukcapil dengan dokumen lengkap sesuai kebutuhan layanan.</li>
                            <li>Isi formulir permohonan & serahkan dokumen ke petugas.</li>
                            <li>Tunggu verifikasi dan proses oleh petugas (bisa dapat notifikasi lewat WA/SMS/Email).
                            </li>
                            <li>Ambil dokumen jadi di desa/disdukcapil atau via layanan digital (jika tersedia).</li>
                        </ol>
                        <div class="mt-2 text-xs text-[#0C3B2E] italic">Selalu cek kembali data Anda sebelum diajukan!
                        </div>
                    </section>
                </div>

                <!-- FAQ Mini -->
                <div class="mt-10 w-full max-w-4xl mx-auto" x-data="{ openFaq: null }">
                    <h3 class="text-2xl font-bold text-[#12715D] mb-4 flex items-center gap-2 reveal-on-scroll">
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
                                <span class="font-semibold text-[#12715D]">Apakah gratis?</span>
                                <i data-lucide="chevron-down"
                                    class="ml-auto w-6 h-6 transition-transform duration-300"
                                    :class="{ 'rotate-180': openFaq === 1 }"></i>
                            </div>
                            <div x-show="openFaq === 1" x-collapse>
                                <div class="mt-2 pl-10 text-[#155145]">
                                    <span class="font-semibold text-[#12715D]">Jawaban:</span>
                                    Ya, semua layanan <b>GRATIS</b>
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
                                <span class="font-semibold text-[#12715D]">Kapan dokumen jadi?</span>
                                <i data-lucide="chevron-down"
                                    class="ml-auto w-6 h-6 transition-transform duration-300"
                                    :class="{ 'rotate-180': openFaq === 2 }"></i>
                            </div>
                            <div x-show="openFaq === 2" x-collapse>
                                <div class="mt-2 pl-10 text-[#155145]">
                                    <span class="font-semibold text-[#12715D]">Jawaban:</span>
                                    Rata-rata 1-3 hari kerja setelah dokumen lengkap dan diverifikasi.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div @click="openFaq === 3 ? openFaq = null : openFaq = 3"
                            class="cursor-pointer group bg-[#E8C187]/20 hover:bg-[#F9DCC1]/50 rounded-xl shadow transition-all p-4 reveal-on-scroll">
                            <div class="flex items-center gap-3">
                                <span
                                    class="bg-[#F9DCC1]/80 text-[#0C3B2E] rounded-full w-7 h-7 flex items-center justify-center font-bold mr-1 group-hover:bg-[#C7F3E7] transition">
                                    <i data-lucide="badge-check" class="w-5 h-5"></i>
                                </span>
                                <span class="font-semibold text-[#12715D]">Apakah harus hadir sendiri?</span>
                                <i data-lucide="chevron-down"
                                    class="ml-auto w-6 h-6 transition-transform duration-300"
                                    :class="{ 'rotate-180': openFaq === 3 }"></i>
                            </div>
                            <div x-show="openFaq === 3" x-collapse>
                                <div class="mt-2 pl-10 text-[#155145]">
                                    <span class="font-semibold text-[#12715D]">Jawaban:</span>
                                    Ya, kecuali layanan online dengan verifikasi digital.
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
                                <span class="font-semibold text-[#12715D]">Bagaimana jika data ganda/salah?</span>
                                <i data-lucide="chevron-down"
                                    class="ml-auto w-6 h-6 transition-transform duration-300"
                                    :class="{ 'rotate-180': openFaq === 4 }"></i>
                            </div>
                            <div x-show="openFaq === 4" x-collapse>
                                <div class="mt-2 pl-10 text-[#155145]">
                                    <span class="font-semibold text-[#12715D]">Jawaban:</span>
                                    Laporkan ke Disdukcapil/desa dengan bukti dan dokumen pendukung.
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
