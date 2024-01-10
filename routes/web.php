<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PaketdetailController;
use App\Http\Controllers\PelangganController;
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

Route::get('/', function () {
    return view('index.index');
});

Route::resource('barang', BarangController::class);
Route::resource('paket', PaketController::class);
Route::resource('paket.detail', PaketdetailController::class);
Route::resource('detail', PaketdetailController::class);
Route::resource('pelanggan', PelangganController::class);