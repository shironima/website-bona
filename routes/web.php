<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

Route::get('/tentang-kami/visi-misi', function () {
    return view('tentang-kami.visi-misi');
});

Route::get('/tentang-kami/sejarah-singkat', function () {
    return view('tentang-kami.sejarah-singkat');
});

Route::get('/tentang-kami/fasilitas', function () {
    return view('tentang-kami.fasilitas');
});

Route::get('/tentang-kami/guru', function () {
    return view('tentang-kami.guru');
});

Route::get('/tentang-kami/struktur-organisasi', function () {
    return view('tentang-kami.struktur-organisasi');
});


Route::get('/jurusan', function () {
    return view('jurusan');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/ppdb', function () {
    return view('ppdb');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
