<?php

use App\Http\Controllers\BeliController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

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

Route::get('/halaman_utama' , [HalamanUtamaController::class , 'goToHalamanUtama']);
Route::post('/halaman_utama' , [BeliController::class , 'beliBarang']);


Route::get('/login' , [LoginController::class , 'goToLogin']);
Route::post('/login' , [LoginController::class , 'validateLogin']);


Route::get('/daftar' , [DaftarController::class , 'goToDaftar']);
Route::post('/daftar' , [DaftarController::class , 'validateDaftar']);


Route::get('/logout' , [LogoutController::class , 'goToLogin']);


Route::get('/keranjang/{user}' , [KeranjangController::class , 'goToKeranjang']);
