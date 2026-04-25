<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatriksController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KRSController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/matriks', [MatriksController::class, 'index' ])->name('matriks'); 
Route::get('/mahasiswa', [MahasiswaController::class, 'index' ])->name('mahasiswa'); 
Route::get('/dosen', [DosenController::class, 'index' ])->name('dosen'); 
Route::get('/krs', [KRSController::class, 'index' ])->name('krs'); 