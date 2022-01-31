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

Auth::routes();

Route::get('/sup_admin', [App\Http\Controllers\SupAdminController::class, 'index'])->name('dashboard_admin');
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
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('daftar_profil');
Route::post('/profil/import', [App\Http\Controllers\ProfilController::class, 'import']);
Route::get('/admin', function () {return view('admin'); });

Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);

Route::get('/pesdik', [App\Http\Controllers\PesertaDidikController::class, 'index']);
Route::get('/pesdik/export', [App\Http\Controllers\PesertaDidikController::class, 'export']);

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index']);
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import']);

Route::get('/user', function () {return view('sup_admin.tambah_user'); });
Route::get('/user', function () { $users = Users::all();return view('sup_admin.tambah_user',['users'=>$users]);});
Route::get('/admin', function () {return view('admin'); });
Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);

Route::get('login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('login',[App\Http\Controllers\LoginController::class], 'authenticate')->name('login.auth');
Route::get('/admin', [App\Http\Controllers\adminController::class, 'admin'])->middleware('auth');
Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/', [App\Http\Controllers\LoginController::class, 'authenticate']);

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin']);

Route::get('/td', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });

Route::get('/coba', [App\Http\Controllers\cobaController::class, 'coba']);
Route::post('/coba', [App\Http\Controllers\cobaController::class, 'authenticate']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login']);
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate']);

Route::get('/test', [App\Http\Controllers\TestController::class, 'test'])->name('test');
Route::post('actionlogin', [App\Http\Controllers\TestController::class, 'actionlogin'])->name('actionlogin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');