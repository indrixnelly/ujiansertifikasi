<?php

use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\HubungiController;

Route::get('/', [HistoryController::class, 'show']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/keluar', [LoginController::class, 'keluar']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/history', HistoryController::class)->middleware('auth');
Route::get('/pengguna', [PenggunaController::class, 'index'])->middleware('auth');
Route::post('/pengguna', [PenggunaController::class, 'store'])->middleware('auth');
Route::get('/pengguna/create', [PenggunaController::class, 'create'])->name('pengguna.create')->middleware('auth');
Route::delete('/pengguna/{id}', [PenggunaController::class, 'destroy'])->middleware('auth');
Route::get('/pengguna/{id}/edit', [PenggunaController::class, 'edit'])->name('pengguna.edit')->middleware('auth');
Route::put('/pengguna/{id}', [PenggunaController::class, 'update'])->name('pengguna.update')->middleware('auth');
Route::get('/history/{id}/detail', [HistoryController::class, 'detail'])->middleware('auth');
// Route::resource('/komentar', KomentarController::class)->middleware('auth');
Route::get('/komentar/create/{id}', [KomentarController::class, 'create'])->name('komentar.create')->middleware('auth');
Route::get('/historyy/{id}', [HistoryController::class, 'showDetail'])->name('detail');
Route::post('/komentar', [KomentarController::class, 'store'])->name('komentar.store');
Route::get('/komentar/{id}/edit', [KomentarController::class, 'edit'])->name('komentar.edit');
Route::put('/komentar/{id}', [KomentarController::class, 'update'])->name('komentar.update');
Route::delete('/komentar/{id}', [KomentarController::class, 'destroy'])->name('komentar.destroy');
Route::get('/registrasi', [RegistrasiController::class, 'register'])->name('register');
Route::post('/registrasi', [RegistrasiController::class, 'store']);

// Tampilan Detail Layanan dan Jasa
Route::get('/detail1', [LayananController::class, 'detail1']);
Route::get('/detail2', [LayananController::class, 'detail2']);
Route::get('/detail3', [LayananController::class, 'detail3']);
Route::get('/detail4', [LayananController::class, 'detail4']);
Route::get('/detail5', [LayananController::class, 'detail5']);
Route::get('/detail6', [LayananController::class, 'detail6']);