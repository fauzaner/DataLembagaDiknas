<?php

use Illuminate\Support\Facades\Route;
use App\Imports\PDImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PesertaDidik;
use App\Models\Guru;
use App\Models\Tendik;
use App\Models\User;
<<<<<<< HEAD
=======

use App\Http\Controllers\cobaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
use App\Http\Conttollers\dashboardController;
use App\Http\Controllers\adminsController;
use App\Http\Controllers\superController;
use App\Http\Controllers\DataPDController;
use App\Http\Controllers\DataTendikController;
use App\Http\Controllers\DataGuruController;
use App\Http\Controllers\ProfilControlle;


>>>>>>> c952076bd110ad60a6497779904b70b27fb4104b


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

Route::get('/sup_admin', [App\Http\Controllers\SupAdminController::class, 'index'])->name('dashboard_admin');

Route::get('/pd', [App\Http\Controllers\PesertaDidikController::class, 'peserta'])->name('daftar-pd-lembaga');
Route::post('/pd/import', [App\Http\Controllers\PesertaDidikController::class, 'import'])->name('import-pd-lembaga');
=======

<<<<<<< HEAD
Route::get('/sup_admin', [App\Http\Controllers\SupAdminController::class, 'index'])->name('dashboard_admin');
=======
Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd', [App\Http\Controllers\DataPDController::class, 'import']);
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);


Route::get('/sups_admin', [App\Http\Controllers\superController::class, 'index'])->name('sups_admin');
>>>>>>> eabcb42381b8ee42877a7939f964ace97cb8d0af

Route::get('/pd', [App\Http\Controllers\PesertaDidikController::class, 'peserta'])->name('daftar-pd-lembaga');
Route::post('/pd/import', [App\Http\Controllers\PesertaDidikController::class, 'import'])->name('import-pd-lembaga');

>>>>>>> c952076bd110ad60a6497779904b70b27fb4104b
Route::get('/td', [App\Http\Controllers\DataTendikController::class, 'index'])->name('daftar_tendik');
Route::post('/td/import', [App\Http\Controllers\DataTendikController::class, 'import']);
Route::get('/gr', [App\Http\Controllers\DataGuruController::class, 'index'])->name('daftar_guru');
Route::post('/gr', [App\Http\Controllers\DataGuruController::class, 'import']);

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

Route::get('/admin', function () {return view('admin'); }); 
Route::get('/sup_admin', function () {return view('sup_admin'); });

Route::get('/coba', function () {return view('coba'); });

Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import'])->name('import_pd');

>>>>>>> eabcb42381b8ee42877a7939f964ace97cb8d0af
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);


>>>>>>> c952076bd110ad60a6497779904b70b27fb4104b
Route::get('/pesdik', [App\Http\Controllers\PesertaDidikController::class, 'index']);
Route::get('/pesdik/export', [App\Http\Controllers\PesertaDidikController::class, 'export']);
Route::get('/tendik', [App\Http\Controllers\TendikController::class, 'index']);
Route::get('/tendik/export', [App\Http\Controllers\TendikController::class, 'export']);
Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index']);
Route::get('/guru/export', [App\Http\Controllers\GuruController::class, 'export']);

<<<<<<< HEAD
=======

>>>>>>> c952076bd110ad60a6497779904b70b27fb4104b
Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);
//Login Routes

Auth::routes();

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

<<<<<<< HEAD
Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/admin', [App\Http\Controllers\adminController::class, 'admin'])->middleware('auth');

=======
Auth::routes();


Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('login',[App\Http\Controllers\LoginController::class], 'authenticate')->name('login.auth');
Route::get('/admin', [App\Http\Controllers\adminController::class, 'admin'])->middleware('auth');


Route::get('/admins', [App\Http\Controllers\adminsController::class, 'admins']);
Route::get('/sups_admin', [App\Http\Controllers\superController::class, 'super']);

Route::get('/coba', [App\Http\Controllers\cobaController::class, 'coba']);
Route::post('/coba', [App\Http\Controllers\cobaController::class, 'authenticate']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login']);
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate']);

Route::get('/test', [App\Http\Controllers\TestController::class, 'test'])->name('test');
Route::post('actionlogin', [App\Http\Controllers\TestController::class, 'actionlogin'])->name('actionlogin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Cobaaas
Route::get('/tests', function() {return view('tests'); });
// End 
>>>>>>> c952076bd110ad60a6497779904b70b27fb4104b
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

