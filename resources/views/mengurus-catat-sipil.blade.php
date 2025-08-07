<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencatatan Sipil | Desa Timpik</title>

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
                <span class="text-[#DBAA7C]">Pencatatan Sipil</span>
            </div>

            <div class="container mx-auto px-2 sm:px-12 lg:px-30 py-8 font-['Poppins']" x-data="{ modalOpen: false, modalImg: '' }">

                <!-- Judul & Tips -->
                <div class="mt-[-30px] mb-8 flex flex-col items-center text-center reveal-on-scroll">
                    <h1 class="text-3xl md:text-5xl font-extrabold text-[#0C3B2E] mb-3 drop-shadow"
                        style="font-family: 'Poppins', sans-serif;">
                        Informasi Pelayanan Pencatatan Sipil
                    </h1>

                    <div
                        class="w-24 md:w-40 h-1 mx-auto bg-gradient-to-r from-[#C7F3E7] via-[#0C3B2E] to-[#F9DCC1] rounded-lg">
                    </div>

                    <p class="mt-4 text-[#155145] text-md md:text-lg mx-auto max-w-4xl">
                        Dapatkan layanan <b>pembuatan & legalisasi Akta Catatan Sipil</b> (Kelahiran, Kematian,
                        Perkawinan, Perceraian, Pengangkatan Anak, perubahan data dsb)
                        dengan mudah, <b>GRATIS!</b> Ikuti panduan dan syarat berikut.
                    </p>
                    <div class="mt-4 flex flex-wrap justify-center gap-4">
                        <span
                            class="inline-flex items-center gap-2 bg-[#C7F3E7]/40 text-[#12715D] font-semibold rounded-full px-4 py-1 text-sm">
                            <i data-lucide="file-text" class="w-5 h-5"></i>
                            Dokumen Resmi & Digital
                        </span>
                        <span
                            class="inline-flex items-center gap-2 bg-[#E8C187]/40 text-[#8d6245] font-semibold rounded-full px-4 py-1 text-sm">
                            <i data-lucide="badge-check" class="w-5 h-5"></i>
                            Akta Otentik, Diakui Hukum
                        </span>
                    </div>
                </div>

                <!-- Tips -->
                <div
                    class="bg-[#E8C187]/30 border-l-4 border-[#C2977D] text-[#0C3B2E] px-4 py-3 rounded-xl mb-8 flex items-center gap-3 shadow-sm max-w-5xl mx-auto reveal-on-scroll">
                    <i data-lucide="alert-circle" class="w-6 h-6"></i>
                    <span class="text-md md:text-base">
                        Catatan Sipil dibutuhkan untuk urusan waris, pernikahan, sekolah, dokumen anak, hingga
                        pengurusan data di luar negeri.
                    </span>
                </div>

                <!-- Wrapper Utama -->
                <div class="space-y-12">

                    <!-- Baris Gambar (2 gambar di atas) -->
                    <section class="grid grid-cols-1 md:grid-cols-2 gap-6 reveal-on-scroll">
                        <!-- Gambar 1 -->
                        <div class="relative group">
                            <img src="images/pelayanan-catat-sipil-1.png" alt="Alur Layanan Pencatatan Sipil"
                                class="rounded-2xl w-full h-auto object-cover shadow-xl border-4 border-[#C7F3E7]/50 cursor-pointer transition-all duration-300 bg-white/50"
                                @click="modalOpen = true; modalImg = 'images/pelayanan-catat-sipil-1.png'">
                            <div class="absolute inset-0 bg-gradient-to-tr from-[#C7F3E7]/15 to-transparent rounded-3xl pointer-events-none"></div>
                        </div>

                        <!-- Gambar 2 -->
                        <div class="relative group">
                            <img src="images/pelayanan-catat-sipil-2.png" alt="Syarat Pencatatan Sipil"
                                class="rounded-2xl w-full h-auto object-cover shadow-xl border-4 border-[#E8C187]/50 cursor-pointer transition-all duration-300 bg-white/50"
                                @click="modalOpen = true; modalImg = 'images/pelayanan-catat-sipil-2.png'">
                            <div class="absolute inset-0 bg-gradient-to-br from-[#E8C187]/10 to-transparent rounded-3xl pointer-events-none"></div>
                        </div>
                    </section>

                    <!-- Teks di bawah gambar -->
                    <div class="text-lg md:text-sm text-[#0C3B2E] italic text-center">
                        Klik gambar untuk perbesar & lihat detail brosur layanan. Semua layanan <b>GRATIS</b>.
                    </div>

                    <!-- Baris Konten (2 kolom konten layanan) -->
                    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 text-[#0C3B2E] reveal-on-scroll">

                        <!-- Konten Kiri -->
                        <div class="bg-white/80 border-l-4 border-[#0C3B2E] rounded-2xl shadow-xl px-6 py-6 space-y-6 text-sm md:text-base">
                            <h2 class="text-lg md:text-xl font-bold flex items-center gap-2">
                                <i data-lucide="list-checks" class="w-6 h-6"></i> Jenis Layanan
                            </h2>

                            <!-- Akta Kelahiran -->
                            <div>
                                <h3 class="font-bold flex items-center gap-2 mb-1"><i data-lucide="baby" class="w-5 h-5"></i> Akta Kelahiran</h3>
                                <ul class="list-disc pl-6 space-y-1">
                                    <li>Surat Keterangan Lahir dari bidan/dokter/desa.</li>
                                    <li>Fotokopi Akta Nikah/Surat Nikah/Surat Cerai Orang Tua.</li>
                                    <li>Fotokopi KK & KTP-el orangtua/keluarga.</li>
                                    <li>Nama & identitas 2 saksi dewasa (min 21 thn).</li>
                                    <li>Fotokopi KTP-el saksi.</li>
                                </ul>
                            </div>

                            <!-- Akta Kematian -->
                            <div>
                                <h3 class="font-bold flex items-center gap-2 mb-1"><i data-lucide="skull" class="w-5 h-5"></i> Akta Kematian</h3>
                                <ul class="list-disc pl-6 space-y-1">
                                    <li>Surat Keterangan Kematian (asli) dari desa/dokter.</li>
                                    <li>Kartu Keluarga (KK) asli.</li>
                                    <li>Nama & identitas 2 saksi, usia minimal 21 tahun, fotokopi KTP-el saksi.</li>
                                </ul>
                            </div>

                            <!-- Akta Perkawinan -->
                            <div>
                                <h3 class="font-bold flex items-center gap-2 mb-1"><i data-lucide="users" class="w-5 h-5"></i> Akta Perkawinan</h3>
                                <ul class="list-disc pl-6 space-y-1">
                                    <li>Surat pengantar desa/lurah & diketahui camat.</li>
                                    <li>Fotokopi KK & KTP-el calon pengantin.</li>
                                    <li>Pas foto berdampingan 4x6 warna 2 lembar.</li>
                                    <li>2 saksi minimal 21 thn & fotokopi KTP-el.</li>
                                    <li>Bagi WNA: fotokopi akta kelahiran terjemahan, paspor, visa.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Konten Kanan -->
                        <div class="bg-white/80 border-l-4 border-[#0C3B2E] rounded-2xl shadow-xl px-6 py-6 space-y-6 text-sm md:text-base">

                            <!-- Akta Perceraian -->
                            <div>
                                <h3 class="font-bold flex items-center gap-2 mb-1"><i data-lucide="gavel" class="w-5 h-5"></i> Akta Perceraian</h3>
                                <ul class="list-disc pl-6 space-y-1">
                                    <li>Salinan Keputusan Pengadilan (berkekuatan hukum tetap).</li>
                                    <li>Kutipan Akta Perkawinan asli.</li>
                                    <li>KTP-el & KK asli.</li>
                                </ul>
                            </div>

                            <!-- Pengangkatan Anak -->
                            <div>
                                <h3 class="font-bold flex items-center gap-2 mb-1"><i data-lucide="baby" class="w-5 h-5"></i> Pengangkatan Anak</h3>
                                <ul class="list-disc pl-6 space-y-1">
                                    <li>Putusan/salinan pengadilan tentang pengangkatan anak.</li>
                                    <li>Pengantar desa/kelurahan.</li>
                                    <li>Kutipan akta kelahiran anak.</li>
                                    <li>KK & KTP-el pengangkat.</li>
                                </ul>
                            </div>

                            <!-- Perubahan Data -->
                            <div>
                                <h3 class="font-bold flex items-center gap-2 mb-1"><i data-lucide="edit" class="w-5 h-5"></i> Perubahan Nama/Tanggal Lahir</h3>
                                <ul class="list-disc pl-6 space-y-1">
                                    <li>Salinan penetapan pengadilan ttg perubahan data.</li>
                                    <li>Kutipan akta catatan sipil sebelumnya.</li>
                                    <li>KTP-el & KK asli.</li>
                                </ul>
                            </div>
                        </div>

                    </section>
                </div>


                <!-- Legalisir, GISA, dan Info Tambahan -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10 reveal-on-scroll">

                    <div
                        class="bg-gradient-to-br from-[#C7F3E7]/70 via-white to-[#F9DCC1]/70 border-l-4 border-[#C7F3E7] rounded-2xl px-6 py-5 shadow">
                        <h4 class="font-bold text-[#0C3B2E] mb-1 flex items-center gap-2">
                            <i data-lucide="award" class="w-6 h-6 text-[#0C3B2E]"></i> #GISA: Gerakan Indonesia Sadar
                            Adminduk
                        </h4>
                        <ul class="list-disc pl-5 text-[#0C3B2E] text-sm text-justify">
                            <li>Sadar kepemilikan dokumen kependudukan</li>
                            <li>Sadar pemanfaatan data kependudukan</li>
                            <li>Sadar layanan pencatatan sipil <b>hanya</b> di Disdukcapil resmi</li>
                            <li>Sadar pentingnya administrasi untuk masa depan</li>
                        </ul>
                    </div>

                    <div
                        class="bg-gradient-to-br from-[#E8C187]/50 via-white to-[#C7F3E7]/40 border-l-4 border-[#E8C187] rounded-2xl px-6 py-5 shadow">
                        <h4 class="font-bold text-[#0C3B2E] mb-1 flex items-center gap-2">
                            <i data-lucide="file-check" class="w-6 h-6 text-[#0C3B2E]"></i> Legalisir Fotokopi Dokumen
                        </h4>
                        <ul class="list-disc pl-5 text-[#0C3B2E] text-sm text-justify">
                            <li>Legalisir gratis & hanya oleh pejabat Disdukcapil/UPT Disdukcapil.</li>
                            <li>Legalisir digital dokumen TTE (PDF) cukup scan QR & cek online.</li>
                            <li class="text-[#b60a12]">Tanda tangan digital/elektronik pada dokumen <b>tidak</b>
                                menurunkan pelayanan atau legalitas.</li>
                        </ul>
                    </div>

                    <div
                        class="bg-gradient-to-br from-[#C7F3E7]/50 via-white to-[#F9DCC1]/40 border-l-4 border-[#C7F3E7] rounded-2xl px-6 py-5 shadow flex flex-col justify-center items-center">
                        <div class="flex items-center gap-2 mb-2">
                            <i data-lucide="info" class="w-6 h-6 text-[#0C3B2E]"></i>
                            <span class="text-[#0C3B2E] font-bold">Pelayanan GRATIS</span>
                        </div>
                        <span class="text-[#0C3B2E] text-sm text-justify">Urus sendiri, gampang & cepat! Konsultasi atau pengaduan
                            langsung ke WA Center Disdukcapil.</span>
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
