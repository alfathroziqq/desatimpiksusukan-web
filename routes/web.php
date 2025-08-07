<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataKelaminController;
use App\Http\Controllers\DataPendidikanController;
use App\Http\Controllers\DataKesehatanController;
use App\Http\Controllers\DataKeagamaanController;
use App\Http\Controllers\DataEkonomiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\AparaturController;
use App\Http\Controllers\ProdukUmkmController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\APBDesaController;

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

// Peta Potensi Desa
Route::get('/peta-potensi-desa', fn() => view('peta-potensi-desa'))->name('peta-potensi-desa');

// Data Jenis Kelamin
Route::get('/data-jenis-kelamin', [DataKelaminController::class, 'public'])->name('data-jenis-kelamin');

// Data Pendidikan
Route::get('/data-pendidikan', [DataPendidikanController::class, 'public'])->name('data-pendidikan');

// Data Kesehatan
Route::get('/data-kesehatan', [DataKesehatanController::class, 'public'])->name('data-kesehatan');

// Data Keagamaan
Route::get('/data-keagamaan', [DataKeagamaanController::class, 'public'])->name('data-keagamaan');

// Data Ekonomi
Route::get('/data-ekonomi', [DataEkonomiController::class, 'public'])->name('data-ekonomi');

// Layanan Publik
Route::get('/layanan-surat-masuk-keluar', fn() => view('mengurus-surat'))->name('mengurus-surat');
Route::get('/layanan-skck', fn() => view('mengurus-skck'))->name('mengurus-skck');
Route::get('/layanan-surat-kehilangan', fn() => view('mengurus-kehilangan'))->name('mengurus-kehilangan');
Route::get('/layanan-administrasi', fn() => view('mengurus-administrasi'))->name('mengurus-administrasi');
Route::get('/layanan-catatan-sipil', fn() => view('mengurus-catat-sipil'))->name('mengurus-catatan-sipil');
Route::get('/layanan-pendaftaran-penduduk', fn() => view('mengurus-pendaftaran'))->name('mengurus-pendaftaran');

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

// APB Desa
Route::get('/apbdesa/data/{tahun}', [App\Http\Controllers\APBDesaController::class, 'getDataByTahun'])->name('apbdesa.data');

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

    // Data Jenis Kelamin
    Route::get('/admin/data-kelamin', [DataKelaminController::class, 'index'])->name('admin.data-kelamin.index');
    Route::post('/admin/data-kelamin', [DataKelaminController::class, 'store'])->name('admin.data-kelamin.store');

    // Data Pendidikan
    Route::get('/admin/data-pendidikan', [DataPendidikanController::class, 'index'])->name('admin.data-pendidikan.index');
    Route::post('/admin/data-pendidikan', [DataPendidikanController::class, 'store'])->name('admin.data-pendidikan.store');

    // Data Kesehatan
    Route::get('/admin/data-kesehatan', [DataKesehatanController::class, 'index'])->name('admin.data-kesehatan.index');
    Route::post('/admin/data-kesehatan', [DataKesehatanController::class, 'store'])->name('admin.data-kesehatan.store');

    // Data Keagamaan
    Route::get('/admin/data-keagamaan', [DataKeagamaanController::class, 'index'])->name('admin.data-keagamaan.index');
    Route::post('/admin/data-keagamaan', [DataKeagamaanController::class, 'store'])->name('admin.data-keagamaan.store');

    // Data Ekonomi
    Route::get('/admin/data-ekonomi', [DataEkonomiController::class, 'index'])->name('admin.data-ekonomi.index');
    Route::post('/admin/data-ekonomi', [DataEkonomiController::class, 'store'])->name('admin.data-ekonomi.store');

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

    // APB Desa (SPB)
    Route::get('/admin/apb-desa', [APBDesaController::class, 'index'])->name('admin.apb.index');
    Route::post('/admin/apb-desa', [APBDesaController::class, 'store'])->name('admin.apb.store');

});
