<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

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

Route::get('/home', [BeritaController::class, 'home'])->name('home');
Route::get('/beritaslide', [BeritaController::class, 'slideBerita']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //tampil ke view
    Route::get('/home', [BeritaController::class, 'home'])->name('home');
    Route::get('/beritaslide', [BeritaController::class, 'slideBerita']);


    //berita
    Route::get('/berita', [BeritaController::class, 'index'])->name('dashboard.berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('dashboard.berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('dashboard.berita.store');
    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('dashboard.berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('dashboard.berita.update');
    Route::delete('/dashboard/berita/{id}', [BeritaController::class, 'delete'])->name('dashboard.berita.delete');
    Route::get('/dashboard/berita/{id}/detail', [BeritaController::class, 'show'])->name('dashboard.berita.detail');

    //user
    Route::get('/user', [UserController::class, 'index'])->name('dashboard.user.index');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('dashboard.user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('dashboard.user.update');
    Route::post('/user', [UserController::class, 'store'])->name('dashboard.user.store');
    Route::get('/user/create', [UserController::class, 'create'])->name('dashboard.user.create');
    Route::delete('/dashboard/user/{id}', [UserController::class, 'delete'])->name('dashboard.user.delete');

    //Route::middleware(['CheckRole:admin'])->group(function () {
      //  Route::get('/dashboard/berita', function () {
        //    return view('dashboard.berita.index');
        //});
        //Route::get('dashboard/berita/{id}/edit', function () {
          //  return view('dashboard.berita.edit');
        //});
    
    //Route::middleware(['auth', 'role:admin'])->group(function () {
    //    Route::get('dashboard/berita', [BeritaController::class, 'index'])->name('dashboard.berita.index');
    //    Route::get('dashboard/berita/{id}/edit', [BeritaController::class, 'edit'])->name('dashboard.berita.edit');
    //    Route::delete('dashboard/berita/{id}', [BeritaController::class, 'delete'])->name('dashboard.berita.delete');
   // });
    
    //Route::middleware(['auth', 'role:author'])->group(function () {
    //    Route::get('dashboard/berita/create', [BeritaController::class, 'create'])->name('dashboard.berita.create');
     //   Route::post('dashboard/berita', [BeritaController::class, 'store'])->name('dashboard.berita.store');
       // Route::put('dashboard/berita/{id}', [BeritaController::class, 'update'])->name('dashboard.berita.update');
    //});
    
});


require __DIR__.'/auth.php';