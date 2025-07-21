<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\AparaturController;
use App\Http\Controllers\ProdukUmkmController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\PermohonanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Ini adalah file routing utama untuk aplikasi web.
| Rute dibagi menjadi:
| 1. Halaman Publik
| 2. Halaman Admin (dengan middleware autentikasi)
*/

/*
|--------------------------------------------------------------------------
| HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/', fn() => view('welcome'))->name('welcome');

// Sejarah Desa
Route::get('/sejarah-desa', fn() => view('sejarah-desa'))->name('sejarah-desa');

// Tata Kelola Desa
Route::get('/tata-kelola-desa', action: fn() => view('tata-kelola'))->name('tata-kelola');

// Aparatur Desa
Route::get('/aparatur', fn() => view('aparatur'))->name('aparatur.index');

// Berita Desa
Route::get('/berita', [BeritaController::class, 'publik'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'detail'])->name('berita.detail');

// Galeri Desa
Route::get('/galeri-desa', fn() => view('galeri'))->name('galeri.index');

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

/*
|--------------------------------------------------------------------------
| HALAMAN ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

    // Aparatur Desa
    Route::resource('/admin/aparatur', AparaturController::class)->names('admin.aparatur');

    // Berita
    Route::resource('/admin/berita', BeritaController::class)->names('admin.berita');

    // Galeri Desa
    Route::resource('/admin/galeri', GaleriController::class)->names('admin.galeri');

    // Belanja
    Route::resource('/admin/produk-umkm', ProdukUmkmController::class)->names('admin.produk-umkm');

    // Dokumen
    Route::resource('/admin/dokumen', DokumenController::class)->names('admin.dokumen');

    // Permohonan Informasi
    Route::get('/admin/permohonan', [PermohonanController::class, 'index'])->name('admin.permohonan.index');
    Route::patch('/admin/permohonan/{id}/toggle', [PermohonanController::class, 'toggleStatus'])->name('admin.permohonan.toggle');
});
