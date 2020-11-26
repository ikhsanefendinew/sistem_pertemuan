<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AcaraController as Acara;
use App\Http\Controllers\UndanganController as Undangan;
use App\Http\Controllers\KategoriController as Kategori;
use App\Http\Controllers\SouvenirController as Souvenir;
use App\Http\Controllers\KertasDesainController as Kertas;
use App\Http\Controllers\UndanganDetailsController as UndanganDetails;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Fitur Acara
Route::middleware('auth:api')->get('/acara',[Acara::class,'getAcara']);
Route::middleware('auth:api')->post('/tambah_acara',[Acara::class,'addAcara']);
Route::middleware('auth:api')->put('/ubah_acara/{id}',[Acara::class,'updateAcara']);
Route::middleware('auth:api')->delete('/hapus_acara/{id}',[Acara::class,'deleteAcara']);

// Fitur Undangan
Route::middleware('auth:api')->get('/undangan',[Undangan::class,'getUndangan']);
Route::middleware('auth:api')->post('/tambah_undangan',[Undangan::class,'addUndangan']);
Route::middleware('auth:api')->put('/ubah_undangan/{id}',[Undangan::class,'updateUndangan']);
Route::middleware('auth:api')->delete('/hapus_undangan/{id}',[Undangan::class,'deleteUndangan']);

// Fitur kategori
Route::middleware('auth:api')->get('/kategori',[Kategori::class,'getKategori']);
Route::middleware('auth:api')->post('/tambah_kategori',[Kategori::class,'addKategori']);
Route::middleware('auth:api')->put('/ubah_kategori/{id}',[Kategori::class,'updateKategori']);
Route::middleware('auth:api')->delete('/hapus_kategori/{id}',[Kategori::class,'deleteKategori']);

// Fitur kategori
Route::middleware('auth:api')->get('/souvenir',[Souvenir::class,'getSouvenir']);
Route::middleware('auth:api')->post('/tambah_souvenir',[Souvenir::class,'addSouvenir']);
Route::middleware('auth:api')->put('/ubah_souvenir/{id}',[Souvenir::class,'updateSouvenir']);
Route::middleware('auth:api')->delete('/hapus_souvenir/{id}',[Souvenir::class,'deleteSouvenir']);

// Fitur Kertas
Route::middleware('auth:api')->get('/kertas',[Kertas::class,'getKertas']);
Route::middleware('auth:api')->post('/tambah_kertas',[Kertas::class,'addKertas']);
Route::middleware('auth:api')->put('/ubah_kertas/{id}',[Kertas::class,'updateKertas']);
Route::middleware('auth:api')->delete('/hapus_kertas/{id}',[Kertas::class,'deleteKertas']);

// Fitur Kertas
Route::middleware('auth:api')->get('/u_details',[UndanganDetails::class,'getUndanganDetails']);
Route::middleware('auth:api')->post('/tambah_u_details',[UndanganDetails::class,'addUndanganDetails']);
Route::middleware('auth:api')->put('/ubah_u_details/{id}',[UndanganDetails::class,'updateUndanganDetails']);
Route::middleware('auth:api')->delete('/hapus_u_details/{id}',[UndanganDetails::class,'deleteUndanganDetails']);



