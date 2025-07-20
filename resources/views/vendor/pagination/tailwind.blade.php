@if ($paginator->hasPages())
    <div class="flex justify-center mt-4 mb-2 space-x-2">
        {{-- Tombol Sebelumnya --}}
        @if ($paginator->onFirstPage())
            <button disabled
                class="p-2 rounded-full bg-gray-200 opacity-50 transition-colors cursor-not-allowed">
                <i data-lucide="arrow-left" class="w-5 h-5 text-gray-500"></i>
            </button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
                class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 transition-colors">
                <i data-lucide="arrow-left" class="w-5 h-5 text-gray-800"></i>
            </a>
        @endif

        {{-- Tombol Berikutnya --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
                class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 transition-colors">
                <i data-lucide="arrow-right" class="w-5 h-5 text-gray-800"></i>
            </a>
        @else
            <button disabled
                class="p-2 rounded-full bg-gray-200 opacity-50 transition-colors cursor-not-allowed">
                <i data-lucide="arrow-right" class="w-5 h-5 text-gray-500"></i>
            </button>
        @endif
    </div>
@endif
