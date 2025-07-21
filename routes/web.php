<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdukUmkmController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\PermohonanController;

Route::get('/', fn() => view('welcome'))->name('welcome');

// Sejarah Desa
Route::get('/sejarah-desa', fn() => view('sejarah-desa'))->name('sejarah-desa');

// Tata Kelola Desa
Route::get('/tata-kelola-desa', action: fn() => view('tata-kelola'))->name('tata-kelola');

// Berita Desa
Route::get('/berita', [BeritaController::class, 'publik'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'detail'])->name('berita.detail');

// Belanja
Route::get('/belanja', [ProdukUmkmController::class, 'public'])->name('belanja.index');
Route::get('/belanja/{id}', [ProdukUmkmController::class, 'detail'])->name('belanja.detail');
Route::post('/belanja/{id}/komentar', [ProdukUmkmController::class, 'simpanKomentar'])->name('belanja.komentar');

// Permohonan Informasi
Route::get('/permohonan-informasi', fn() => view('permohonan-informasi'))->name('permohonan.create');
Route::post('/permohonan-informasi', [PermohonanController::class, 'store'])->name('permohonan.store');

// Dokumen Publik
Route::get('/dokumen', [DokumenController::class, 'dokumenPublik'])->name('dokumen.index');
Route::get('/unduh-dokumen/{id}', [DokumenController::class, 'download'])->name('dokumen.download');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

    // Berita
    Route::resource('/admin/berita', BeritaController::class)->names('admin.berita');

    // Belanja
    Route::resource('/admin/produk-umkm', ProdukUmkmController::class)->names('admin.produk-umkm');

    // Dokumen
    Route::resource('/admin/dokumen', DokumenController::class)->names('admin.dokumen');

    // Permohonan Informasi
    Route::get('/admin/permohonan', [PermohonanController::class, 'index'])->name('admin.permohonan.index');
    Route::patch('/admin/permohonan/{id}/toggle', [PermohonanController::class, 'toggleStatus'])->name('admin.permohonan.toggle');
});
