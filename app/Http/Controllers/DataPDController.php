<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesertaDidik;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PDImport;

class DataPDController extends Controller
{
    public function index(){

        $peserta_didik = DB::table('peserta_didik')
        ->orderByRaw('nama_pd ASC')
        ->paginate(10);

        
        return view('admin\daftar_pd', [
            'title' => "Peserta Didik",
            'peserta_didik' => $peserta_didik
        ]);
    }

    public function import(){
        Excel::import(new PDImport,
        request()->file('file'));
        Alert::success('Congrats', 'Berhasil Menambahkan Data Peserta Didik');
        return back();
    }
}
