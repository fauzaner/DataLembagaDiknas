<?php

use Illuminate\Support\Facades\Route;
use App\Imports\PDImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PesertaDidik;
use App\Models\Guru;
use App\Models\Tendik;
use App\Models\User;

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

Route::get('/admins', [App\Http\Controllers\adminsController::class, 'admins']);
Route::get('/sups_admin', [App\Http\Controllers\superController::class, 'super']);

//import
Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd', [App\Http\Controllers\DataPDController::class, 'import']);
Route::get('/pd/cari', [App\Http\Controllers\DataPDController::class, 'cari']);
=======
Route::get('/pd', [App\Http\Controllers\PesertaDidikController::class, 'peserta'])->name('daftar-pd-lembaga');
Route::post('/pd/import', [App\Http\Controllers\PesertaDidikController::class, 'import'])->name('import-pd-lembaga');
Route::get('/sup_admin', [App\Http\Controllers\SupAdminController::class, 'index'])->name('dashboard_admin');
Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd', [App\Http\Controllers\DataPDController::class, 'import']);
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);

Route::get('/sups_admin', [App\Http\Controllers\superController::class, 'index'])->name('sups_admin');

Route::get('/pd', [App\Http\Controllers\PesertaDidikController::class, 'peserta'])->name('daftar-pd-lembaga');
Route::post('/pd/import', [App\Http\Controllers\PesertaDidikController::class, 'import'])->name('import-pd-lembaga');

Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd', [App\Http\Controllers\DataPDController::class, 'import']);
>>>>>>> d67d8fefc295ae5b6005681d42f189b587510297
Route::get('/td', [App\Http\Controllers\DataTendikController::class, 'index'])->name('daftar_tendik');
Route::post('/td', [App\Http\Controllers\DataTendikController::class, 'import']);
Route::get('/td/cari', [App\Http\Controllers\DataTendikController::class, 'cari']);
Route::get('/gr', [App\Http\Controllers\DataGuruController::class, 'index'])->name('daftar_guru');
<<<<<<< HEAD
Route::post('/gr', [App\Http\Controllers\DataGuruController::class, 'import']);
Route::get('/gr/cari', [App\Http\Controllers\DataGuruController::class, 'cari']);
=======

Route::post('/gr/import', [App\Http\Controllers\DataGuruController::class, 'import']);

Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);

Route::post('/gr', [App\Http\Controllers\DataGuruController::class, 'import']);

Route::post('/gr', [App\Http\Controllers\DataGuruController::class, 'import']);

Route::get('/admin', function () {return view('admin'); }); 
Route::get('/sup_admin', function () {return view('sup_admin'); });

Route::get('/coba', function () {return view('coba'); });

Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index'])->name('daftar_pd');
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import'])->name('import_pd');

>>>>>>> d67d8fefc295ae5b6005681d42f189b587510297
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);

//export
Route::get('/pesdik', [App\Http\Controllers\PesertaDidikController::class, 'index']);
Route::get('/pesdik/export', [App\Http\Controllers\PesertaDidikController::class, 'export']);
Route::get('/pesdik/cari', [App\Http\Controllers\PesertaDidikController::class, 'cari']);
Route::get('/tendik', [App\Http\Controllers\TendikController::class, 'index']);
Route::get('/tendik/export', [App\Http\Controllers\TendikController::class, 'export']);
Route::get('/tendik/cari', [App\Http\Controllers\TendikController::class, 'cari']);
Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index']);
Route::get('/guru/export', [App\Http\Controllers\GuruController::class, 'export']);
Route::get('/guru/cari', [App\Http\Controllers\GuruController::class, 'cari']);

//tambah user
Route::get('/user', [App\Http\Controllers\UserController::class, 'user'])->name('user.page');
Route::delete('/user/delete/{username}', [App\Http\Controllers\UserController::class, 'destroy']);
Route::get('/user/edit/{username}', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/user/update/{username}', [App\Http\Controllers\UserController::class, 'update']);

<<<<<<< HEAD

=======
Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);
>>>>>>> d67d8fefc295ae5b6005681d42f189b587510297

Auth::routes();

Route::get('/admin', [adminController::class, 'admin'])->middleware('auth');
Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/', [App\Http\Controllers\LoginController::class, 'authenticate']);

Route::get('/admin', [AdminController::class, 'admin']);

<<<<<<< HEAD

=======
Route::get('/coba', [cobaController::class, 'coba']);
Route::post('/coba', [cobaController::class, 'authenticate']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/test', [TestController::class, 'test'])->name('test');
Route::post('actionlogin', [TestController::class, 'actionlogin'])->name('actionlogin');

Route::get('dashboard', [dashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/admin', [App\Http\Controllers\adminController::class, 'admin'])->middleware('auth');

Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('login',[App\Http\Controllers\LoginController::class], 'authenticate')->name('login.auth');
Route::get('/admin', [App\Http\Controllers\adminController::class, 'admin'])->middleware('auth');

Route::get('/admins', [App\Http\Controllers\adminsController::class, 'admins']);
Route::get('/sups_admin', [App\Http\Controllers\superController::class, 'super']);
>>>>>>> d67d8fefc295ae5b6005681d42f189b587510297

Route::get('/coba', [App\Http\Controllers\cobaController::class, 'coba']);
Route::post('/coba', [App\Http\Controllers\cobaController::class, 'authenticate']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login']);
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate']);

Route::get('/test', [App\Http\Controllers\TestController::class, 'test'])->name('test');
Route::post('actionlogin', [App\Http\Controllers\TestController::class, 'actionlogin'])->name('actionlogin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD

//Cobaaas
Route::get('/tests', function() {return view('tests'); });
// End 

=======
Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/admin', [App\Http\Controllers\adminController::class, 'admin'])->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> d67d8fefc295ae5b6005681d42f189b587510297
