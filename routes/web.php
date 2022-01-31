<?php

use Illuminate\Support\Facades\Route;
use App\Imports\PDImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PesertaDidik;
use App\Models\Guru;
use App\Models\Tendik;
use App\Models\User;
<<<<<<< HEAD
use App\Http\Controllers\cobaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
use App\Http\Conttollers\dashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataPDController;
use App\Http\Controllers\DataTendikController;
use App\Http\Controllers\DataGuruController;
use App\Http\Controllers\ProfilControlle;
=======
>>>>>>> 949d313db98e28909be4f128d8dd86cc5f17360a


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
<<<<<<< HEAD

Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd', [App\Http\Controllers\DataPDController::class, 'import']);
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);
=======

Route::get('/sup_admin', [App\Http\Controllers\SupAdminController::class, 'index'])->name('dashboard_admin');
<<<<<<< HEAD

Route::get('/pd', [App\Http\Controllers\PesertaDidikController::class, 'peserta'])->name('daftar-pd-lembaga');
Route::post('/pd/import', [App\Http\Controllers\PesertaDidikController::class, 'import'])->name('import-pd-lembaga');
>>>>>>> 949d313db98e28909be4f128d8dd86cc5f17360a
Route::get('/td', [App\Http\Controllers\DataTendikController::class, 'index'])->name('daftar_tendik');
Route::post('/td/import', [App\Http\Controllers\DataTendikController::class, 'import']);
Route::get('/gr', [App\Http\Controllers\DataGuruController::class, 'index'])->name('daftar_guru');
Route::post('/gr/import', [App\Http\Controllers\DataGuruController::class, 'import']);

<<<<<<< HEAD
Route::get('/admin', function () {return view('admin'); }); 
Route::get('/sup_admin', function () {return view('sup_admin'); });

Route::get('/coba', function () {return view('coba'); });
=======
=======
=======
Route::get('/sup_admin', function () {return view('sup_admin'); })->name('dashboard_admin');
Route::get('/form', function () { return view('form'); });
Route::get('/upload', function () { return view('upload'); });
<<<<<<< HEAD
=======
>>>>>>> 3304878e8217fc8ff68ff41cfae8abdbce52ade2
>>>>>>> b1235a6f8449ec108f3cd3b44b9b736087773d6c
>>>>>>> 7dcd8d561337858b3f51f4e22765807af55ed285
Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import'])->name('import_pd');
>>>>>>> ec3a47b660f7f37fb8c229b586ee44ba054d0fc0
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);

Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);
>>>>>>> 949d313db98e28909be4f128d8dd86cc5f17360a

Route::get('/pesdik', [App\Http\Controllers\PesertaDidikController::class, 'index']);
Route::get('/pesdik/export', [App\Http\Controllers\PesertaDidikController::class, 'export']);
Route::get('/tendik', [App\Http\Controllers\TendikController::class, 'index']);
Route::get('/tendik/export', [App\Http\Controllers\TendikController::class, 'export']);
Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index']);
Route::get('/guru/export', [App\Http\Controllers\GuruController::class, 'export']);

<<<<<<< HEAD
Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);
//Login Routes

Auth::routes();

Route::get('/login', [loginController::class, 'login']);

Route::get('/admin', [adminController::class, 'admin'])->middleware('auth');
Route::get('/', [loginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/', [loginController::class, 'authenticate']);

Route::get('/admin', [AdminController::class, 'admin']);

Route::get('/coba', [cobaController::class, 'coba']);
Route::post('/coba', [cobaController::class, 'authenticate']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
//cobakk
Route::get('/test', [TestController::class, 'test'])->name('test');
Route::post('actionlogin', [TestController::class, 'actionlogin'])->name('actionlogin');

Route::get('dashboard', [dashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Auth::routes();

=======
Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('login',[App\Http\Controllers\LoginController::class], 'authenticate')->name('login.auth');
Route::get('/admin', [App\Http\Controllers\adminController::class, 'admin'])->middleware('auth');

>>>>>>> 949d313db98e28909be4f128d8dd86cc5f17360a
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
