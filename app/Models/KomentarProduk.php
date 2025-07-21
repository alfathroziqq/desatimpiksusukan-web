<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KomentarProduk extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'komentar',
        'produk_umkm_id',
    ];

    public function produk()
    {
        return $this->belongsTo(ProdukUmkm::class);
    }
}
