<?php
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\BackOfficeController;
    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\DasboardController;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\Auth\RegisterController;
    use App\Http\Controllers\BeritaController;


    // Route Public Welcome
    Route::get('/', function () {
        return view('welcome');
    });
    // end Route Public Welcome


    // Route Untuk Berita Barang Simpen data
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');

    // Route Untuk Menampilkan data di ADmin
    Route::get('/backoffice/berita', [BeritaController::class, 'index'])->name('backoffice.berita.index');

    // Route Untuk Create data baru
    Route::post('/backoffice/berita/create', [BeritaController::class, 'create'])->name('backoffice.berita.create');

    // Route Login Akses
    Route::get('/auth/login', [LoginController::class, 'showRegistrationForm'])->name('auth.register');
    Route::post('/auth/login', [LoginController::class, 'login'])->name('auth.login');
    // end Route Login Akses


    // Fungsi register
    Route::get('/auth/register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register');
    Route::post('/auth/register', [RegisterController::class, 'register'])->name('auth.register');
    Route::get('register', [UserController::class, 'showRegistrationForm']);



    // fungsi middleware Untuk Hak Akses Dari role
    Route::middleware(['isAdmin'])->group(function () {
    });
    // end Fungsi register


    // fungsi buat register akun
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/login', [LoginController::class, 'login'])->middleware('CheckUserStatus');
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

    Route::get('/register', [UserController::class, 'register']);
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    // end Route Register 

    // Route menampilkan data main 
    Route::get('/backoffice/main', [BackOfficeController::class, 'main'])->name('backoffice.main');

    // route user 
    Route::get('/backoffice/user/index', [UserController::class, 'index'])->name('backoffice.user.index');
    Route::get('/backoffice/user/create', [UserController::class, 'create'])->name('backoffice.user.create');
    Route::post('/backoffice/user/store', [UserController::class, 'store'])->name('backoffice.user.store');
    Route::get('/backoffice/user/create', [UserController::class, 'create'])->name('backoffice.user.create');
    //end route user 

    // Menampilkan home
    Route::get('/', function () {
        
        return view('home');

    });

    // Mengembalikan data view
    Route::get('/public/index', [DasboardController::class, 'index']);
    Route::get('/public/index', [DasboardController::class, 'index']);

    // For Log out
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


    // CRUD user
    Route::resource('/backoffice/user', UserController::class);

    // Menampilkan halaman login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

    // Proses otentikasi pengguna
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/login', [LoginController::class, 'login'])->name('backoffice.main');

    // end route public view 
    Route::get('/backoffice', [BackOfficeController::class, 'index'])->name('backoffice.dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('backoffice.dashboard.index');

    // Login authenticate
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');




    // user
    Route::get('/backoffice/user/edit', [UserController::class, 'edit'])->name('backoffice.user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');

    // Route Berita
    Route::get('/backoffice/berita/edit', [BeritaController::class, 'edit'])->name('backoffice.berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('user.update');



    Route::resource('backoffice/berita', BeritaController::class);

}

