<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Website Desa Timpik')</title>

        <meta name="description" content="Informasi, pelayanan publik, dan berita terbaru dari Desa Timpik, Kecamatan Susukan, Kabupaten Semarang.">

        <meta property="og:title" content="{{ config('app.name', 'Desa Timpik | Website Resmi') }}" />
        <meta property="og:description" content="Dapatkan layanan administrasi, info desa, dan berita terkini langsung dari website resmi kami Desa Timpik, Kecamatan Susukan, Kabupaten Semarang." />
        <meta property="og:image" content="{{ asset('images/logo-timpik.png') }}" />
        <meta property="og:url" content="{{ url()->current() }}" />

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ config('app.name', 'Desa Timpik | Website Resmi') }}">
        <meta name="twitter:description" content="Dapatkan layanan administrasi, info desa, dan berita terkini langsung dari website resmi kami Desa Timpik, Kecamatan Susukan, Kabupaten Semarang.">
        <meta name="twitter:image" content="{{ asset('images/logo-timpik.png') }}">

        <link rel="icon" type="image/png" href="{{ asset('images/logo-timpik.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script src="https://unpkg.com/lucide@latest"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow-sm">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- Script tambahan dari child views -->
        @stack('scripts')

        <script>
            lucide.createIcons();
        </script>
    </body>
</html>
