<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/add', [MahasiswaController::class, 'add']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'delete']);
Route::get('/mahasiswa/cetak', [MahasiswaController::class, 'cetak']);
