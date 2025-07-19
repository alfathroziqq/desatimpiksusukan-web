<footer class="bg-[#1A3A31] text-white pt-16 pb-8">
    <div class="container mx-auto px-4 md:px-6">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 lg:gap-12 mb-12">

            <div class="space-y-4">
                <h3 class="text-2xl font-bold" style="font-family: 'Poppins', sans-serif;">Tentang Desa Timpik</h3>
                <p class="text-gray-300/90 leading-relaxed text-sm text-justify">
                    Desa Timpik merupakan sebuah desa di Kecamatan Susukan, Kabupaten Semarang, yang berkembang pesat sebagai destinasi wisata edukatif berbasis pertanian modern. Masyarakat lokal aktif mengelola berbagai wahana seperti taman bunga, outbound, dan edukasi pertanian, sambil menjaga warisan budaya dan kearifan lokal.
                </p>
                <div class="flex space-x-3 pt-2">
                    <img src="https://placehold.co/100x80/78909C/FFFFFF?text=Foto+1" alt="Galeri Desa 1" class="w-1/3 h-20 object-cover rounded-md hover:scale-105 transition-transform duration-300">
                    <img src="https://placehold.co/100x80/546E7A/FFFFFF?text=Foto+2" alt="Galeri Desa 2" class="w-1/3 h-20 object-cover rounded-md hover:scale-105 transition-transform duration-300">
                    <img src="https://placehold.co/100x80/37474F/FFFFFF?text=Foto+3" alt="Galeri Desa 3" class="w-1/3 h-20 object-cover rounded-md hover:scale-105 transition-transform duration-300">
                </div>
            </div>

            <script src="https://unpkg.com/lucide@latest"></script>

            <div class="space-y-5">
                <h3 class="text-2xl font-bold" style="font-family: 'Poppins', sans-serif;">Kontak</h3>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-start space-x-3">
                        <span>
                            <i data-lucide="map-pin" class="w-5 h-5 text-gray-300/90"></i>
                        </span>
                        <span class="text-gray-300/90 leading-relaxed text-justify" style="font-family: 'Poppins', sans-serif;">
                            Kantor Balai Desa, Jl. Desa Timpik, Dusun Kauman, Desa Timpik, Kecamatan Susukan, Kabupaten Semarang, Jawa Tengah 50777.
                        </span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span>
                            <i data-lucide="phone" class="w-5 h-5 text-gray-300/90"></i>
                        </span>
                        <span class="text-gray-300/90 leading-relaxed" style="font-family: 'Poppins', sans-serif;">
                            087854312345 (Info Pelayanan)
                        </span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span>
                            <i data-lucide="mail" class="w-5 h-5 text-gray-300/90"></i>
                        </span>
                        <span class="text-gray-300/90 leading-relaxed" style="font-family: 'Poppins', sans-serif;">
                            desatimpiksusukan89@gmail.com
                        </span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span>
                            <i data-lucide="clock" class="w-5 h-5 text-gray-300/90"></i>
                        </span>
                        <span class="text-gray-300/90 leading-relaxed" style="font-family: 'Poppins', sans-serif;">
                            Senin - Jumat: 08:00 - 15:00 WIB
                        </span>
                    </li>
                </ul>
            </div>

            <div class="space-y-4">
                <h3 class="text-2xl font-bold" style="font-family: 'Poppins', sans-serif;">Peta Wilayah</h3>
                <div class="h-[200px] rounded-xl overflow-hidden shadow-lg">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.18114084348!2d110.5712737!3d-7.4338208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a71945f88f9e9%3A0x27718c090face7ff!2sTimpik%2C%20Kec.%20Susukan%2C%20Kabupaten%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1721380000000!5m2!1sid!2sid"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>

        <hr class="border-t border-white/10 my-8">

        <div class="flex flex-col sm:flex-row justify-between items-center text-center sm:text-left">
            <p class="text-sm text-gray-400 mb-4 sm:mb-0" style="font-family: 'Poppins', sans-serif;">
                &copy; {{ date('Y') }} Desa Timpik. All Rights Reserved.
            </p>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                    <i data-lucide="facebook" class="w-5 h-5"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                    <i data-lucide="instagram" class="w-5 h-5"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                    <i data-lucide="youtube" class="w-5 h-5"></i>
                </a>
            </div>
        </div>

    </div>

    <script>
        lucide.createIcons();
    </script>
</footer>
