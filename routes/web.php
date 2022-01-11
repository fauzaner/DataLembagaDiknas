<?php

use Illuminate\Support\Facades\Route;
use App\Imports\PDImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PesertaDidik;
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

Route::get('/', function () {return view('sup-admin'); });
Route::get('/form', function () { return view('form'); });
Route::get('/upload', function () { return view('upload'); });
Route::get('/pd', function () { $peserta_didik = PesertaDidik::all(); return view('daftar_pd',['peserta_didik'=>$peserta_didik]); });
Route::post('/pd', function () { Excel::import(new PDImport, request()->file('file')); return back(); });
Route::get('/login', function () {return view('login'); });
Route::get('/admin', function () {return view('admin'); });
