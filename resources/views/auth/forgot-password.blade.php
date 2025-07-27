<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin | Lupa Password</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo-timpik.png') }}">

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
                <img src="{{ asset('images/logo-timpik.png') }}" alt="Logo Desa Timpik" class="h-20 w-auto">
            </a>
        </div>

        <h2 class="text-center text-2xl font-bold text-gray-800 dark:text-gray-200 mb-2">Lupa Password</h2>
        <p class="text-center text-sm text-gray-600 dark:text-gray-400 mb-6">
            Lupa kata sandi? Tidak masalah. <br>
            Cukup masukkan email Anda, dan kami akan mengirimkan tautan untuk reset password.
        </p>

        <!-- Status Message -->
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400 text-center">
                {{ session('status') }}
            </div>
        @endif

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

        <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
            @csrf

            <div>
                <label for="email"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    autocomplete="username"
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 focus:ring focus:ring-green-500 focus:border-green-500 transition" />
            </div>

            <button type="submit"
                class="justify-center w-full py-2 rounded-lg bg-green-600 hover:bg-green-700 dark:bg-green-700 dark:hover:bg-green-800 text-white shadow-lg transition-all duration-200 font-bold tracking-wide">
                Kirim Link Reset Password
            </button>
        </form>
    </div>
</body>

</html>
