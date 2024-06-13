    <?php
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\BackOfficeController;
    use App\Http\Controllers\peminjamanController;
    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\BarangController;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\DasboardController;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\FormPinjamController;
    use App\Http\Controllers\Auth\RegisterController;


    // Fungsi register
    Route::get('/auth/register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register');
    Route::post('/auth/register', [RegisterController::class, 'register'])->name('auth.register');
    Route::get('register', [UserController::class, 'showRegistrationForm']);

    // fungsi middleware pada web.php
    Route::middleware(['isAdmin'])->group(function () {
    });
    // end Fungsi register




    Route::get('/', function () {
         return view('welcome');
    });


    // fungsi buat register akun
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/login', [LoginController::class, 'login'])->middleware('CheckUserStatus');
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);



    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::resource('backoffice/barang', BarangController::class);
    Route::resource('backoffice/barang', BarangController::class);

    Route::resource('backoffice/barang', BarangController::class);







    // start Route Register 
    Route::get('/register', function () {
        return view('auth.register');
    });

    Route::get('/register', [UserController::class, 'register']);
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/register', [App\Http\Controllers\UserController::class, 'showRegistrationForm'])->name('peminjaman.about');
    // end Route Register 





    // grouping middleware
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/backoffice/main', [DasboardController::class, 'dasboard']);

        // Route::get('/dashboard', 'MainController@index')->name('backoffice.main');

    

    


    


        // backoffice_barang
        // Route::get('backoffice/barang/{barang}/edit', [BarangController::class, 'edit'])->name('backoffice.barang.edit');
        Route::delete('/backoffice/barang/{barang}', [BarangController::class, 'destroy'])->name('backoffice.barang.destroy');
        Route::get('/backoffice/barang', [BarangController::class, 'index'])->name('backoffice.barang.index');
        Route::get('/backoffice/main', [BackOfficeController::class, 'main'])->name('backoffice.main');


    

   

        // backoffice_create_peminjaman_barang
        Route::resource('/backoffice/create', UserController::class);

        

    
    // peminjaman_index_tidak_diperlukan
        Route::get('/peminjaman/index', [BarangController::class, 'index'])->name('peminjaman.index');
    // end_peminjaman_index_tidak_diperlukans

    
    });





    Route::middleware(['auth'])->group(function () {
        Route::get('/backoffice/peminjaman/show_peminjaman', [BarangController::class, 'show'])->name('peminjaman.show');
    
    });





    Route::get('/', function () {
        return view('/register');
    });
    

    Route::get('backoffice/peminjaman/show_peminjaman/{id}', [BarangController::class, 'show_peminjaman'])->name('backoffice.peminjaman.show_peminjaman');

    // news
    Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');

    Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');
    Route::get('/barangs/{id}/show', [BarangController::class, 'show'])->name('barangs.show');



    Route::get('/barangs', [BarangController::class, 'index'])->name('barangs.index');
    Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');





    Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');
    Route::post('/barangs/borrow/{id}', [BarangController::class, 'borrow'])->name('barangs.borrow');




    Route::get('/barangs/show/', [BarangController::class, 'show'])->name('barangs.show');

    Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');
    Route::post('/barangs/borrow/{id}', [BarangController::class, 'borrow'])->name('barangs.borrow');
    // routes/web.php
    Route::post('/barangs/show/{barang}', [BarangController::class, 'show'])->name('barangs.show');




 

    Route::post('/barangs/borrow/{id}', [BarangController::class, 'borrow'])->name('barangs.borrow');
    Route::post('/barangs/return/{id}', [BarangController::class, 'return'])->name('barangs.return');
    Route::get('/barangs/showBorrowedItems', [BarangController::class, 'showBorrowedItems'])->name('barangs.showBorrowedItems');


    Route::get('/peminjamans/history', [BarangController::class, 'history'])->name('peminjamans.history');
    Route::get('/barangs/history', [BarangController::class, 'history'])->name('barangs.history');



    Route::get('/barangs/kembali', [BarangController::class, 'kembali'])->name('barangs.kembali');
    Route::get('/barangs/form_pinjam', [BarangController::class, 'form_pinjam'])->name('barangs.form_pinjam');
    Route::post('/barangs/{id}/borrow', [BarangController::class, 'borrow'])->name('barangs.borrow');
    Route::post('/barangs/{id}/return', [BarangController::class, 'return'])->name('barangs.return');



    // start route 


    Route::get('/backoffice/barang/edit', [BarangController::class, 'edit'])->name('backoffice.barang.edit');



    // update data 
    Route::post('/backoffice/barang/update', [BarangController::class, 'update'])->name('backoffice.barang.update');


    Route::post('/backoffice/barang/store', [BarangController::class, 'store'])->name('backoffice.barang.store');
    Route::post('/backoffice/barang/create', [BarangController::class, 'create'])->name('backoffice.barang.create');

    // route user 
    Route::get('/backoffice/user/index', [UserController::class, 'index'])->name('backoffice.user.index');
    Route::get('/backoffice/user/create', [UserController::class, 'create'])->name('backoffice.user.create');
    Route::post('/backoffice/user/store', [UserController::class, 'store'])->name('backoffice.user.store');
    Route::get('/backoffice/user/create', [UserController::class, 'create'])->name('backoffice.user.create');

    //end route user 


    Route::get('/', function () {
        
        return view('home');

    });




    // Buat nampilin admin user 
    Route::resource('/backoffice/user', UserController::class);





    Route::resources([
        'barang'        => Controllers\BarangController::class,
        

    ]);




    Route::get('/user/create', 'UserController@create')->name('user.create');






    // Menampilkan halaman login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

    // Proses otentikasi pengguna
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/login', [LoginController::class, 'login'])->name('backoffice.main');


    // end route public view 
    Route::get('/backoffice', [BackOfficeController::class, 'index'])->name('backoffice.dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('backoffice.dashboard.index');
   



    

    // nampilkan backoffice
    Route::get('/backoffice', [BackOfficeController::class, 'backoffice'])->name('backoffice.');


    // Login authenticate
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');










    Route::post('/login', [AuthController::class, 'login'])->name('login');



    Route::get('/public/index', [DasboardController::class, 'index']);
    Route::get('/public/index', [DasboardController::class, 'index']);
    Route::post('/logout', [DasboardController::class, 'logout'])->name('logout');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::put('barang/{barang}', [BarangController::class, 'update'])->name('barang.update');



    // user
    Route::get('/backoffice/user/edit', [UserController::class, 'edit'])->name('backoffice.user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
    // Route::get('/backoffice/user/create', 'UserController@create')->name('backoffice.user.create');



    Route::put('/barang/{id}', [UserController::class, 'update'])->name('barang.update');





    // route midleware
    Route::middleware(['auth', 'admin'])->group(function () {
        // Rute untuk admin
    });

    Route::post('/backoffice/barang/store', [BarangController::class, 'store'])->name('backoffice.barang.store');

