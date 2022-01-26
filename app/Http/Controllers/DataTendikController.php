<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tendik;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TendikImport;

class DataTendikController extends Controller
{
    public function index(){

        $tendik = DB::table('tendik')
        ->orderByRaw('nama_tk ASC')
        ->paginate(5);

        
        return view('admin\daftar_tendik', [
            'title' => "Tenaga Kependidikan",
            'tendik' => $tendik
        ]);
    }

    public function import(){
        Excel::import(new TendikImport,
        request()->file('file'));
        Alert::success('Congrats', 'Berhasil Menambahkan Data Peserta Didik');
        return back();
    }
}
