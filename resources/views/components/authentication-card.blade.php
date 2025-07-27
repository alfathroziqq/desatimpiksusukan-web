<div class="min-h-screen flex flex-col items-center justify-center py-6 sm:py-0 bg-gray-100 dark:bg-gray-900">
    <div class="w-full flex justify-center">
        {{ $logo }}
    </div>

    <div class="w-full max-w-xs sm:max-w-md mt-6 px-4 sm:px-6 py-6 sm:py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden rounded-2xl">
        {{ $slot }}
    </div>
</div>
