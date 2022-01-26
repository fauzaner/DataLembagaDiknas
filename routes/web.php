<?php

use Illuminate\Support\Facades\Route;
use App\Imports\PDImport;
use App\Imports\TendikImport;
use App\Imports\GuruImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PesertaDidik;
use App\Models\Guru;
use App\Models\Tendik;
use App\Models\User;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
<<<<<<< HEAD
=======
use App\Http\Controllers\TestController;
use App\Http\Conttollers\dashboardController;
>>>>>>> 5a51b13648b2c535f61ed746bb288cc9e702dbbe
use App\Http\Controllers\DataPDController;
use App\Http\Controllers\DataTendikController;
use App\Http\Controllers\DataGuruController;
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
<<<<<<< HEAD

Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd', [App\Http\Controllers\DataPDController::class, 'import']);
=======
Route::get('/upload', function () { return view('upload'); });
Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import'])->name('import_pd');
>>>>>>> 5a51b13648b2c535f61ed746bb288cc9e702dbbe
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);
Route::get('/td', [App\Http\Controllers\DataTendikController::class, 'index'])->name('daftar_tendik');
Route::post('/td/import', [App\Http\Controllers\DataTendikController::class, 'import']);
Route::get('/gr', [App\Http\Controllers\DataGuruController::class, 'index'])->name('daftar_guru');
Route::post('/gr/import', [App\Http\Controllers\DataGuruController::class, 'import']);

Route::get('/admin', function () {return view('admin'); }); 
Route::get('/sup_admin', function () {return view('sup_admin'); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });
<<<<<<< HEAD

=======


Route::get('/coba', function () {return view('coba'); });
Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);

Route::get('/coba', function () {return view('coba'); });
Route::get('/pesdik', [App\Http\Controllers\PesertaDidikController::class, 'index']);
Route::get('/pesdik/export', [App\Http\Controllers\PesertaDidikController::class, 'export']);

Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);

Route::get('/pd', function () { $peserta_didik = PesertaDidik::all();
    return view('daftar_pd',['peserta_didik'=>$peserta_didik]);
});
>>>>>>> 5a51b13648b2c535f61ed746bb288cc9e702dbbe
Route::get('/coba', function () {return view('coba'); });

Route::get('/pesdik', [App\Http\Controllers\PesertaDidikController::class, 'index']);
Route::get('/pesdik/export', [App\Http\Controllers\PesertaDidikController::class, 'export']);
<<<<<<< HEAD
Route::get('/tendik', [App\Http\Controllers\TendikController::class, 'index']);
Route::get('/tendik/export', [App\Http\Controllers\TendikController::class, 'export']);
Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index']);
Route::get('/guru/export', [App\Http\Controllers\GuruController::class, 'export']);

Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);

Route::get('/sup_admin', function () {return view('sup_admin'); });
//Login Routes

Auth::routes();

Route::get('/login', [loginController::class, 'login']);

=======

Route::get('/user', function () {return view('sup_admin.tambah_user'); });
Route::get('/user', function () { $users = Users::all();return view('sup_admin.tambah_user',['users'=>$users]);});
Route::get('/admin', function () {return view('admin'); });
Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);
Route::get('/sup_admin', function () {return view('sup_admin'); });

Auth::routes();

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login',[LoginController::class], 'authenticate')->name('login.auth');
>>>>>>> 5a51b13648b2c535f61ed746bb288cc9e702dbbe
Route::get('/admin', [adminController::class, 'admin'])->middleware('auth');
Route::get('/', [loginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/', [loginController::class, 'authenticate']);

Route::get('/admin', [AdminController::class, 'admin']);

<<<<<<< HEAD
=======
Route::get('/td', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });

>>>>>>> 5a51b13648b2c535f61ed746bb288cc9e702dbbe
Route::get('/coba', [cobaController::class, 'coba']);
Route::post('/coba', [cobaController::class, 'authenticate']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
<<<<<<< HEAD
//cobakk
=======

>>>>>>> 5a51b13648b2c535f61ed746bb288cc9e702dbbe
Route::get('/test', [TestController::class, 'test'])->name('test');
Route::post('actionlogin', [TestController::class, 'actionlogin'])->name('actionlogin');

Route::get('dashboard', [dashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

<<<<<<< HEAD
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 5a51b13648b2c535f61ed746bb288cc9e702dbbe
