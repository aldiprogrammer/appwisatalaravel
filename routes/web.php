<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\WisataController;
use Illuminate\Support\Facades\Route;



Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::post('/kategori', [KategoriController::class, 'store'])->name('store');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('update');
Route::delete('/kategori/{id}', [KategoriController::class, 'delete'])->name('deletekategori');

Route::get('/wisata', [WisataController::class, 'index'])->name('wisata');
Route::get('/tambahwisata', [WisataController::class, 'tambahwisata'])->name('tambahwisata');
