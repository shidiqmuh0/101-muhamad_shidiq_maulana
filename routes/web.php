<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

// Route untuk halaman utama
Route::get('/', [AnimeController::class, 'index'])->name('home');

// Route untuk menampilkan form tambah anime
Route::get('/anime/create', [AnimeController::class, 'create'])->name('anime.create');

// Route untuk menyimpan anime baru
Route::post('/anime', [AnimeController::class, 'store'])->name('anime.store');

// Route untuk menampilkan detail anime
Route::get('/anime/{id}', [AnimeController::class, 'show'])->name('anime.show');

// Route untuk menampilkan form edit anime
Route::get('/anime/{id}/edit', [AnimeController::class, 'edit'])->name('anime.edit');

// Route untuk mengupdate anime
Route::put('/anime/{id}', [AnimeController::class, 'update'])->name('anime.update');

// Route untuk menghapus anime
Route::delete('/anime/{id}', [AnimeController::class, 'destroy'])->name('anime.destroy');
