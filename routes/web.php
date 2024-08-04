<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KeluhanController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/pegawai',\App\Http\Controllers\PegawaiController::class);
Route::resource('/customers',\App\Http\Controllers\CustomersController::class);
Route::resource('/kendaraan',\App\Http\Controllers\KendaraanController::class);
Route::resource('/supplier',\App\Http\Controllers\SupplierController::class);
Route::resource('/barang',\App\Http\Controllers\BarangController::class);
Route::resource('keluhan', KeluhanController::class);

Route::get('/keluhan/{keluhan}', [KeluhanController::class, 'show'])->name('keluhan.show');