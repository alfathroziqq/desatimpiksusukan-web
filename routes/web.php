<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::get('/', fn() => view('welcome'))->name('welcome');

// Sejarah Desa
Route::get('/sejarah-desa', fn() => view('sejarah-desa'))->name('sejarah-desa');

// Tata Kelola Desa
Route::get('/tata-kelola-desa', action: fn() => view('tata-kelola'))->name('tata-kelola');

// Berita Desa
Route::get('/berita', [BeritaController::class, 'publik'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'detail'])->name('berita.detail');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

    // Berita Admin
    Route::resource('/admin/berita', BeritaController::class)->names('admin.berita');
});
