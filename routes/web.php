<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('dashboard',[AdminController::class,'index']);

// Route Login
Route::get('login',[AdminController::class,'login']);

Route::post('login',[AdminController::class,'proses_login']);
// Route Login //

// Route Produk
Route::get('dashboard/produk',[ProdukController::class,'index']);

Route::get('dashboard/produk/tambah',[ProdukController::class,'tambah']);

Route::post('dashboard/produk/tambah',[ProdukController::class,'kirim_tambah']);

Route::get('dashboard/produk/edit/{id}',[ProdukController::class,'edit']);

Route::post('dashboard/produk/edit/{id}',[ProdukController::class,'kirim_edit']);

Route::get('dashboard/produk/hapus/{id}',[ProdukController::class,'hapus']);
// Route Produk //

// Route Pelanggan
Route::get('dashboard/pelanggan',[PelangganController::class,'index']);

Route::get('dashboard/pelanggan/tambah',[PelangganController::class,'tambah']);

Route::post('dashboard/pelanggan/tambah',[PelangganController::class,'kirim_tambah']);

Route::get('dashboard/pelanggan/edit/{id}',[PelangganController::class,'edit']);

Route::post('dashboard/pelanggan/edit/{id}',[PelangganController::class,'kirim_edit']);

Route::get('dashboard/pelanggan/hapus/{id}',[PelangganController::class,'hapus']);
// Route Pelanggan //

// Route Admin
Route::get('dashboard/admin',[UserController::class,'index']);

Route::get('dashboard/admin/tambah',[UserController::class,'tambah']);

Route::post('dashboard/admin/tambah',[UserController::class,'kirim_tambah']);

Route::get('dashboard/admin/edit/{id}',[UserController::class,'edit']);

Route::post('dashboard/admin/edit/{id}',[UserController::class,'kirim_edit']);

Route::get('dashboard/admin/hapus/{id}',[UserController::class,'hapus']);
// Route Admin //