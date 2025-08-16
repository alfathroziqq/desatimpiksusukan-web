<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permohonan Informasi | Desa Timpik</title>

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
    </style>
</head>

<body class="bg-gray-50">

    @include('layouts.partials.header')

    @if (session('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2"
            class="fixed top-6 right-6 z-50 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center space-x-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5 2a9 9 0 11-18 0 9 9 0 0118 0z">
                </path>
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <main>
        <div class="container mx-auto px-6 lg:px-16 py-12 font-['Poppins']">

            <!-- Breadcrumbs -->
            <div class="mb-6 text-[15px] font-semibold text-[#0C3B2E]">
                <a href="{{ route('welcome') }}" class="hover:text-[#DBAA7C]">Home</a>
                <span class="mx-2">></span>
                <a href="{{ route('dokumen.index') }}" class="hover:text-[#DBAA7C]">Dokumen</a>
                <span class="mx-2">></span>
                <span class="text-[#DBAA7C]">Form Ajuan</span>
            </div>

            <!-- Form Section -->
            <section class="py-12 md:py-6">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="mb-12 reveal-on-scroll text-center">
                        <h2 class="text-xl md:text-[45px] font-bold text-[#0C3B2E]">
                            Form Permohonan Informasi
                        </h2>
                        <div class="w-75 md:w-167 h-1 bg-[#0C3B2E] mx-auto mt-3"></div>
                    </div>

                    <div
                        class="bg-white p-6 sm:p-8 md:p-10 rounded-2xl shadow-lg border border-gray-200/80 max-w-4xl mx-auto reveal-on-scroll mt-8">
                        <form action="#" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                            <i data-lucide="user" class="w-5 h-5 text-gray-400"></i>
                                        </div>
                                        <input type="text" name="nama" id="nama"
                                            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition"
                                            placeholder="Masukkan Nama Anda" required>
                                    </div>
                                </div>

                                <!-- Asal Instansi -->
                                <div>
                                    <label for="instansi" class="block text-sm font-medium text-gray-700 mb-1">Asal
                                        Instansi</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                            <i data-lucide="building" class="w-5 h-5 text-gray-400"></i>
                                        </div>
                                        <input type="text" name="instansi" id="instansi"
                                            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition"
                                            placeholder="Masukkan Asal Instansi Anda" required>
                                    </div>
                                </div>

                                <!-- Nomor Telepon -->
                                <div>
                                    <label for="telepon" class="block text-sm font-medium text-gray-700 mb-1">Nomor
                                        Telepon</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                            <i data-lucide="phone" class="w-5 h-5 text-gray-400"></i>
                                        </div>
                                        <input type="tel" name="telepon" id="telepon"
                                            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition"
                                            placeholder="Masukkan Nomor Telepon Anda" required>
                                    </div>
                                </div>

                                <!-- Alamat Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Alamat
                                        Email</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                            <i data-lucide="mail" class="w-5 h-5 text-gray-400"></i>
                                        </div>
                                        <input type="email" name="email" id="email"
                                            class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition"
                                            placeholder="Masukkan Alamat Email Anda" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Permohonan -->
                            <div>
                                <label for="permohonan"
                                    class="block text-sm font-medium text-gray-700 mb-1">Permohonan</label>
                                <textarea name="permohonan" id="permohonan" rows="6"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition"
                                    placeholder="Masukkan Permohonan Anda" required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex justify-end pt-4">
                                <button type="submit"
                                    class="inline-flex items-center space-x-2 px-6 py-3 bg-teal-100 text-teal-800 font-semibold rounded-lg hover:bg-teal-200 transition-colors duration-300">
                                    <i data-lucide="send" class="w-5 h-5"></i>
                                    <span>Kirim</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>

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
    </script>

</body>

</html>
