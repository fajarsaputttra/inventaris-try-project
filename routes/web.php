<?php

use App\Http\Controllers\AsetController;
use App\Http\Controllers\KategoriAsetController;
use App\Http\Controllers\LokasiAsetController;
use App\Models\KategoriAset;
use App\Models\LokasiAset;
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
    return view('home');
});

// Aset
Route::get('/aset',[AsetController::class,'index']);
Route::get('/aset/create',[AsetController::class,'create']);
Route::post('/aset/store',[AsetController::class,'store']);
Route::get('/aset/{IDAset}/edit',[AsetController::class,'edit']);
Route::put('/aset/{IDAset}',[AsetController::class,'update']);
Route::delete('/aset/{IDAset}',[AsetController::class,'destroy']);

//Kategori Aset
Route::get('/kategoriaset',[KategoriAsetController::class,'index']);
Route::get('/kategoriaset/create',[KategoriAsetController::class,'create']);
Route::post('/kategoriaset/store',[KategoriAsetController::class,'store']);
Route::get('/kategoriaset/{IDKategori}/edit',[KategoriAsetController::class,'edit']);
Route::put('/kategoriaset/{IDKategori}',[KategoriAsetController::class,'update']);
Route::delete('kategoriaset/{IDkategori}',[KategoriAsetController::class,'destroy']);

//Lokasi Aset
Route::get('/lokasiaset',[LokasiAsetController::class,'index']);
Route::get('/lokasiaset/create',[LokasiAsetController::class,'create']);
Route::post('/lokasiaset/store',[LokasiAsetController::class,'store']);
Route::get('/lokasiaset/{IDLokasi}/edit',[LokasiAsetController::class,'edit']);
Route::put('/lokasiaset/{IDLokasi}',[LokasiAsetController::class,'update']);
Route::delete('/lokasiaset/{IDLokasi}',[LokasiAsetController::class,'destroy']);