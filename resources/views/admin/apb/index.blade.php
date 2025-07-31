@php
    use App\Models\APBDesa;

    $tahunList = APBDesa::select('tahun')->distinct()->orderBy('tahun', 'desc')->pluck('tahun');

    $tahunDipilih = request('tahun') ?? $tahunList->first();
    if (!$tahunDipilih) {
        $tahunDipilih = now()->year;
    }

    $data = APBDesa::where('tahun', $tahunDipilih)->first();
@endphp

@section('title', 'Admin | APBDesa')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('APBDesa - Data Anggaran Pendapatan dan Belanja Desa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Pemilihan Tahun --}}
            <div class="mb-6 flex items-center gap-4">
                <label for="tahun_select" class="font-semibold text-gray-700 dark:text-gray-300">Pilih Tahun APBDesa
                    :</label>
                <select id="tahun_select" class="form-input-style w-auto p-1" onchange="loadAPBDesaData()">
                    @if ($tahunList->isNotEmpty())
                        @foreach ($tahunList as $tahun)
                            <option value="{{ $tahun }}" {{ $tahun == $tahunDipilih ? 'selected' : '' }}>
                                {{ $tahun }}</option>
                        @endforeach
                    @endif
                    <option value="new" class="font-bold text-indigo-600">+ Tambah Tahun Baru</option>
                </select>
            </div>

            {{-- Handle jika data kosong --}}
            @if (!$data)
                <div class="p-6 bg-yellow-100 text-yellow-800 rounded-lg mb-4">
                    <p class="text-center font-bold">Belum ada data APBDesa untuk tahun {{ $tahunDipilih }}.<br>Silakan isi data di
                        bawah ini dan simpan.</p>
                </div>
            @endif

            {{-- APBDesa Dynamic Form --}}
            <form method="POST" action="{{ route('admin.apb.store') }}">
                @csrf
                <input type="hidden" name="tahun" value="{{ $tahunDipilih }}">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Tahun Anggaran :
                            {{ $tahunDipilih }}</h3>

                        {{-- Notifikasi --}}
                        @if (session('success'))
                            <div
                                class="mb-6 p-4 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-lg shadow">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="overflow-x-auto border border-gray-200 dark:border-gray-700 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700/50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-bold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                                            Uraian
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-bold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                                            Anggaran (Rp)
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-bold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                                            Realisasi (Rp)
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                    {{-- Pendapatan --}}
                                    <tr class="bg-gray-100 dark:bg-gray-900/50">
                                        <td colspan="3"
                                            class="px-6 py-3 whitespace-nowrap text-sm font-extrabold text-gray-900 dark:text-white tracking-wide">
                                            I. PENDAPATAN
                                        </td>
                                    </tr>
                                    @php
                                        $pendapatanItems = [
                                            ['name' => 'pendapatan_asli_desa', 'label' => 'Pendapatan Asli Desa'],
                                            ['name' => 'pendapatan_transfer', 'label' => 'Pendapatan Transfer'],
                                            ['name' => 'pendapatan_lain', 'label' => 'Pendapatan Lain-lain'],
                                        ];
                                    @endphp
                                    @foreach ($pendapatanItems as $item)
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">
                                                {{ $item['label'] }}</td>
                                            <td class="px-4 py-2">Rp. <input type="number"
                                                    name="{{ $item['name'] }}_anggaran" class="form-input-style money"
                                                    data-type="pendapatan"
                                                    value="{{ old($item['name'] . '_anggaran', $data->{$item['name'] . '_anggaran'} ?? 0) }}">
                                            </td>
                                            <td class="px-4 py-2">Rp. <input type="number"
                                                    name="{{ $item['name'] }}_realisasi" class="form-input-style money"
                                                    data-type="pendapatan"
                                                    value="{{ old($item['name'] . '_realisasi', $data->{$item['name'] . '_realisasi'} ?? 0) }}">
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr class="bg-gray-50 dark:bg-gray-700/60 font-bold">
                                        <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">Total Pendapatan
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                            id="total_pendapatan_anggaran"></td>
                                        <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                            id="total_pendapatan_realisasi"></td>
                                    </tr>

                                    {{-- Belanja --}}
                                    <tr class="bg-gray-100 dark:bg-gray-900/50">
                                        <td colspan="3"
                                            class="px-6 py-3 whitespace-nowrap text-sm font-extrabold text-gray-900 dark:text-white tracking-wide">
                                            II. BELANJA
                                        </td>
                                    </tr>
                                    @php
                                        $belanjaItems = [
                                            [
                                                'name' => 'belanja_penyelenggaraan',
                                                'label' => 'Penyelenggaraan Pemerintahan',
                                            ],
                                            ['name' => 'belanja_pembangunan', 'label' => 'Pelaksanaan Pembangunan'],
                                            ['name' => 'belanja_kemasyarakatan', 'label' => 'Pembinaan Kemasyarakatan'],
                                            ['name' => 'belanja_pemberdayaan', 'label' => 'Pemberdayaan Masyarakat'],
                                            [
                                                'name' => 'belanja_bencana',
                                                'label' => 'Penanggulangan Bencana & Darurat',
                                            ],
                                        ];
                                    @endphp
                                    @foreach ($belanjaItems as $item)
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">
                                                {{ $item['label'] }}</td>
                                            <td class="px-4 py-2">Rp. <input type="number"
                                                    name="{{ $item['name'] }}_anggaran" class="form-input-style money"
                                                    data-type="belanja"
                                                    value="{{ old($item['name'] . '_anggaran', $data->{$item['name'] . '_anggaran'} ?? 0) }}">
                                            </td>
                                            <td class="px-4 py-2">Rp. <input type="number"
                                                    name="{{ $item['name'] }}_realisasi" class="form-input-style money"
                                                    data-type="belanja"
                                                    value="{{ old($item['name'] . '_realisasi', $data->{$item['name'] . '_realisasi'} ?? 0) }}">
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr class="bg-gray-50 dark:bg-gray-700/60 font-bold">
                                        <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">Total Belanja
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                            id="total_belanja_anggaran"></td>
                                        <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                            id="total_belanja_realisasi"></td>
                                    </tr>

                                    {{-- Surplus / Defisit --}}
                                    <tr class="bg-indigo-100 dark:bg-indigo-900/50 font-extrabold">
                                        <td class="px-6 py-4 text-sm text-indigo-800 dark:text-indigo-200">SURPLUS /
                                            (DEFISIT)</td>
                                        <td class="px-6 py-4 text-sm text-indigo-800 dark:text-indigo-200"
                                            id="surplus_defisit_anggaran"></td>
                                        <td class="px-6 py-4 text-sm text-indigo-800 dark:text-indigo-200"
                                            id="surplus_defisit_realisasi"></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div
                            class="flex items-center justify-end mt-8 border-t border-gray-200 dark:border-gray-700 pt-6">
                            <x-button>
                                {{ __('Simpan Data APB Desa') }}
                            </x-button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Tambah Tahun -->
    <div id="modalTahunBaru" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 w-full max-w-md">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Masukkan Tahun Anggaran Baru</h3>
            <input type="number" id="inputTahunBaru" class="form-input-style w-full mb-4" placeholder="Contoh: 2025" />
            <div class="flex justify-end gap-2">
                <button onclick="closeModal()"
                    class="px-4 py-2 bg-gray-300 dark:bg-gray-700 text-gray-800 dark:text-white rounded">Batal</button>
                <button onclick="submitTahunBaru()" class="px-4 py-2 bg-indigo-600 text-white rounded">Oke</button>
            </div>
        </div>
    </div>

    @push('styles')
        <style>
            .form-input-style {
                border: 1px solid #d1d5db;
                background-color: #f9fafb;
                color: #111827;
                border-radius: 0.5rem;
                padding: 0.5rem 0.75rem;
                width: 100%;
                transition: all 0.2s ease-in-out;
                -webkit-appearance: none;
                -moz-appearance: textfield;
            }

            .dark .form-input-style {
                border-color: #4b5563;
                background-color: #374151;
                color: #f3f4f6;
            }

            .form-input-style:focus {
                outline: none;
                border-color: #4f46e5;
                box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.3);
            }

            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            // Function handle pilihan tahun
            function loadAPBDesaData() {
                const select = document.getElementById('tahun_select');
                const selectedValue = select.value;

                if (selectedValue === 'new') {
                    openModal();
                } else {
                    window.location.href = `?tahun=${selectedValue}`;
                }
            }

            function openModal() {
                document.getElementById('modalTahunBaru').classList.remove('hidden');
                document.getElementById('inputTahunBaru').value = new Date().getFullYear();
            }

            function closeModal() {
                document.getElementById('modalTahunBaru').classList.add('hidden');
                const select = document.getElementById('tahun_select');
                const defaultTahun = "{{ $tahunDipilih ?? '' }}";
                if (defaultTahun) {
                    select.value = defaultTahun;
                } else {
                    select.selectedIndex = 0;
                }
            }

            function submitTahunBaru() {
                const tahunBaru = document.getElementById('inputTahunBaru').value.trim();
                if (tahunBaru && !isNaN(tahunBaru) && tahunBaru.length === 4) {
                    window.location.href = `?tahun=${tahunBaru}`;
                } else {
                    alert('Tahun tidak valid. Masukkan 4 digit angka.');
                }
            }

            function formatRupiah(angka) {
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 0
                }).format(angka);
            }

            // Hitung dan update total
            function updateTotals() {
                let totalPendapatanAnggaran = 0;
                let totalPendapatanRealisasi = 0;
                let totalBelanjaAnggaran = 0;
                let totalBelanjaRealisasi = 0;

                // Hitung Pendapatan
                document.querySelectorAll('input[data-type="pendapatan"]').forEach(input => {
                    const value = parseFloat(input.value) || 0;
                    if (input.name.includes('_anggaran')) {
                        totalPendapatanAnggaran += value;
                    } else if (input.name.includes('_realisasi')) {
                        totalPendapatanRealisasi += value;
                    }
                });

                // Hitung Belanja
                document.querySelectorAll('input[data-type="belanja"]').forEach(input => {
                    const value = parseFloat(input.value) || 0;
                    if (input.name.includes('_anggaran')) {
                        totalBelanjaAnggaran += value;
                    } else if (input.name.includes('_realisasi')) {
                        totalBelanjaRealisasi += value;
                    }
                });

                // Hitung surplus defisit
                const surplusDefisitAnggaran = totalPendapatanAnggaran - totalBelanjaAnggaran;
                const surplusDefisitRealisasi = totalPendapatanRealisasi - totalBelanjaRealisasi;

                document.getElementById('total_pendapatan_anggaran').textContent = formatRupiah(totalPendapatanAnggaran);
                document.getElementById('total_pendapatan_realisasi').textContent = formatRupiah(totalPendapatanRealisasi);
                document.getElementById('total_belanja_anggaran').textContent = formatRupiah(totalBelanjaAnggaran);
                document.getElementById('total_belanja_realisasi').textContent = formatRupiah(totalBelanjaRealisasi);
                document.getElementById('surplus_defisit_anggaran').textContent = formatRupiah(surplusDefisitAnggaran);
                document.getElementById('surplus_defisit_realisasi').textContent = formatRupiah(surplusDefisitRealisasi);
            }

            document.querySelectorAll('.money').forEach(input => {
                input.addEventListener('input', updateTotals);
            });

            document.addEventListener('DOMContentLoaded', updateTotals);
        </script>
    @endpush
</x-app-layout>
