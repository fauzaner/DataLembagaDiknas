<?php

use Illuminate\Support\Facades\Route;
use App\Imports\PDImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PesertaDidik;
use App\Models\Guru;
use App\Models\Tendik;
use App\Models\User;
use App\Http\Controllers\adminController;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\LoginController;


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
Route::get('/pd', function () { $peserta_didik = PesertaDidik::all();
    return view('daftar_pd',['peserta_didik'=>$peserta_didik]);
});
Route::get('/coba', function () {return view('coba'); });
Route::post('/pd', function () { Excel::import(new PDImport, request()->file('file'));
    Alert::success('Congrats', 'You\'ve Successfully Registered');
    return back(); });
Route::get('/admin', function () {return view('admin'); });
Route::get('/sup_admin', function () {return view('sup_admin'); });

Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });

//Login Routes
Auth::routes(); 


Route::get('/admin', [adminController::class, 'admin'])->middleware('auth');

Route::get('/tk', function () { $tendik = Tendik::all(); return view('daftar_tendik',['tendik'=>$tendik]); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });

Route::get('/guru', function () { $guru = Guru::all();
    return view('daftar_guru',['guru'=>$guru]);
});
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });

//Login Routes
//Route::get('/login', [LoginController::class, 'index']);
//Route::post('actionlogin', [LoginController::class, 'actionlogin'])->username('actionlogin');

//Route::get('sup-admin', [sup-adminController::class, 'sup-admin'])->username('sup-admin')->middleware('auth');
//Route::get('actionlogout', [LoginController::class, 'actionlogout'])->username('actionlogout')->middleware('auth');

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