<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukUmkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'foto',
        'format_harga',
        'nomor_wa',
    ];

    public function komentars()
    {
        return $this->hasMany(KomentarProduk::class);
    }
}
