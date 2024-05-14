<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\CustomersController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/pegawai',\App\Http\Controllers\PegawaiController::class);
Route::resource('/customers',\App\Http\Controllers\CustomersController::class);