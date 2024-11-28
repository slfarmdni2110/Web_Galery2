<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PetugasController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\API\GalleryController;
use App\Http\Controllers\API\JurusanController;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// Route untuk API HomeController
Route::get('/home', [HomeController::class, 'index']);
Route::get('/galeri', [HomeController::class, 'galeri']);
Route::get('/agenda', [HomeController::class, 'agenda']);
Route::get('/informasi', [HomeController::class, 'informasi']);


// Route untuk menampilkan detail jurusan
Route::get('/jurusan/{id}', [JurusanController::class, 'show']);

// Route manual untuk GalleryController
Route::get('/galleries', [GalleryController::class, 'index']);       // GET semua data
Route::post('/galleries', [GalleryController::class, 'store']);     // POST tambah data
Route::get('/galleries/{id}', [GalleryController::class, 'show']);  // GET detail data
Route::put('/galleries/{id}', [GalleryController::class, 'update']); // PUT update data
Route::delete('/galleries/{id}', [GalleryController::class, 'destroy']); // DELETE hapus data

Route::get('jurusan', [JurusanController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::put('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);

// Route untuk menambah gambar
Route::post('images', [ImageController::class, 'store']);

// Route untuk menghapus gambar
Route::delete('images/{id}', [ImageController::class, 'destroy']);

// Route untuk mendapatkan daftar gambar
Route::get('images', [ImageController::class, 'index']);

// Route untuk daftar petugas
Route::get('petugas', [PetugasController::class, 'index']);

// Route untuk menambahkan petugas baru
Route::post('petugas', [PetugasController::class, 'store']);

// Route untuk menampilkan data petugas berdasarkan ID
Route::get('petugas/{petugas}', [PetugasController::class, 'show']);

// Route untuk memperbarui data petugas berdasarkan ID
Route::put('petugas/{petugas}', [PetugasController::class, 'update']);

// Route untuk menghapus petugas berdasarkan ID
Route::delete('petugas/{petugas}', [PetugasController::class, 'destroy']);

Route::get('categories', [CategoryController::class, 'index']);
Route::get('categories/{category}', [CategoryController::class, 'show']);
Route::post('categories', [CategoryController::class, 'store']);
Route::put('categories/{category}', [CategoryController::class, 'update']);
Route::delete('categories/{category}', [CategoryController::class, 'destroy']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
