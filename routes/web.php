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
use App\Http\Controllers\TestController;
use App\Http\Conttollers\dashboardController;
use App\Http\Controllers\AdminController;
=======

use App\Models\User;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\LoginController;
use App\Models\Users;

use App\Http\Controllers\adminController;

use App\Http\Controllers\TestController;
use App\Http\Conttollers\dashboardController;


>>>>>>> e122a2fee0ae3b5219d13940e63f36223201e1fc
use App\Http\Controllers\DataPDController;
use App\Http\Controllers\ProfilControlle;


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

>>>>>>> e122a2fee0ae3b5219d13940e63f36223201e1fc
Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import']);
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);
Route::get('/admin', function () {return view('admin'); });
Route::get('/sup_admin', function () {return view('sup_admin'); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });
<<<<<<< HEAD

Route::get('/coba', function () {return view('coba'); });
Route::get('/pesdik', [App\Http\Controllers\PesertaDidikController::class, 'index']);
Route::get('/pesdik/export', [App\Http\Controllers\PesertaDidikController::class, 'export']);

Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);

=======
Route::get('/pd', function () { $peserta_didik = PesertaDidik::all();
    return view('daftar_pd',['peserta_didik'=>$peserta_didik]);
});
Route::get('/coba', function () {return view('coba'); });




Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index']);
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import']);
Route::get('/pesdik', [App\Http\Controllers\PesertaDidikController::class, 'index']);
Route::get('/pesdik/export', [App\Http\Controllers\PesertaDidikController::class, 'export']);
Route::get('/pd', function () { $peserta_didik = PesertaDidik::all();return view('admin.daftar_pd',['peserta_didik'=>$peserta_didik]);});

Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index']);
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import']);

Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index']);
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import']);
Route::get('/pd', function () { $peserta_didik = PesertaDidik::all();return view('admin.daftar_pd',['peserta_didik'=>$peserta_didik]);});

Route::post('/pd', function () { Excel::import(new PDImport, request()->file('file'));
    Alert::success('Congrats', 'You\'ve Successfully Registered');
    return back(); });

Route::get('/user', function () {return view('sup_admin.tambah_user'); });
Route::get('/user', function () { $users = Users::all();return view('sup_admin.tambah_user',['users'=>$users]);});
Route::get('/admin', function () {return view('admin'); });
Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);
Route::get('/user', function () { $users = Users::all();return view('sup_admin.tambah_user',['users'=>$users]);});
>>>>>>> e122a2fee0ae3b5219d13940e63f36223201e1fc
Route::get('/sup_admin', function () {return view('sup_admin'); });

//Login Routes
<<<<<<< HEAD

Auth::routes();

Route::get('/login', [loginController::class, 'login']);
=======


Auth::routes();

Route::get('/login', [loginController::class, 'login']);
Auth::routes();

Route::get('/login', [loginController::class, 'login']);







Auth::routes(); 



>>>>>>> e122a2fee0ae3b5219d13940e63f36223201e1fc

Route::get('/admin', [adminController::class, 'admin'])->middleware('auth');
Route::get('/', [loginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/', [loginController::class, 'authenticate']);

Route::get('/admin', [AdminController::class, 'admin']);
<<<<<<< HEAD
Route::get('/td', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });

=======



Route::get('/td', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });


Route::get('/tk', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });






Route::get('/tk', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });

Route::get('/td', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });

//Login Routes
//Route::get('/login', [LoginController::class, 'index']);
//Route::post('actionlogin', [LoginController::class, 'actionlogin'])->username('actionlogin');

//Route::get('actionlogout', [LoginController::class, 'actionlogout'])->username('actionlogout')->middleware('auth');



>>>>>>> e122a2fee0ae3b5219d13940e63f36223201e1fc
Route::get('/coba', [cobaController::class, 'coba']);
Route::post('/coba', [cobaController::class, 'authenticate']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
<<<<<<< HEAD
=======



>>>>>>> e122a2fee0ae3b5219d13940e63f36223201e1fc
//cobakk
Route::get('/test', [TestController::class, 'test'])->name('test');
Route::post('actionlogin', [TestController::class, 'actionlogin'])->name('actionlogin');

Route::get('dashboard', [dashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<<<<<<< HEAD
=======

>>>>>>> e122a2fee0ae3b5219d13940e63f36223201e1fc
