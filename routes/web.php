<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DasboardPublicController;

// Detail berita
Route::get('/public/berita', [DasboardPublicController::class, 'index']);
Route::get('/public/berita/{id}', [DasboardPublicController::class, 'detailBerita'])->name('berita.detailBerita');

// Route Public createn 
Route::get('/backoffice/users', [UserController::class, 'index'])->name('backoffice.user.index');
Route::prefix('backoffice')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('backoffice.user.index');
});



// Menampilkan home
Route::get('/', function () {
    return view('home');
});

// Route untuk Berita Barang Simpen data
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');

// Route menampilkan data view
Route::get('/public/index', [DasboardController::class, 'index']);



// Fungsi middleware untuk Hak Akses Dari role
Route::middleware(['isAdmin'])->group(function () {
    // Routes protected by isAdmin middleware
    Route::get('/backoffice', [BackOfficeController::class, 'index'])->name('backoffice.dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('backoffice.dashboard.index');
    

    Route::prefix('backoffice/user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('backoffice.user.index');
        Route::get('/create', [UserController::class, 'create'])->name('backoffice.user.create');
        Route::post('/store', [UserController::class, 'store'])->name('backoffice.user.store');
        Route::get('/edit', [UserController::class, 'edit'])->name('backoffice.user.edit');
        Route::put('/{id}', [UserController::class, 'update'])->name('user.update');
    });


    // Route Berita
    Route::prefix('backoffice/berita')->group(function () {
        Route::get('/', [BeritaController::class, 'index'])->name('backoffice.berita.index');
        Route::post('/create', [BeritaController::class, 'create'])->name('backoffice.berita.create');
        Route::get('/edit', [BeritaController::class, 'edit'])->name('backoffice.berita.edit');
        Route::put('/{id}', [BeritaController::class, 'update'])->name('berita.update');
        Route::post('/berita', [BeritaController::class, 'store'])->name('backoffice.berita.store');
        Route::get('/berita', [BeritaController::class, 'index'])->name('backoffice.berita.index');


    });

    // Namespace Store
    // Route::namespace('App\Http\Controllers\Backoffice')->group(function () {
    //     // Dan lain-lain...
    // });
    

    // Route User
    Route::prefix('backoffice/user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('backoffice.user.index');
        Route::get('/create', [UserController::class, 'create'])->name('backoffice.user.create');
        Route::post('/store', [UserController::class, 'store'])->name('backoffice.user.store');
        Route::get('/edit', [UserController::class, 'edit'])->name('backoffice.user.edit');
        Route::put('/{id}', [UserController::class, 'update'])->name('user.update');
    });

    // CRUD User
    Route::resource('/backoffice/user', UserController::class);

    // CRUD Berita
    Route::resource('/backoffice/berita', BeritaController::class);

});

    // Login and Registration routes
    Route::get('register', [UserController::class, 'showRegistrationForm']);
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
    Route::post('/login', [LoginController::class, 'login'])->middleware('CheckUserStatus');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Menampilkan halaman login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

    // Proses otentikasi pengguna
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');


?>