<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Input Data APBDesa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800">

                    {{-- Notifikasi Sukses --}}
                    @if (session('success'))
                        <div class="mb-6 p-4 bg-green-100 dark:bg-green-800 border border-green-200 dark:border-green-600 text-green-700 dark:text-green-200 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Validasi --}}
                    @if ($errors->any())
                        <div class="mb-4">
                            <div class="font-medium text-red-600 dark:text-red-400">
                                {{ __('Whoops! Ada kesalahan pengisian.') }}</div>
                            <ul class="mt-3 list-disc list-inside text-sm text-red-600 dark:text-red-400">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.apb.store') }}">
                        @csrf

                        {{-- Tahun --}}
                        <div class="mb-8">
                            <x-label for="tahun" value="Tahun" />
                            <x-input id="tahun" name="tahun" type="number" class="block mt-1 w-full p-2" required value="{{ old('tahun', date('Y')) }}" />
                        </div>

                        {{-- Pendapatan --}}
                        <div class="mb-10">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 border-b border-gray-200 dark:border-gray-700 pb-2 mb-4">
                                Pendapatan
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="space-y-2">
                                    <x-label value="Pendapatan Asli Desa (Anggaran)" />
                                    <x-input type="number" name="pendapatan_asli_desa_anggaran" class="w-full p-2" value="{{ old('pendapatan_asli_desa_anggaran', 0) }}" />

                                    <x-label value="Pendapatan Asli Desa (Realisasi)" />
                                    <x-input type="number" name="pendapatan_asli_desa_realisasi" class="w-full p-2" value="{{ old('pendapatan_asli_desa_realisasi', 0) }}" />
                                </div>
                                <div class="space-y-2">
                                    <x-label value="Pendapatan Transfer (Anggaran)" />
                                    <x-input type="number" name="pendapatan_transfer_anggaran" class="w-full p-2" value="{{ old('pendapatan_transfer_anggaran', 0) }}" />

                                    <x-label value="Pendapatan Transfer (Realisasi)" />
                                    <x-input type="number" name="pendapatan_transfer_realisasi" class="w-full p-2" value="{{ old('pendapatan_transfer_realisasi', 0) }}" />
                                </div>
                                <div class="space-y-2">
                                    <x-label value="Pendapatan Lain-lain (Anggaran)" />
                                    <x-input type="number" name="pendapatan_lain_anggaran" class="w-full p-2" value="{{ old('pendapatan_lain_anggaran', 0) }}" />

                                    <x-label value="Pendapatan Lain-lain (Realisasi)" />
                                    <x-input type="number" name="pendapatan_lain_realisasi" class="w-full p-2" value="{{ old('pendapatan_lain_realisasi', 0) }}" />
                                </div>
                            </div>
                        </div>

                        {{-- Belanja --}}
                        <div class="mb-10">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 border-b border-gray-200 dark:border-gray-700 pb-2 mb-4">
                                Belanja
                            </h3>
                                <div class="space-y-2">
                                    <x-label value="Bidang Penyelenggaraan Pemerintah Desa (Anggaran)" />
                                    <x-input type="number" name="belanja_penyelenggaraan_anggaran" class="w-full p-2" value="{{ old('belanja_penyelenggaraan_anggaran', 0) }}" />

                                    <x-label value="Bidang Penyelenggaraan Pemerintah Desa (Realisasi)" />
                                    <x-input type="number" name="belanja_penyelenggaraan_realisasi" class="w-full p-2" value="{{ old('belanja_penyelenggaraan_realisasi', 0) }}" />
                                </div>
                                <div class="space-y-2">
                                    <x-label value="Bidang Pelaksanaan Pembangunan Desa (Anggaran)" />
                                    <x-input type="number" name="belanja_pembangunan_anggaran" class="w-full p-2" value="{{ old('belanja_pembangunan_anggaran', 0) }}" />

                                    <x-label value="Bidang Pelaksanaan Pembangunan Desa (Realisasi)" />
                                    <x-input type="number" name="belanja_pembangunan_realisasi" class="w-full p-2" value="{{ old('belanja_pembangunan_realisasi', 0) }}" />
                                </div>
                                <div class="space-y-2">
                                    <x-label value="Bidang Pembinaan Kemasyarakatan Desa (Anggaran)" />
                                    <x-input type="number" name="belanja_kemasyarakatan_anggaran" class="w-full p-2" value="{{ old('belanja_kemasyarakatan_anggaran', 0) }}" />

                                    <x-label value="Bidang Pembinaan Kemasyarakatan Desa (Realisasi)" />
                                    <x-input type="number" name="belanja_kemasyarakatan_realisasi" class="w-full p-2" value="{{ old('belanja_kemasyarakatan_realisasi', 0) }}" />
                                </div>
                                <div class="space-y-2">
                                    <x-label value="Bidang Pemberdayaan Masyarakat Desa (Anggaran)" />
                                    <x-input type="number" name="belanja_pemberdayaan_anggaran" class="w-full p-2" value="{{ old('belanja_pemberdayaan_anggaran', 0) }}" />

                                    <x-label value="Bidang Pemberdayaan Masyarakat Desa (Realisasi)" />
                                    <x-input type="number" name="belanja_pemberdayaan_realisasi" class="w-full p-2" value="{{ old('belanja_pemberdayaan_realisasi', 0) }}" />
                                </div>
                                <div class="space-y-2">
                                    <x-label value="Bidang Penanggulangan Bencana, Keadaan Darurat dan Mendesak Desa (Anggaran)" />
                                    <x-input type="number" name="belanja_bencana_anggaran" class="w-full p-2" value="{{ old('belanja_bencana_anggaran', 0) }}" />

                                    <x-label value="Bidang Penanggulangan Bencana, Keadaan Darurat dan Mendesak Desa (Realisasi)" />
                                    <x-input type="number" name="belanja_bencana_realisasi" class="w-full p-2" value="{{ old('belanja_bencana_realisasi', 0) }}" />
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-8 border-t border-gray-200 dark:border-gray-700 pt-6">
                            <x-button>
                                {{ __('Simpan Data APBDesa') }}
                            </x-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
