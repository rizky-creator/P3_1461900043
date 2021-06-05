<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('/barang',[barangcontroller::class,'index']);
route::get('/barang/tambah',[barangcontroller::class,'tambah']);
route::get('/barang/hapus{id}',[barangcontroller::class,'hapus']);
Route::get('/barang/cari',[BarangController::class,'cari']);
route::post('/barang/store',[barangcontroller::class,'store']);
route::get('/barang/edit/{id}',[barangcontroller::class,'edit']);
route::post('/barang/update',[barangcontroller::class,'update']);