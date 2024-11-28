<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/jurusan', [HomeController::class, 'jurusan'])->name('jurusan');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/agenda', [HomeController::class, 'agenda']);
Route::get('/informasi', [HomeController::class, 'informasi'])->name('informasi');

Route::get('/jurusan/{id}', [JurusanController::class, 'show'])->name('jurusan.show');

// Route untuk menampilkan halaman login (hanya bisa diakses oleh guest)
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login')->middleware('guest');

// Route untuk menangani proses login (hanya bisa diakses oleh guest)
Route::post('/login', [AuthController::class, 'login'])->name('login.submit')->middleware('guest');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Route untuk logout (hanya bisa diakses oleh user yang sudah login)
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Rute yang memerlukan autentikasi untuk petugas
Route::middleware('auth')->group(function () {

    // Route untuk menampilkan dashboard admin
    Route::get('/admin', function () {
        return view('admin.dashboard.index', [
            'title' => 'Dashboard',
        ]);
    });

    // Route untuk menampilkan daftar petugas
    Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index');
    // Route untuk menambah petugas
    Route::get('/petugas/create', [PetugasController::class, 'create'])->name('petugas.create');
    Route::post('/petugas', [PetugasController::class, 'store'])->name('petugas.store');
    // Route untuk menampilkan detail petugas
    Route::get('/petugas/{petugas}', [PetugasController::class, 'show'])->name('petugas.show');
    // Route untuk mengedit petugas
    Route::get('/petugas/{petugas}/edit', [PetugasController::class, 'edit'])->name('petugas.edit');
    Route::put('/petugas/{petugas}', [PetugasController::class, 'update'])->name('petugas.update');
    // Route untuk menghapus petugas
    Route::delete('/petugas/{petugas}', [PetugasController::class, 'destroy'])->name('petugas.destroy');

    // Route untuk kategori
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    // Route untuk post
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

    // Route untuk galeri
    Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
    Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries.create');
    Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries.store');
    Route::get('/galleries/{gallery}', [GalleryController::class, 'show'])->name('galleries.show');
    Route::get('/galleries/{gallery}/edit', [GalleryController::class, 'edit'])->name('galleries.edit');
    Route::put('/galleries/{gallery}', [GalleryController::class, 'update'])->name('galleries.update');
    Route::delete('/galleries/{gallery}', [GalleryController::class, 'destroy'])->name('galleries.destroy');

    // Route untuk menyimpan foto yang diupload
    Route::post('/images/store', [ImageController::class, 'store'])->name('images.store');

    // Route untuk menghapus foto
    Route::delete('/images/{id}', [ImageController::class, 'destroy'])->name('images.destroy');
});
