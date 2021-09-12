<?php

use App\Models\Penjualan;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PenjualanController;

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
    return view('welcome', [
        'title' => 'Home'
    ]);
})->middleware('auth');




Route::get('/profil', [ProfilController::class, 'index'])->middleware('auth');
Route::get('/profil/{id}/edit', [ProfilController::class, 'edit']);
Route::post('/profil/{id}/update', [ProfilController::class, 'update']);
Route::post('/profil/{id}/update-pass', [ProfilController::class, 'update_password']);
Route::post('/profil/update-avatar', [ProfilController::class, 'update_avatar'])->name('avatarUpdate');

Route::get('/barang', [BarangController::class, 'index'])->middleware('auth');
Route::post('/barang/create', [BarangController::class, 'create']);
Route::get('/barang/{id}/edit', [BarangController::class, 'edit']);
Route::post('/barang/{id}/update', [BarangController::class, 'update']);
Route::get('/barang/{id}/delete', [BarangController::class, 'delete']);

Route::get('/penjualan', [PenjualanController::class, 'index'])->middleware('auth');
Route::post('/penjualan/create', [PenjualanController::class, 'create']);


Route::get('/laporan', [LaporanController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
