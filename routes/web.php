<?php

use Illuminate\Support\Facades\Route;
use App\Imports\PDImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PesertaDidik;
use App\Models\Guru;
use App\Models\Tendik;
<<<<<<< HEAD
use App\Models\User;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\LoginController;
use App\Models\Users;
=======
use App\Http\Controllers\adminController;
use App\Http\Controllers\cobaController;
use App\Models\Users;
use App\Http\Controllers\TestController;
use App\Http\Conttollers\dashboardController;
use App\Http\Controllers\loginController;
<<<<<<< HEAD
use App\Http\Controllers\DataPDController;
use App\Http\Controllers\ProfilControlle;

=======
>>>>>>> ee971b4617e7518ea18322a3924c13f1bfcd8733
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataPDController;
use App\Http\Controllers\ProfilControlle;

<<<<<<< HEAD
=======
=======
>>>>>>> faaf645b0a82765e06baa19fc2e942f58f5245bd
>>>>>>> c94bd857787b236e53e34fde87dde5928aabe732
>>>>>>> 1342c284e96688b384acb1e38f81cd7f1ddbf0e6

>>>>>>> ee971b4617e7518ea18322a3924c13f1bfcd8733
>>>>>>> 22e696dc6597510944de66660adc1becd132d353

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
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD
>>>>>>> ee971b4617e7518ea18322a3924c13f1bfcd8733
>>>>>>> 22e696dc6597510944de66660adc1becd132d353
Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import']);
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);
Route::get('/admin', function () {return view('admin'); });
Route::get('/sup_admin', function () {return view('sup_admin'); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1342c284e96688b384acb1e38f81cd7f1ddbf0e6
>>>>>>> ee971b4617e7518ea18322a3924c13f1bfcd8733
>>>>>>> 22e696dc6597510944de66660adc1becd132d353
Route::get('/pd', function () { $peserta_didik = PesertaDidik::all();
    return view('daftar_pd',['peserta_didik'=>$peserta_didik]);
});
Route::get('/coba', function () {return view('coba'); });
<<<<<<< HEAD

=======
<<<<<<< HEAD
Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index']);
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import']);
Route::get('/pesdik', [App\Http\Controllers\PesertaDidikController::class, 'index']);
Route::get('/pesdik/export', [App\Http\Controllers\PesertaDidikController::class, 'export']);
Route::get('/pd', function () { $peserta_didik = PesertaDidik::all();return view('admin.daftar_pd',['peserta_didik'=>$peserta_didik]);});
=======
<<<<<<< HEAD
>>>>>>> 22e696dc6597510944de66660adc1becd132d353

Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index']);
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import']);

Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index']);
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import']);
Route::get('/pd', function () { $peserta_didik = PesertaDidik::all();return view('admin.daftar_pd',['peserta_didik'=>$peserta_didik]);});

>>>>>>> ee971b4617e7518ea18322a3924c13f1bfcd8733
Route::post('/pd', function () { Excel::import(new PDImport, request()->file('file'));
    Alert::success('Congrats', 'You\'ve Successfully Registered');
    return back(); });

Route::get('/user', function () {return view('sup_admin.tambah_user'); });
Route::get('/user', function () { $users = Users::all();return view('sup_admin.tambah_user',['users'=>$users]);});
Route::get('/admin', function () {return view('admin'); });
Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);
Route::get('/user', function () { $users = Users::all();return view('sup_admin.tambah_user',['users'=>$users]);});
Route::get('/sup_admin', function () {return view('sup_admin'); });
<<<<<<< HEAD


=======
>>>>>>> 22e696dc6597510944de66660adc1becd132d353
//Login Routes


Auth::routes();

Route::get('/login', [loginController::class, 'login']);
Auth::routes();

Route::get('/login', [loginController::class, 'login']);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 22e696dc6597510944de66660adc1becd132d353


Auth::routes(); 



>>>>>>> ee971b4617e7518ea18322a3924c13f1bfcd8733

Route::get('/admin', [adminController::class, 'admin'])->middleware('auth');
Route::get('/', [loginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/', [loginController::class, 'authenticate']);

Route::get('/admin', [AdminController::class, 'admin']);
<<<<<<< HEAD
=======
<<<<<<< HEAD
Route::get('/td', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });


Route::get('/tk', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
=======
<<<<<<< HEAD
>>>>>>> 22e696dc6597510944de66660adc1becd132d353



Route::get('/tk', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });

Route::get('/td', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });

//Login Routes
//Route::get('/login', [LoginController::class, 'index']);
//Route::post('actionlogin', [LoginController::class, 'actionlogin'])->username('actionlogin');

//Route::get('actionlogout', [LoginController::class, 'actionlogout'])->username('actionlogout')->middleware('auth');


>>>>>>> ee971b4617e7518ea18322a3924c13f1bfcd8733

Route::get('/coba', [cobaController::class, 'coba']);
Route::post('/coba', [cobaController::class, 'authenticate']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
<<<<<<< HEAD
=======

//cobakk
Route::get('/test', [TestController::class, 'test'])->name('test');
Route::post('actionlogin', [TestController::class, 'actionlogin'])->name('actionlogin');

Route::get('dashboard', [dashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> ee971b4617e7518ea18322a3924c13f1bfcd8733
