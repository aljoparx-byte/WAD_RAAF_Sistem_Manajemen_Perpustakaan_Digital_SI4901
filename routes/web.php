<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KartuController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PenerbitController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // ==========================================
    // MODUL ALDO (Penerbit)
    // ==========================================
    Route::get('/penerbit', [PenerbitController::class, 'index']);
    Route::get('/penerbit/tambah', [PenerbitController::class, 'create']);
    Route::post('/penerbit', [PenerbitController::class, 'store']);
    Route::get('/penerbit/{id}/edit', [PenerbitController::class, 'edit']);
    Route::put('/penerbit/{id}', [PenerbitController::class, 'update']);
    Route::delete('/penerbit/{id}', [PenerbitController::class, 'destroy']);

    // ==========================================
    // MODUL AYESHA (Anggota & Kartu)
    // ==========================================
    Route::patch('/anggota/{id}/tipe', [AnggotaController::class, 'updateTipe'])->name('anggota.updateTipe');
    Route::resource('anggota', AnggotaController::class)->except(['show']);
    Route::get('/kartu', [KartuController::class, 'index'])->name('kartu.index');
    Route::post('/kartu/buat', [KartuController::class, 'buat'])->name('kartu.buat');
    Route::delete('/kartu/hapus', [KartuController::class, 'hapus'])->name('kartu.hapus');

    // ==========================================
    // MODUL NAUVAL (Buku & Mahasiswa)
    // ==========================================
    Route::resource('buku', BukuController::class)->except(['create', 'show']);
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

    // ==========================================
    // MODUL BAGAS (Pengaduan)
    // ==========================================
});