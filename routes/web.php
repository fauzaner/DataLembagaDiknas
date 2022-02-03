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
use App\Http\Controllers\adminsController;
use App\Http\Controllers\superController;
use App\Http\Controllers\DataPDController;
use App\Http\Controllers\DataTendikController;
use App\Http\Controllers\DataGuruController;
use App\Http\Controllers\ProfilControlle;
=======

>>>>>>> 7928e38be46e03c5f1078b4932d1f46b70865fe5

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
=======
Route::get('/sup_admin', [App\Http\Controllers\SupAdminController::class, 'index'])->name('dashboard_admin');

<<<<<<< HEAD
Route::get('/pd', [App\Http\Controllers\PesertaDidikController::class, 'peserta'])->name('daftar-pd-lembaga');
Route::post('/pd/import', [App\Http\Controllers\PesertaDidikController::class, 'import'])->name('import-pd-lembaga');
>>>>>>> 0861372e8270c9a967139c20b2f862ac689e6f20
Route::get('/sup_admin', [App\Http\Controllers\SupAdminController::class, 'index'])->name('dashboard_admin');
Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd', [App\Http\Controllers\DataPDController::class, 'import']);
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);

Route::get('/sups_admin', [App\Http\Controllers\superController::class, 'index'])->name('sups_admin');

Route::get('/pd', [App\Http\Controllers\PesertaDidikController::class, 'peserta'])->name('daftar-pd-lembaga');
Route::post('/pd/import', [App\Http\Controllers\PesertaDidikController::class, 'import'])->name('import-pd-lembaga');

=======
Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd', [App\Http\Controllers\DataPDController::class, 'import']);
>>>>>>> 7928e38be46e03c5f1078b4932d1f46b70865fe5
Route::get('/td', [App\Http\Controllers\DataTendikController::class, 'index'])->name('daftar_tendik');
Route::post('/td', [App\Http\Controllers\DataTendikController::class, 'import']);
Route::get('/gr', [App\Http\Controllers\DataGuruController::class, 'index'])->name('daftar_guru');
<<<<<<< HEAD
Route::post('/gr/import', [App\Http\Controllers\DataGuruController::class, 'import']);

Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);
=======
Route::post('/gr', [App\Http\Controllers\DataGuruController::class, 'import']);
<<<<<<< HEAD
=======




Route::get('/admin', function () {return view('admin'); }); 
Route::get('/sup_admin', function () {return view('sup_admin'); });

Route::get('/coba', function () {return view('coba'); });

Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import'])->name('import_pd');

Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);
>>>>>>> 48f3367597c45d93df94bcf3ff0444adc68d68c7
>>>>>>> 0861372e8270c9a967139c20b2f862ac689e6f20

Route::get('/pesdik', [App\Http\Controllers\PesertaDidikController::class, 'index']);
Route::get('/pesdik/export', [App\Http\Controllers\PesertaDidikController::class, 'export']);
Route::get('/tendik', [App\Http\Controllers\TendikController::class, 'index']);
Route::get('/tendik/export', [App\Http\Controllers\TendikController::class, 'export']);
Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index']);
Route::get('/guru/export', [App\Http\Controllers\GuruController::class, 'export']);

<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> 7928e38be46e03c5f1078b4932d1f46b70865fe5
>>>>>>> 0861372e8270c9a967139c20b2f862ac689e6f20
Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);

Auth::routes();

Route::get('/admin', [adminController::class, 'admin'])->middleware('auth');
Route::get('/', [loginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/', [loginController::class, 'authenticate']);

Route::get('/admin', [AdminController::class, 'admin']);

Route::get('/coba', [cobaController::class, 'coba']);
Route::post('/coba', [cobaController::class, 'authenticate']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/test', [TestController::class, 'test'])->name('test');
Route::post('actionlogin', [TestController::class, 'actionlogin'])->name('actionlogin');

Route::get('dashboard', [dashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

<<<<<<< HEAD
Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);
Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
=======
<<<<<<< HEAD

Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/admin', [App\Http\Controllers\adminController::class, 'admin'])->middleware('auth');

Auth::routes();


Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
>>>>>>> 0861372e8270c9a967139c20b2f862ac689e6f20
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

<<<<<<< HEAD
Route::get('/tests', function() {return view('tests'); });
=======
//Cobaaas
Route::get('/tests', function() {return view('tests'); });
// End 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

=======
Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/admin', [App\Http\Controllers\adminController::class, 'admin'])->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 7928e38be46e03c5f1078b4932d1f46b70865fe5
>>>>>>> 0861372e8270c9a967139c20b2f862ac689e6f20
