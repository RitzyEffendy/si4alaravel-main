<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Cara membuat route, profil berasal dari 
//folder views dengan nama file profile
Route::get('/profil', function () {  
    return view('profil');
});

Route::resource('/fakultas', FakultasController::class);
Route::resource('/prodi', ProdiController::class);
Route::resource('/mahasiswa', MahasiswaController::class);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('/sesi', SesiController::class);
Route::resource('/matakuliah', MatakuliahController::class);
Route::resource('/jadwal', JadwalController::class);

Route::get('/tes-sesi', function () {
    return 'Tes berhasil';
});
