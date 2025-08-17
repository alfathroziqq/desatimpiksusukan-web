<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Website Desa Timpik') }}</title>
        <meta name="description" content="Informasi, pelayanan publik, dan berita terbaru dari Desa Timpik, Kecamatan Susukan, Kabupaten Semarang.">
        <meta name="keywords"
            content="Desa Timpik, Susukan, Kabupaten Semarang, informasi desa, pelayanan publik, berita desa, sejarah desa, tata kelola desa, peta potensi desa, website desa, pemerintahan desa, Jawa Tengah">

        <meta property="og:title" content="{{ config('app.name', 'Desa Timpik | Website Resmi') }}" />
        <meta property="og:description" content="Dapatkan layanan administrasi, info desa, dan berita terkini langsung dari website resmi kami Desa Timpik, Kecamatan Susukan, Kabupaten Semarang." />
        <meta property="og:image" content="{{ asset('/public/images/logo-timpik.png') }}" />
        <meta property="og:url" content="{{ url()->current() }}" />

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ config('app.name', 'Desa Timpik | Website Resmi') }}">
        <meta name="twitter:description" content="Dapatkan layanan administrasi, info desa, dan berita terkini langsung dari website resmi kami Desa Timpik, Kecamatan Susukan, Kabupaten Semarang.">
        <meta name="twitter:image" content="{{ asset('/public/images/logo-timpik.png') }}">

        <link rel="icon" type="image/png" href="{{ asset('images/logo-timpik.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
