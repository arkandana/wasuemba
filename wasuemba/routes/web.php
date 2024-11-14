<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;
use App\Models\Wisata;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\WisataController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/wisata/tambah', [WisataController::class, 'create'])->middleware(['auth', 'verified'])->name('wisata.create');
Route::post('/wisata/tambah', [WisataController::class, 'store'])->middleware(['auth', 'verified'])->name('wisata.store');
Route::delete('/wisata/{id}', [WisataController::class, 'destroy'])->middleware(['auth', 'verified'])->name('wisata.destroy');

Route::get('/wisata', function () {
    return view('wisata',['wisataList'=>wisata::all()]);
});

Route::get('/berita/tambah', [BeritaController::class, 'create'])->middleware(['auth', 'verified'])->name('berita.create');
Route::post('/berita/tambah', [BeritaController::class, 'store'])->middleware(['auth', 'verified'])->name('berita.store');
Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('berita.destroy');

Route::get('/berita', function () {
    return view('berita',['posts'=>Berita::all()]);
});

Route::get('/berita/{post:slug}', function(Berita $post){

    return view('berita1',['title'=>'Single Post','post'=>$post]);
});

Route::get('/data', function () {
    return view('data');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);



require __DIR__.'/auth.php';
