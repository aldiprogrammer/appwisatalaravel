<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\WisataController;
use App\Http\Controllers\app\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('update');
Route::delete('/kategori/{id}', [KategoriController::class, 'delete'])->name('deletekategori');

Route::get('/wisata', [WisataController::class, 'index'])->name('wisata');
Route::get('/tambahwisata', [WisataController::class, 'tambahwisata'])->name('tambahwisata');
Route::post('wisata', [WisataController::class, 'store'])->name('wisata.store');
Route::get('editwisata/{id}', [WisataController::class, 'edit'])->name('wisata.edit');
Route::put('editwisata/{id}', [WisataController::class, 'update'])->name('wisata.update');

Route::get('/app', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');
