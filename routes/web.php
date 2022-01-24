<?php

use Illuminate\Support\Facades\Route;
use App\Imports\PDImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PesertaDidik;
use App\Models\Guru;
use App\Models\Tendik;
use App\Http\Controllers\adminController;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\LoginController;
use App\Models\Users;
<<<<<<< HEAD
use App\Http\Controllers\TestController;
use App\Http\Conttollers\dashboardController;


=======
use App\Http\Controllers\loginController;
use App\Http\Controllers\AdminController;
<<<<<<< HEAD
use App\Http\Controllers\DataPDController;
use App\Http\Controllers\ProfilControlle;

=======
>>>>>>> faaf645b0a82765e06baa19fc2e942f58f5245bd
>>>>>>> c94bd857787b236e53e34fde87dde5928aabe732
>>>>>>> 1342c284e96688b384acb1e38f81cd7f1ddbf0e6


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
Route::get('/sup_admin', function () {return view('sup_admin'); });
Route::get('/form', function () { return view('form'); });
Route::get('/upload', function () { return view('upload'); });
<<<<<<< HEAD

=======
<<<<<<< HEAD
Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import']);
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);
Route::get('/admin', function () {return view('admin'); });
Route::get('/sup_admin', function () {return view('sup_admin'); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1342c284e96688b384acb1e38f81cd7f1ddbf0e6
Route::get('/pd', function () { $peserta_didik = PesertaDidik::all();
    return view('daftar_pd',['peserta_didik'=>$peserta_didik]);
});
Route::get('/coba', function () {return view('coba'); });
<<<<<<< HEAD

Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index']);
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import']);

=======
=======
<<<<<<< HEAD
>>>>>>> e77cc47839e53ccb0cceb8675dd52c2ccd381810
Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index']);
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import']);
>>>>>>> 1342c284e96688b384acb1e38f81cd7f1ddbf0e6
Route::get('/pd', function () { $peserta_didik = PesertaDidik::all();return view('admin.daftar_pd',['peserta_didik'=>$peserta_didik]);});

Route::post('/pd', function () { Excel::import(new PDImport, request()->file('file'));
    Alert::success('Congrats', 'You\'ve Successfully Registered');
    return back(); });
<<<<<<< HEAD
Route::get('/user', function () {return view('sup_admin.tambah_user'); });
Route::get('/user', function () { $users = Users::all();return view('sup_admin.tambah_user',['users'=>$users]);});
Route::get('/admin', function () {return view('admin'); });
=======
Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);
Route::get('/user', function () { $users = Users::all();return view('sup_admin.tambah_user',['users'=>$users]);});

>>>>>>> 1342c284e96688b384acb1e38f81cd7f1ddbf0e6
Route::get('/sup_admin', function () {return view('sup_admin'); });
>>>>>>> c94bd857787b236e53e34fde87dde5928aabe732

//Login Routes
<<<<<<< HEAD

Auth::routes();

Route::get('/login', [loginController::class, 'login']);
=======
Auth::routes();

Route::get('/login', [loginController::class, 'login']);
<<<<<<< HEAD
=======

>>>>>>> c94bd857787b236e53e34fde87dde5928aabe732
Auth::routes(); 
>>>>>>> 1342c284e96688b384acb1e38f81cd7f1ddbf0e6




Route::get('/admin', [adminController::class, 'admin'])->middleware('auth');
Route::get('/', [loginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/', [loginController::class, 'authenticate']);

Route::get('/admin', [AdminController::class, 'admin']);
<<<<<<< HEAD

=======
<<<<<<< HEAD
Route::get('/tk', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
=======
<<<<<<< HEAD
=======
>>>>>>> f1913a50d1a9783c21d1d2b5deb7ca80d72c0720
>>>>>>> faaf645b0a82765e06baa19fc2e942f58f5245bd
>>>>>>> e77cc47839e53ccb0cceb8675dd52c2ccd381810
>>>>>>> 1342c284e96688b384acb1e38f81cd7f1ddbf0e6

>>>>>>> c94bd857787b236e53e34fde87dde5928aabe732
Route::get('/td', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });

//Login Routes
//Route::get('/login', [LoginController::class, 'index']);
//Route::post('actionlogin', [LoginController::class, 'actionlogin'])->username('actionlogin');

//Route::get('actionlogout', [LoginController::class, 'actionlogout'])->username('actionlogout')->middleware('auth');



Route::get('/coba', [cobaController::class, 'coba']);
Route::post('/coba', [cobaController::class, 'authenticate']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);

//cobakk
Route::get('/test', [TestController::class, 'test'])->name('test');
Route::post('actionlogin', [TestController::class, 'actionlogin'])->name('actionlogin');

Route::get('dashboard', [dashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
