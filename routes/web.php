<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PerusahaanController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

// Route::get('/', function () {
//     return view('welcome', [
//         'title' => 'Home'
//     ]);
// })->middleware('auth');


// Route::get('/lock', function () {
//     return view('lock', [
//         'title' => 'Lock'
//     ]);
// });

// -------------------dashboard admin-------------------------------------
Route::get('/', [HomeController::class, 'index'])->middleware('auth');




// ------------------profil management------------------------------------
Route::get('/profil', [ProfilController::class, 'index'])->middleware('auth');
Route::get('/profil/{id}/edit', [ProfilController::class, 'edit']);
Route::post('/profil/{id}/update', [ProfilController::class, 'update']);
Route::post('/profil/{id}/update-pass', [ProfilController::class, 'update_password']);
Route::post('/profil/update-avatar', [ProfilController::class, 'update_avatar'])->name('avatarUpdate');

// ------------------customer management------------------------------------
Route::get('/customer', [CustomerController::class, 'index'])->middleware(['auth', 'cekrole:Karyawan Admin']);
Route::post('/customer/create', [CustomerController::class, 'create']);
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit']);
Route::post('/customer/{id}/update', [CustomerController::class, 'update']);
Route::get('/customer/{id}/delete', [CustomerController::class, 'delete']);

// ------------------Perusahaan management------------------------------------
Route::get('/perusahaan', [PerusahaanController::class, 'index'])->middleware(['auth', 'cekrole:Karyawan Admin']);
Route::post('/perusahaan/create', [PerusahaanController::class, 'create']);
Route::get('/perusahaan/{id}/edit', [PerusahaanController::class, 'edit']);
Route::post('/perusahaan/{id}/update', [PerusahaanController::class, 'update']);
Route::get('/perusahaan/{id}/delete', [PerusahaanController::class, 'delete']);

// ------------------barang management------------------------------------
Route::get('/barang', [BarangController::class, 'index'])->middleware(['auth', 'cekrole:Karyawan Admin']);
Route::post('/barang/create', [BarangController::class, 'create']);
Route::get('/barang/{id}/edit', [BarangController::class, 'edit']);
Route::post('/barang/{id}/update', [BarangController::class, 'update']);
Route::get('/barang/{id}/delete', [BarangController::class, 'delete']);
// Route::get('/list_customer/{perusahaan_id}', [BarangController::class,'listCustomer']);
Route::get('/GetCustomer/{id}', [BarangController::class, 'GetCustomer']);

// ------------------penjualan management------------------------------------
Route::get('/penjualan', [PenjualanController::class, 'index'])->middleware(['auth', 'cekrole:Karyawan Admin']);
Route::post('/penjualan/create', [PenjualanController::class, 'create']);
Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'edit']);
Route::post('/penjualan/{id}/update', [PenjualanController::class, 'update']);
Route::get('/penjualan/{id}/delete', [PenjualanController::class, 'delete']);
Route::get('/penjualan/{id}/invoice', [PenjualanController::class, 'invoice']);
Route::get('/penjualan/{id}/printpdf', [PenjualanController::class, 'print']);

// ------------------laporan management------------------------------------
Route::get('/laporan', [LaporanController::class, 'index'])->middleware(['auth', 'cekrole:Karyawan Admin']);
Route::post('/laporan/create', [LaporanController::class, 'create']);
Route::get('/laporan/{id}/edit', [LaporanController::class, 'edit']);
Route::post('/laporan/{id}/update', [LaporanController::class, 'update']);
Route::get('/laporan/{id}/delete', [LaporanController::class, 'delete']);

// -------------------user management------------------------------------
Route::get('/user', [UserController::class, 'index'])->middleware(['auth', 'cekrole:Karyawan Admin']);
Route::post('/user/create', [UserController::class, 'create']);
Route::get('/user/{id}/edit', [UserController::class, 'edit']);
Route::post('/user/{id}/update', [UserController::class, 'update']);
Route::get('/user/{id}/delete', [UserController::class, 'delete']);


// ------------------login management------------------------------------
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
// Route::get('/lock', [LoginController::class, 'index_lock']);
// Route::post('/lock', [LoginController::class, 'auth_admin']);

// ------------------register management------------------------------------
// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);
