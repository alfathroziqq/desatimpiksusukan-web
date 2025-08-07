<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrasi Kependudukan Online | Desa Timpik</title>

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
                <span class="text-[#DBAA7C]">Administrasi Kependudukan Online</span>
            </div>

            <div class="container mx-auto px-2 sm:px-12 lg:px-30 py-8 font-['Poppins']" x-data="{ modalOpen: false, modalImg: '' }">

                <div class="mt-[-30px] mb-8 text-center max-w-4xl mx-auto reveal-on-scroll">
                    <h1 class="text-2xl md:text-5xl font-extrabold text-[#0C3B2E] mb-3 drop-shadow"
                        style="font-family: 'Poppins', sans-serif;">
                        Administrasi Kependudukan Online
                    </h1>
                    <div
                        class="w-24 md:w-40 h-1 mx-auto bg-gradient-to-r from-[#C7F3E7] via-[#0C3B2E] to-[#F9DCC1] rounded-lg">
                    </div>
                    <p class="max-w-2xl mx-auto text-[#155145] text-md md:text-xl mt-3">
                        <b>Urus dokumen kependudukan</b> (KTP, KK, Akta, dan lainnya) dengan mudah secara daring tanpa
                        harus antre lama! Berikut alur resmi pengajuan administrasi online untuk warga Desa Timpik.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-14">

                    <div
                        class="bg-white/70 rounded-2xl shadow-lg px-7 py-8 reveal-on-scroll flex flex-col h-full border-l-4 border-[#0C3B2E]">
                        <h2 class="font-bold text-xl md:text-2xl mb-5 flex items-center gap-2 text-[#0C3B2E]">
                            <i data-lucide="globe" class="w-7 h-7 text-[#0C3B2E]"></i>
                            Pengajuan Dokumen Online
                        </h2>
                        <div class="flex justify-center mb-6">
                            <img src="images/administrasi-kependudukan-online-1.png" alt="Cek Keaslian Dokumen"
                                class="rounded-xl w-full max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl h-auto object-cover shadow border-4 border-[#E8C187]/40 cursor-pointer transition group-hover:scale-105"
                                @click="modalOpen = true; modalImg = 'images/administrasi-kependudukan-online-1.png'">
                        </div>
                        <div class="space-y-0">
                            <template
                                x-for="(step, i) in [
                                    {
                                        title: 'Buka Website',
                                        url: 'https://sipendukonline.semarangkab.go.id',
                                        urlText: 'sipendukonline.semarangkab.go.id',
                                        desc: 'Atau gunakan aplikasi SIPENDUK Online (scan QR di brosur).'
                                    },
                                    { title: 'Daftar Akun & Isi Data', desc: 'Lengkapi data diri dan nomor HP aktif. Ikuti langkah verifikasi yang dikirim lewat WA/SMS.' },
                                    { title: 'Login & Pilih Layanan', desc: 'Masuk dengan NIK dan kata sandi, lalu pilih layanan: KTP, KK, Akta Lahir, Akta Kematian, dsb.' },
                                    { title: 'Unggah Dokumen Persyaratan', desc: 'Upload scan/foto dokumen sesuai jenis layanan. Pastikan file jelas & sesuai.' },
                                    { title: 'Kirim Permohonan & Pantau Proses', desc: 'Kirim Permohonan & Pantau Proses' }
                                ]"
                                :key="i">
                                <div class="flex gap-4 items-start">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-7 h-7 rounded-full bg-[#0C3B2E]/80 flex items-center justify-center text-[#FFFFFF] font-bold">
                                            <span x-text="i+1"></span>
                                        </div>
                                        <div :class="i < 4 ? 'h-12 w-1 mx-auto bg-[#0C3B2E]' : ''"></div>
                                    </div>
                                    <div class="pb-5">
                                        <!-- Langkah pertama: judul dengan backlink -->
                                        <template x-if="i === 0">
                                            <div class="font-semibold text-[#0C3B2E] mb-1">
                                                <span x-text="step.title"></span>
                                                <a :href="step.url" target="_blank"
                                                    class="text-blue-700 underline hover:text-blue-900 font-semibold ml-1"
                                                    x-text="step.urlText"></a>
                                            </div>
                                        </template>
                                        <!-- Langkah lainnya: judul biasa -->
                                        <template x-if="i !== 0">
                                            <div class="font-semibold text-[#0C3B2E] mb-1" x-text="step.title"></div>
                                        </template>
                                        <div class="text-sm text-[#155145]" x-text="step.desc"></div>
                                    </div>
                                </div>
                            </template>

                        </div>
                    </div>

                    <div
                        class="bg-white/70 rounded-2xl shadow-lg px-7 py-8 reveal-on-scroll flex flex-col h-full border-l-4 border-[#E8C187]/70">
                        <h2 class="font-bold text-xl md:text-2xl mb-5 flex items-center gap-2 text-[#12715D]">
                            <i data-lucide="check-circle" class="w-7 h-7 text-[#E8C187]"></i>
                            Cek Keaslian Dokumen (TTE)
                        </h2>
                        <div class="flex justify-center mb-6">
                            <img src="images/administrasi-kependudukan-online-2.png" alt="Cek Keaslian Dokumen"
                                class="rounded-xl w-full max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl h-auto object-cover shadow border-4 border-[#E8C187]/40 cursor-pointer transition group-hover:scale-105"
                                @click="modalOpen = true; modalImg = 'images/administrasi-kependudukan-online-2.png'">
                        </div>
                        <div class="space-y-0">
                            <template
                                x-for="(step, i) in [
                                { title: 'Siapkan Dokumen TTE', desc: 'Ambil file dokumen kependudukan dengan QR Code/TTE (PDF/fisik).' },
                                { title: 'Install & Buka Aplikasi VeryDS', desc: 'Unduh aplikasi <b>VeryDS</b> di Play Store. Jalankan aplikasinya.' },
                                { title: 'Scan QR Code Dokumen', desc: 'Pilih menu VERIFY PRINTED DOCUMENT lalu scan QR pada dokumen.' },
                                { title: 'Lihat Status Keaslian', desc: 'Status & detail keaslian akan muncul di layar aplikasi atau website Dukcapil.' },
                            ]"
                                :key="i">
                                <div class="flex gap-4 items-start">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-7 h-7 rounded-full bg-[#E8C187]/80 flex items-center justify-center text-white font-bold">
                                            <span x-text="i+1"></span>
                                        </div>
                                        <div :class="i < 3 ? 'h-15 w-1 mx-auto bg-[#E8C187]/60' : ''"></div>
                                    </div>
                                    <div class="pb-5">
                                        <div class="font-semibold text-[#0C3B2E] mb-1" x-text="step.title"></div>
                                        <div class="text-sm text-[#155145]" x-text="step.desc"></div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>

                <!-- FAQ Mini -->
                <div class="mt-10 w-full max-w-4xl mx-auto" x-data="{ openFaq: null }">
                    <h3 class="text-lg font-bold text-[#12715D] mb-4 flex items-center gap-2 reveal-on-scroll">
                        <i data-lucide="help-circle" class="w-6 h-6 text-[#E8C187]"></i>
                        Tanya Jawab Administrasi Online
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
                                <span class="font-semibold text-[#12715D]">Apakah bisa mengurus KTP hilang secara
                                    online?</span>
                                <i data-lucide="chevron-down" class="ml-auto w-6 h-6 transition-transform duration-300"
                                    :class="{ 'rotate-180': openFaq === 1 }"></i>
                            </div>
                            <div x-show="openFaq === 1" x-collapse>
                                <div class="mt-2 pl-10 text-[#155145]">
                                    <span class="font-semibold text-[#12715D]">Jawaban:</span>
                                    Bisa, silakan pilih layanan <b>KTP</b> pada SIPENDUK Online dan upload surat
                                    kehilangan dari kepolisian.
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
                                <span class="font-semibold text-[#12715D]">Bagaimana jika dokumen tidak kunjung
                                    jadi?</span>
                                <i data-lucide="chevron-down"
                                    class="ml-auto w-6 h-6 transition-transform duration-300"
                                    :class="{ 'rotate-180': openFaq === 2 }"></i>
                            </div>
                            <div x-show="openFaq === 2" x-collapse>
                                <div class="mt-2 pl-10 text-[#155145]">
                                    <span class="font-semibold text-[#12715D]">Jawaban:</span>
                                    Hubungi <b>WA Center Disdukcapil</b> atau datang ke kantor desa dengan membawa bukti
                                    pengajuan.
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
                                <span class="font-semibold text-[#12715D]">Bagaimana cek keaslian dokumen
                                    digital?</span>
                                <i data-lucide="chevron-down"
                                    class="ml-auto w-6 h-6 transition-transform duration-300"
                                    :class="{ 'rotate-180': openFaq === 3 }"></i>
                            </div>
                            <div x-show="openFaq === 3" x-collapse>
                                <div class="mt-2 pl-10 text-[#155145]">
                                    <span class="font-semibold text-[#12715D]">Jawaban:</span>
                                    Gunakan aplikasi <b>VeryDS</b> untuk scan QR code pada dokumen, atau cek melalui
                                    website Dukcapil.
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
