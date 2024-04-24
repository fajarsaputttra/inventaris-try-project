<?php

use App\Http\Controllers\AsetController;
use App\Http\Controllers\KategoriAsetController;
use App\Http\Controllers\LokasiAsetController;
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
    return view('welcome');
});

// Aset
Route::get('/aset',[AsetController::class,'index']);
Route::get('/aset/create',[AsetController::class,'create']);
Route::post('/aset/store',[AsetController::class,'store']);

//Kategori Aset
Route::get('/kategoriaset',[KategoriAsetController::class,'index']);

//Lokasi Aset
Route::get('/lokasiaset',[LokasiAsetController::class,'index']);