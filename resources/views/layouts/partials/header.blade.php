<style>
    .nav-link {
        position: relative;
        display: inline-block;
        padding-bottom: 4px;
    }

    .nav-link::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0%;
        height: 2px;
        background-color: #D5C578;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .nav-link:hover::after,
    .nav-link.active::after {
        width: 100%;
    }
</style>

<header id="mainHeader" class="sticky top-0 z-50 shadow-lg transition-all duration-300 bg-[#1A3A31]"
    style="font-family: 'Poppins', sans-serif;" x-data="{ mobileMenuOpen: false, activeAccordion: '' }">
    <nav class="container mx-auto px-6 lg:px-16 py-3 flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="flex-shrink-0 flex items-center space-x-3">
            <img src="{{ asset('images/logo-timpik.png') }}" alt="Logo Desa Timpik" class="h-14 w-auto">
            <div class="flex flex-col leading-tight">
                <span class="hidden sm:inline text-lg font-semibold text-[#D5C578] tracking-wide">Desa Timpik</span>
                <span class="hidden sm:inline text-xs text-white">Kec. Susukan, Kab. Semarang</span>
                <span class="hidden sm:inline text-xs text-white">Prov. Jawa Tengah</span>
            </div>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center space-x-9 text-sm text-[15px] uppercase tracking-wider">
            <!-- Home -->
            <a href="{{ route('welcome') }}"
                class="nav-link {{ Route::is('welcome') ? 'text-[#D5C578] active' : 'text-gray-300' }} hover:text-white transition duration-300">
                Home
            </a>
            <!-- Profil Desa Dropdown -->
            <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button type="button"
                    class="flex items-center {{ Route::is('sejarah-desa') || Route::is('tata-kelola') || Route::is('peta-potensi-desa') ? 'text-[#D5C578]' : 'text-gray-300' }} hover:text-[#D5C578] transition duration-300 uppercase">
                    <span
                        class="nav-link {{ Route::is('sejarah-desa') || Route::is('tata-kelola') || Route::is('peta-potensi-desa') ? 'active' : '' }}">
                        Profil Desa
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1 transition-transform"
                        :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition class="absolute mt-2 w-48 bg-[#254D43] rounded-md shadow-xl z-20">
                    <a href="{{ route('sejarah-desa') }}"
                        class="block px-4 py-2 text-sm {{ Route::is('sejarah-desa') ? 'bg-[#D5C578]/30 text-[#D5C578]' : 'text-gray-200' }} hover:bg-white/10">
                        Sejarah
                    </a>
                    <a href="{{ route('tata-kelola') }}"
                        class="block px-4 py-2 text-sm {{ Route::is('tata-kelola') ? 'bg-[#D5C578]/30 text-[#D5C578]' : 'text-gray-200' }} hover:bg-white/10">
                        Tata Kelola Desa
                    </a>
                    <a href="{{ route('peta-potensi-desa') }}"
                        class="block px-4 py-2 text-sm {{ Route::is('peta-potensi-desa') ? 'bg-[#D5C578]/30 text-[#D5C578]' : 'text-gray-200' }} hover:bg-white/10">
                        Peta Potensi Desa
                    </a>
                </div>
            </div>
            <!-- Data Desa Dropdown -->
            <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button type="button"
                    class="flex items-center {{ Route::is('data-jenis-kelamin') || Route::is('data-pendidikan') || Route::is('data-kesehatan') || Route::is('data-keagamaan') || Route::is('data-ekonomi') ? 'text-[#D5C578]' : 'text-gray-300' }} hover:text-[#D5C578] transition duration-300 uppercase">
                    <span
                        class="nav-link {{ Route::is('data-jenis-kelamin') || Route::is('data-pendidikan') || Route::is('data-kesehatan') || Route::is('data-keagamaan') || Route::is('data-ekonomi') ? 'active' : '' }}">
                        Data Desa
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1 transition-transform"
                        :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition class="absolute mt-2 w-48 bg-[#254D43] rounded-md shadow-xl z-20">
                    <a href="{{ route('data-jenis-kelamin') }}"
                        class="block px-4 py-2 text-sm {{ Route::is('data-jenis-kelamin') ? 'bg-[#D5C578]/30 text-[#D5C578]' : 'text-gray-200' }} hover:bg-white/10">
                        Data Jenis Kelamin
                    </a>
                    <a href="{{ route('data-pendidikan') }}"
                        class="block px-4 py-2 text-sm {{ Route::is('data-pendidikan') ? 'bg-[#D5C578]/30 text-[#D5C578]' : 'text-gray-200' }} hover:bg-white/10">
                        Data Pendidikan
                    </a>
                    <a href="{{ route('data-kesehatan') }}"
                        class="block px-4 py-2 text-sm {{ Route::is('data-kesehatan') ? 'bg-[#D5C578]/30 text-[#D5C578]' : 'text-gray-200' }} hover:bg-white/10">
                        Data Kesehatan
                    </a>
                    <a href="{{ route('data-keagamaan') }}"
                        class="block px-4 py-2 text-sm {{ Route::is('data-keagamaan') ? 'bg-[#D5C578]/30 text-[#D5C578]' : 'text-gray-200' }} hover:bg-white/10">
                        Data Keagamaan
                    </a>
                    <a href="{{ route('data-ekonomi') }}"
                        class="block px-4 py-2 text-sm {{ Route::is('data-ekonomi') ? 'bg-[#D5C578]/30 text-[#D5C578]' : 'text-gray-200' }} hover:bg-white/10">
                        Data Ekonomi
                    </a>
                </div>
            </div>
            <!-- Layanan Publik -->
            <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button type="button"
                    class="flex items-center {{ Route::is('mengurus-surat') || Route::is('mengurus-skck') || Route::is('mengurus-kehilangan') || Route::is('mengurus-administrasi') || Route::is('mengurus-catatan-sipil') ? 'text-[#D5C578]' : 'text-gray-300' }} hover:text-[#D5C578] transition duration-300 uppercase">
                    <span
                        class="nav-link {{ Route::is('mengurus-surat') || Route::is('mengurus-skck') || Route::is('mengurus-kehilangan') || Route::is('mengurus-administrasi') || Route::is('mengurus-catatan-sipil') ? 'active' : '' }}">
                        Layanan Publik
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1 transition-transform"
                        :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition class="absolute mt-2 w-48 bg-[#254D43] rounded-md shadow-xl z-20">
                    <a href="{{ route('mengurus-surat') }}"
                        class="block px-4 py-2 text-sm {{ Route::is('mengurus-surat') ? 'bg-[#D5C578]/30 text-[#D5C578]' : 'text-gray-200' }} hover:bg-white/10">
                        Surat Masuk & Keluar
                    </a>
                    <a href="{{ route('mengurus-skck') }}"
                        class="block px-4 py-2 text-sm {{ Route::is('mengurus-skck') ? 'bg-[#D5C578]/30 text-[#D5C578]' : 'text-gray-200' }} hover:bg-white/10">
                        SKCK
                    </a>
                    <a href="{{ route('mengurus-kehilangan') }}"
                        class="block px-4 py-2 text-sm {{ Route::is('mengurus-kehilangan') ? 'bg-[#D5C578]/30 text-[#D5C578]' : 'text-gray-200' }} hover:bg-white/10">
                        Surat Kehilangan
                    </a>
                    <a href="{{ route('mengurus-administrasi') }}"
                        class="block px-4 py-2 text-sm {{ Route::is('mengurus-administrasi') ? 'bg-[#D5C578]/30 text-[#D5C578]' : 'text-gray-200' }} hover:bg-white/10">
                        Administrasi Kependudukan
                    </a>
                    <a href="{{ route('mengurus-catatan-sipil') }}"
                        class="block px-4 py-2 text-sm {{ Route::is('mengurus-catatan-sipil') ? 'bg-[#D5C578]/30 text-[#D5C578]' : 'text-gray-200' }} hover:bg-white/10">
                        Pencatatan Sipil
                    </a>
                </div>
            </div>
            <!-- Dokumen -->
            <a href="{{ route('dokumen.index') }}"
                class="nav-link {{ Route::is('dokumen.index') ? 'text-[#D5C578] active' : 'text-gray-300' }} hover:text-[#D5C578] transition duration-300">
                Dokumen
            </a>
            <!-- Berita -->
            <a href="{{ route('berita.index') }}"
                class="nav-link {{ Route::is('berita.index') ? 'text-[#D5C578] active' : 'text-gray-300' }} hover:text-[#D5C578] transition duration-300">
                Berita
            </a>
            <!-- Galeri -->
            <a href="{{ route('galeri.index') }}"
                class="nav-link {{ Route::is('galeri.index') ? 'text-[#D5C578] active' : 'text-gray-300' }} hover:text-[#D5C578] transition duration-300">
                Galeri
            </a>
            <!-- Belanja -->
            <a href="{{ route('belanja.index') }}"
                class="nav-link {{ Route::is('belanja.index') ? 'text-[#D5C578] active' : 'text-gray-300' }} hover:text-[#D5C578] transition duration-300">
                Belanja
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="lg:hidden">
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-white focus:outline-none p-2">
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
                <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Panel -->
    <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false"
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4"
        class="lg:hidden bg-[#1A3A31] absolute w-full shadow-xl" style="display: none;">
        <div class="flex flex-col px-4 pt-2 pb-4 space-y-1">
            <a href="{{ route('welcome') }}"
                class="py-2 px-3 text-base {{ Route::is('welcome') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-200' }} hover:text-white hover:bg-white/5 rounded-md">
                Home
            </a>
            <!-- Mobile Accordion: Profil Desa -->
            <div>
                <button @click="activeAccordion = (activeAccordion === 'profil' ? '' : 'profil')"
                    class="w-full flex justify-between items-center py-2 px-3 text-base
                    {{ Route::is('sejarah-desa') || Route::is('tata-kelola') || Route::is('peta-potensi-desa') ? 'text-[#D5C578] font-bold' : 'text-gray-200' }}
                    hover:text-white hover:bg-white/5 rounded-md">
                    <span>Profil Desa</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition-transform"
                        :class="{ 'rotate-180': activeAccordion === 'profil' }" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="activeAccordion === 'profil'" class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('sejarah-desa') }}"
                        class="block py-2 px-3 text-sm {{ Route::is('sejarah-desa') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-300' }} hover:text-white hover:bg-white/5 rounded-md">
                        Sejarah Desa
                    </a>
                    <a href="{{ route('tata-kelola') }}"
                        class="block py-2 px-3 text-sm {{ Route::is('tata-kelola') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-300' }} hover:text-white hover:bg-white/5 rounded-md">
                        Tata Kelola Desa
                    </a>
                    <a href="{{ route('peta-potensi-desa') }}"
                        class="block py-2 px-3 text-sm {{ Route::is('peta-potensi-desa') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-300' }} hover:text-white hover:bg-white/5 rounded-md">
                        Peta Potensi Desa
                    </a>
                </div>
            </div>
            <!-- Mobile Accordion: Data Desa -->
            <div>
                <button @click="activeAccordion = (activeAccordion === 'data' ? '' : 'data')"
                    class="w-full flex justify-between items-center py-2 px-3 text-base
                    {{ Route::is('data-jenis-kelamin') || Route::is('data-pendidikan') || Route::is('data-kesehatan') || Route::is('data-keagamaan') || Route::is('data-ekonomi') ? 'text-[#D5C578] font-bold' : 'text-gray-200' }}
                    hover:text-white hover:bg-white/5 rounded-md">
                    <span>Data Desa</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition-transform"
                        :class="{ 'rotate-180': activeAccordion === 'data' }" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="activeAccordion === 'data'" class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('data-jenis-kelamin') }}"
                        class="block py-2 px-3 text-sm {{ Route::is('data-jenis-kelamin') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-300' }} hover:text-white hover:bg-white/5 rounded-md">
                        Data Jenis Kelamin
                    </a>
                    <a href="{{ route('data-pendidikan') }}"
                        class="block py-2 px-3 text-sm {{ Route::is('data-pendidikan') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-300' }} hover:text-white hover:bg-white/5 rounded-md">
                        Data Pendidikan
                    </a>
                    <a href="{{ route('data-kesehatan') }}"
                        class="block py-2 px-3 text-sm {{ Route::is('data-kesehatan') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-300' }} hover:text-white hover:bg-white/5 rounded-md">
                        Data Kesehatan
                    </a>
                    <a href="{{ route('data-keagamaan') }}"
                        class="block py-2 px-3 text-sm {{ Route::is('data-keagamaan') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-300' }} hover:text-white hover:bg-white/5 rounded-md">
                        Data Keagamaan
                    </a>
                    <a href="{{ route('data-ekonomi') }}"
                        class="block py-2 px-3 text-sm {{ Route::is('data-ekonomi') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-300' }} hover:text-white hover:bg-white/5 rounded-md">
                        Data Ekonomi
                    </a>
                </div>
            </div>
            <div>
                <button @click="activeAccordion = (activeAccordion === 'layanan' ? '' : 'layanan')"
                    class="w-full flex justify-between items-center py-2 px-3 text-base
                    {{ Route::is('mengurus-surat') || Route::is('mengurus-skck') || Route::is('mengurus-kehilangan') || Route::is('mengurus-administrasi') || Route::is('mengurus-catatan-sipil') ? 'text-[#D5C578] font-bold' : 'text-gray-200' }}
                    hover:text-white hover:bg-white/5 rounded-md">
                    <span>Layanan Publik</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition-transform"
                        :class="{ 'rotate-180': activeAccordion === 'layanan' }" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="activeAccordion === 'layanan'" class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('mengurus-surat') }}"
                        class="block py-2 px-3 text-sm {{ Route::is('mengurus-surat') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-300' }} hover:text-white hover:bg-white/5 rounded-md">
                        Surat Masuk & Keluar
                    </a>
                    <a href="{{ route('mengurus-skck') }}"
                        class="block py-2 px-3 text-sm {{ Route::is('mengurus-skck') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-300' }} hover:text-white hover:bg-white/5 rounded-md">
                        SKCK
                    </a>
                    <a href="{{ route('mengurus-kehilangan') }}"
                        class="block py-2 px-3 text-sm {{ Route::is('mengurus-kehilangan') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-300' }} hover:text-white hover:bg-white/5 rounded-md">
                        Surat Kehilangan
                    </a>
                    <a href="{{ route('mengurus-administrasi') }}"
                        class="block py-2 px-3 text-sm {{ Route::is('mengurus-administrasi') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-300' }} hover:text-white hover:bg-white/5 rounded-md">
                        Administrasi Kependudukan
                    </a>
                    <a href="{{ route('mengurus-catatan-sipil') }}"
                        class="block py-2 px-3 text-sm {{ Route::is('mengurus-catatan-sipil') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-300' }} hover:text-white hover:bg-white/5 rounded-md">
                        Pencatatan Sipil
                    </a>
                </div>
            </div>
            <a href="{{ route('dokumen.index') }}"
                class="py-2 px-3 text-base {{ Route::is('dokumen.index') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-200' }} hover:text-white hover:bg-white/5 rounded-md">
                Dokumen
            </a>
            <a href="{{ route('berita.index') }}"
                class="py-2 px-3 text-base {{ Route::is('berita.index') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-200' }} hover:text-white hover:bg-white/5 rounded-md">
                Berita
            </a>
            <a href="{{ route('galeri.index') }}"
                class="py-2 px-3 text-base {{ Route::is('galeri.index') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-200' }} hover:text-white hover:bg-white/5 rounded-md">
                Galeri
            </a>
            <a href="{{ route('belanja.index') }}"
                class="py-2 px-3 text-base {{ Route::is('belanja.index') ? 'bg-[#D5C578]/10 text-[#D5C578] font-bold' : 'text-gray-200' }} hover:text-white hover:bg-white/5 rounded-md">
                Belanja
            </a>
        </div>
    </div>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.getElementById('mainHeader');
            if (window.scrollY > 10) {
                header.classList.add('backdrop-blur-md', 'bg-[#1A3A31]/90');
                header.classList.remove('bg-[#1A3A31]');
            } else {
                header.classList.remove('backdrop-blur-md', 'bg-[#1A3A31]/90');
                header.classList.add('bg-[#1A3A31]');
            }
        });
    </script>
</header>
