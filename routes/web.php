<?php

use Illuminate\Support\Facades\Route;
use App\Imports\PDImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PesertaDidik;
use App\Models\Guru;
use App\Models\Tendik;
<<<<<<< HEAD
use App\Models\User;
use App\Http\Controllers\adminController;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\LoginController;
=======
use App\Models\Users;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AdminController;
>>>>>>> faaf645b0a82765e06baa19fc2e942f58f5245bd


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
Route::get('/pd', function () { $peserta_didik = PesertaDidik::all();
    return view('daftar_pd',['peserta_didik'=>$peserta_didik]);
});
Route::get('/coba', function () {return view('coba'); });
=======
<<<<<<< HEAD
>>>>>>> e77cc47839e53ccb0cceb8675dd52c2ccd381810
Route::get('/pd', [App\Http\Controllers\DataPDController::class, 'index']);
Route::post('/pd/import', [App\Http\Controllers\DataPDController::class, 'import']);
Route::get('/pd', function () { $peserta_didik = PesertaDidik::all();return view('admin.daftar_pd',['peserta_didik'=>$peserta_didik]);});
>>>>>>> faaf645b0a82765e06baa19fc2e942f58f5245bd
Route::post('/pd', function () { Excel::import(new PDImport, request()->file('file'));
    Alert::success('Congrats', 'You\'ve Successfully Registered');
    return back(); });
Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);
Route::get('/user', function () { $users = Users::all();return view('sup_admin.tambah_user',['users'=>$users]);});

Route::get('/sup_admin', function () {return view('sup_admin'); });

//Login Routes
Auth::routes();

Route::get('/login', [loginController::class, 'login']);

Auth::routes(); 

<<<<<<< HEAD

Route::get('/admin', [adminController::class, 'admin'])->middleware('auth');
=======
Route::get('/', [loginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/', [loginController::class, 'authenticate']);

Route::get('/admin', [AdminController::class, 'admin']);
<<<<<<< HEAD
=======
>>>>>>> f1913a50d1a9783c21d1d2b5deb7ca80d72c0720
>>>>>>> faaf645b0a82765e06baa19fc2e942f58f5245bd
>>>>>>> e77cc47839e53ccb0cceb8675dd52c2ccd381810

Route::get('/td', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });

//Login Routes
//Route::get('/login', [LoginController::class, 'index']);
//Route::post('actionlogin', [LoginController::class, 'actionlogin'])->username('actionlogin');

//Route::get('actionlogout', [LoginController::class, 'actionlogout'])->username('actionlogout')->middleware('auth');
<<<<<<< HEAD

Route::get('/tk', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
Route::get('/td', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });


Route::get('/tk', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
//Route::get('/sup-admin', [sup-adminController::class, 'sup-admin'])->username('sup-admin')->middleware('auth');
//Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->username('actionlogout')->middleware('auth');
Route::get('/td', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
//Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->username('actionlogout')->middleware('auth');
Route::get('/td', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
Route::get('/td', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });

Route::get('/coba', [cobaController::class, 'coba']);
Route::post('/coba', [cobaController::class, 'authenticate']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
=======
>>>>>>> faaf645b0a82765e06baa19fc2e942f58f5245bd
