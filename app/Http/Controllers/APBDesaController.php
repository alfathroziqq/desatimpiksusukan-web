<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\APBDesa;

class APBDesaController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua tahun dari database (distinct untuk dropdown)
        $tahunList = APBDesa::select('tahun')->distinct()->orderBy('tahun', 'desc')->pluck('tahun');

        // Ambil tahun yang dipilih dari query string, default ke tahun terbaru
        $tahunDipilih = $request->input('tahun') ?? $tahunList->first();

        // Ambil data berdasarkan tahun yang dipilih
        $data = APBDesa::where('tahun', $tahunDipilih)->first();

        // Default nilai jika data kosong
        $totalPendapatan = 0;
        $totalPendapatanRealisasi = 0;
        $totalBelanja = 0;
        $totalBelanjaRealisasi = 0;
        $surplus = 0;

        if ($data) {
            // Hitung total pendapatan dan realisasi
            $totalPendapatan = 
                $data->pendapatan_asli_desa_anggaran +
                $data->pendapatan_transfer_anggaran +
                $data->pendapatan_lain_anggaran;

            $totalPendapatanRealisasi = 
                $data->pendapatan_asli_desa_realisasi +
                $data->pendapatan_transfer_realisasi +
                $data->pendapatan_lain_realisasi;

            // Hitung total belanja dan realisasi
            $totalBelanja = 
                $data->belanja_penyelenggaraan_anggaran +
                $data->belanja_pembangunan_anggaran +
                $data->belanja_kemasyarakatan_anggaran +
                $data->belanja_pemberdayaan_anggaran +
                $data->belanja_bencana_anggaran;

            $totalBelanjaRealisasi = 
                $data->belanja_penyelenggaraan_realisasi +
                $data->belanja_pembangunan_realisasi +
                $data->belanja_kemasyarakatan_realisasi +
                $data->belanja_pemberdayaan_realisasi +
                $data->belanja_bencana_realisasi;

            // Hitung surplus atau defisit
            $surplus = $totalPendapatanRealisasi - $totalBelanjaRealisasi;
        }

        return view('admin.apb.index', compact(
            'tahunList',
            'tahunDipilih',
            'data',
            'totalPendapatan',
            'totalPendapatanRealisasi',
            'totalBelanja',
            'totalBelanjaRealisasi',
            'surplus'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tahun' => 'required|integer|digits:4',

            // Pendapatan
            'pendapatan_asli_desa_anggaran' => 'required|numeric',
            'pendapatan_asli_desa_realisasi' => 'required|numeric',
            'pendapatan_transfer_anggaran' => 'required|numeric',
            'pendapatan_transfer_realisasi' => 'required|numeric',
            'pendapatan_lain_anggaran' => 'required|numeric',
            'pendapatan_lain_realisasi' => 'required|numeric',

            // Belanja
            'belanja_penyelenggaraan_anggaran' => 'required|numeric',
            'belanja_penyelenggaraan_realisasi' => 'required|numeric',
            'belanja_pembangunan_anggaran' => 'required|numeric',
            'belanja_pembangunan_realisasi' => 'required|numeric',
            'belanja_kemasyarakatan_anggaran' => 'required|numeric',
            'belanja_kemasyarakatan_realisasi' => 'required|numeric',
            'belanja_pemberdayaan_anggaran' => 'required|numeric',
            'belanja_pemberdayaan_realisasi' => 'required|numeric',
            'belanja_bencana_anggaran' => 'required|numeric',
            'belanja_bencana_realisasi' => 'required|numeric',
        ]);

        APBDesa::create($validated);

        return redirect()->route('admin.apb.index')->with('success', 'Data APBDesa berhasil disimpan.');
    }

    public function showApbDesa($tahun)
    {
        $data = APBDesa::where('tahun', $tahun)->firstOrFail();

        $totalPendapatan = 
            $data->pendapatan_asli_desa_anggaran +
            $data->pendapatan_transfer_anggaran +
            $data->pendapatan_lain_anggaran;

        $totalPendapatanRealisasi = 
            $data->pendapatan_asli_desa_realisasi +
            $data->pendapatan_transfer_realisasi +
            $data->pendapatan_lain_realisasi;

        $totalBelanja = 
            $data->belanja_penyelenggaraan_anggaran +
            $data->belanja_pembangunan_anggaran +
            $data->belanja_kemasyarakatan_anggaran +
            $data->belanja_pemberdayaan_anggaran +
            $data->belanja_bencana_anggaran;

        $totalBelanjaRealisasi = 
            $data->belanja_penyelenggaraan_realisasi +
            $data->belanja_pembangunan_realisasi +
            $data->belanja_kemasyarakatan_realisasi +
            $data->belanja_pemberdayaan_realisasi +
            $data->belanja_bencana_realisasi;

        $surplus = $totalPendapatanRealisasi - $totalBelanjaRealisasi;

        return view('apbdesa.show', compact(
            'data',
            'totalPendapatan',
            'totalPendapatanRealisasi',
            'totalBelanja',
            'totalBelanjaRealisasi',
            'surplus'
        ));
    }
}
