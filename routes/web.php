<?php

use Illuminate\Support\Facades\Route;
use App\Imports\PDImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PesertaDidik;
use App\Models\Guru;
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

Route::get('/', function () {return view('sup_admin'); });
Route::get('/form', function () { return view('form'); });
Route::get('/upload', function () { return view('upload'); });
Route::get('/pd', function () { $peserta_didik = PesertaDidik::all(); 
    return view('daftar_pd',['peserta_didik'=>$peserta_didik]); });
Route::post('/pd', function () { Excel::import(new PDImport, request()->file('file')); 
    Alert::success('Congrats', 'You\'ve Successfully Registered');
    return back(); });
Route::get('/admin', function () {return view('admin'); });
Route::get('/guru', function () { $guru = Guru::all(); return view('daftar_guru',['guru'=>$guru]); });

//Login Routes
Route::get('/login', [LoginController::class, 'login'])->username('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->username('actionlogin');

Route::get('sup-admin', [sup-adminController::class, 'sup-admin'])->username('sup-admin')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->username('actionlogout')->middleware('auth');
