<?php
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\peminjamanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('login');
});

// mengarahkan ke /backoffice/main yang dimana di cabarkan di conttoler 
Route::get('/backoffice', [BackOfficeController::class, 'index'])->name('backoffice.dashboard');
Route::get('/dashboard', [AdminController::class, 'index'])->name('backoffice.dashboard.index');

Route::get('/public', [peminjamanController::class, 'Form_pinjam'])->name('public.Form_pinjam');

Route::get('/form-pinjam', [PeminjamanController::class, 'form_pinjam'])->name('form_pinjam');
Route::resource('/form-pinjam', 'PeminjamanController');

Route::resource('/public/form-pinjam', 'PeminjamanController@form-pinjam');  


Route::get('/dashboard', function () {
    return view('backoffice.main');
});

Route::get('/backoffice.main', [BarangController::class, 'index']);



// Route::get('/backoffice.barang.index', 'BarangController@index')->name('backoffice.barang.index');

Route::get('/backoffice/barang', [BarangController::class, 'index'])->name('backoffice.barang.index');
Route::get('/barang/{id}/edit', 'BarangController@edit')->name('barang.edit');
// Route::delete('/barang/{id}', 'BarangController@destroy')->name('barang.destroy');
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');


Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');


Route::post('/login', 'Auth\LoginController@login')->name('login');


Route::post('/login', 'AuthController@authenticate')->name('login');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');



Route::middleware(['auth', 'admin'])->group(function () {
    // Rute untuk admin
});

Route::middleware(['auth', 'user'])->group(function () {
    // Rute untuk user
});

Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route::post('/backoffice', [AuthController::class, 'welcome'])->name('welcome');


Route::get('/backoffice/welcome', 'DasboardController@index')->name('welcome');
Route::get('/public/index', 'DasboardController@index')->name('index');


Route::get('/public/index', [DasboardController::class, 'index']);


Route::post('/logout', [DasboardController::class, 'logout'])->name('logout');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::resource('barang', BarangController::class);
// Route::resource('barang', BarangController::class);

Route::get('backoffice/barang/{barang}/edit', [BarangController::class, 'edit'])->name('backoffice.barang.edit');
Route::put('barang/{barang}', [BarangController::class, 'update'])->name('barang.update');

