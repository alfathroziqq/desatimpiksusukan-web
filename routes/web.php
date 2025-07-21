<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdukUmkmController;

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
});
