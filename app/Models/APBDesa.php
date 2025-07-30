<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class APBDesa extends Model
{
    use HasFactory;

    protected $table = 'apb_desa';

    protected $fillable = [
        'tahun',

        // Pendapatan
        'pendapatan_asli_desa_anggaran',
        'pendapatan_asli_desa_realisasi',
        'pendapatan_transfer_anggaran',
        'pendapatan_transfer_realisasi',
        'pendapatan_lain_anggaran',
        'pendapatan_lain_realisasi',

        // Belanja
        'belanja_penyelenggaraan_anggaran',
        'belanja_penyelenggaraan_realisasi',
        'belanja_pembangunan_anggaran',
        'belanja_pembangunan_realisasi',
        'belanja_kemasyarakatan_anggaran',
        'belanja_kemasyarakatan_realisasi',
        'belanja_pemberdayaan_anggaran',
        'belanja_pemberdayaan_realisasi',
        'belanja_bencana_anggaran',
        'belanja_bencana_realisasi',
    ];
}
