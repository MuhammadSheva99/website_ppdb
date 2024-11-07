<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminWebController;
use App\Http\Controllers\AdminPPDBController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('home'); // Halaman Home
})->name('home');

// Rute untuk pendaftaran siswa umum
Route::get('/pendaftaran', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/pendaftaran', [SiswaController::class, 'store'])->name('siswa.store');

// Grup rute untuk pendaftaran berdasarkan jalur
Route::prefix('pendaftaran')->group(function () {
    Route::get('/zonasi', [SiswaController::class, 'formZonasi'])->name('pendaftaran.zonasi');
    Route::get('/prestasi', [SiswaController::class, 'formPrestasi'])->name('pendaftaran.prestasi');
    Route::get('/afirmasi', [SiswaController::class, 'formAfirmasi'])->name('pendaftaran.afirmasi');
    Route::get('/perpindahan', [SiswaController::class, 'formPerpindahan'])->name('pendaftaran.perpindahan');

    // Rute untuk form zona prestasi
    Route::get('/zona-prestasi', [PendaftaranController::class, 'showZonaPrestasiForm'])->name('pendaftaran.zona_prestasi');
    Route::post('/zona-prestasi/store', [PendaftaranController::class, 'store'])->name('pendaftaran.zona_prestasi.store');
});

// Rute untuk cek status pendaftaran
Route::get('/cek-status', [SiswaController::class, 'cekStatus'])->name('cek-status');

// Rute untuk pengumuman hasil seleksi
Route::get('/pengumuman', [SiswaController::class, 'pengumuman'])->name('pengumuman');

// Rute untuk halaman bantuan dan FAQ
Route::get('/bantuan-faq', function () {
    return view('bantuan_faq'); // Halaman Bantuan dan FAQ
})->name('bantuan-faq');

// Rute untuk halaman Admin Web
Route::get('/admin-web', [AdminWebController::class, 'index'])->name('admin.web.index');

// Rute untuk halaman Admin PPDB
Route::get('/admin-ppdb', [AdminPPDBController::class, 'index'])->name('admin.ppdb.index');
