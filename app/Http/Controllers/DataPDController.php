<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesertaDidik;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PDImport;
use Alert;

class DataPDController extends Controller
{
    public function index(){
<<<<<<< HEAD
=======

>>>>>>> 949d313db98e28909be4f128d8dd86cc5f17360a
        $peserta_didik = DB::table('peserta_didik')
        ->orderByRaw('nama_pd ASC')
        ->paginate(5);

        return view('admin\daftar_pd', [
            'title' => "Peserta Didik",
            'peserta_didik' => $peserta_didik
<<<<<<< HEAD

=======
>>>>>>> 949d313db98e28909be4f128d8dd86cc5f17360a
        ]);
    }
    

    public function import(){
        Excel::import(new PDImport,
        request()->file('file'));
        Alert::success('Congrats', 'Berhasil Menambahkan Data Peserta Didik');
        return back();
    }
}
