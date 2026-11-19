<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MahasiswaController;

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

    // ==========================================
    // MODUL AYESHA (Anggota & Kartu)
    // ==========================================

    // ==========================================
    // MODUL NAUVAL (Buku & Mahasiswa)
    // ==========================================
    Route::resource('buku', BukuController::class)->except(['create', 'show']);
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

    // ==========================================
    // MODUL BAGAS (Pengaduan)
    // ==========================================
});