<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin | Daftar Akun</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('/public/images/logo-timpik.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="antialiased bg-gray-100 dark:bg-gray-900 min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-lg shadow-2xl p-6 sm:p-8">

        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <a href="/">
                <img src="{{ asset('/public/images/logo-timpik.png') }}" alt="Logo Desa Timpik" class="h-20 w-auto">
            </a>
        </div>

        <h2 class="text-center text-2xl font-bold text-gray-800 dark:text-gray-200 mb-2">Daftar Akun Admin</h2>
        <p class="text-center text-sm text-gray-600 dark:text-gray-400 mb-6">
            Silakan isi data di bawah untuk membuat akun admin baru.
        </p>

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="mb-4">
                <div class="font-medium text-red-600 dark:text-red-400">{{ __('Whoops! Something went wrong.') }}</div>
                <ul class="mt-2 list-disc list-inside text-sm text-red-600 dark:text-red-400 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Nama
                    Lengkap</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                    autocomplete="name"
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 focus:ring focus:ring-green-500 focus:border-green-500 transition" />
            </div>

            <!-- Email -->
            <div>
                <label for="email"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                    autocomplete="username"
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 focus:ring focus:ring-green-500 focus:border-green-500 transition" />
            </div>

            <!-- Password -->
            <div>
                <label for="password"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 focus:ring focus:ring-green-500 focus:border-green-500 transition" />
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Konfirmasi Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    autocomplete="new-password"
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 focus:ring focus:ring-green-500 focus:border-green-500 transition" />
            </div>

            <!-- Terms & Privacy (optional, jika Jetstream) -->
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div>
                    <label for="terms" class="flex items-center">
                        <input id="terms" name="terms" type="checkbox" required
                            class="h-4 w-4 text-green-600 border-gray-300 dark:border-gray-700 rounded focus:ring-green-500 dark:bg-gray-900">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                            {!! __('Saya setuju dengan :terms_of_service dan :privacy_policy', [
                                'terms_of_service' =>
                                    '<a target="_blank" href="' .
                                    route('terms.show') .
                                    '" class="underline text-sm text-green-600 dark:text-green-400 hover:text-green-900 dark:hover:text-green-300">' .
                                    __('Syarat Layanan') .
                                    '</a>',
                                'privacy_policy' =>
                                    '<a target="_blank" href="' .
                                    route('policy.show') .
                                    '" class="underline text-sm text-green-600 dark:text-green-400 hover:text-green-900 dark:hover:text-green-300">' .
                                    __('Kebijakan Privasi') .
                                    '</a>',
                            ]) !!}
                            !!}
                        </span>
                    </label>
                </div>
            @endif

            <div class="flex flex-col sm:flex-row sm:justify-between items-center gap-3 mt-6">
                <a href="{{ route('login') }}"
                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 dark:focus:ring-offset-gray-800">
                    Sudah punya akun? Login
                </a>
                <button type="submit"
                    class="justify-center w-full sm:w-auto py-2 px-10 rounded-lg bg-green-600 hover:bg-green-700 dark:bg-green-700 dark:hover:bg-green-800 text-white shadow-lg transition-all duration-200 font-bold tracking-wide">
                    Daftar
                </button>
            </div>
        </form>
    </div>
</body>

</html>
