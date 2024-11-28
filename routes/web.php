<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/pusat', function () {
    return view('pusat');
});

Route::get('/ukm', function () {
    return view('ukm');
});


Route::get('/Lembaga', function () {
    return view('Lembaga');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/struktur2', function () {
    return view('struktur2');
});

Route::get('/contentberita', function () {
    return view('contentberita');
});

Route::get('/beritaslide', function () {
    return view('beritaslide');
});

Route::get('/puslitpen', function () {
    return view('puslitpen');
});

Route::get('/pkm', function () {
    return view('pkm');
});

Route::get('/pgsa', function () {
    return view('pgsa');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/berita', [BeritaController::class, 'index'])->name('dashboard.berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('dashboard.berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('dashboard.berita.store');

    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('dashboard.berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('dashboard.berita.update');
    
    Route::delete('/dashboard/berita/{id}', [BeritaController::class, 'delete'])->name('dashboard.berita.delete');

});

require __DIR__.'/auth.php';
