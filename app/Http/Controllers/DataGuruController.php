<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\GuruImport;

class DataGuruController extends Controller
{
    public function index(){

        $guru = DB::table('guru')
        ->orderByRaw('nama_gr ASC')
        ->paginate(5);

        
        return view('admin\daftar_guru', [
            'title' => "Guru",
            'guru' => $guru
        ]);
    }

    public function import(){
        Excel::import(new GuruImport,
        request()->file('file'));
        Alert::success('Congrats', 'Berhasil Menambahkan Data Peserta Didik');
        return back();
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table pegawai sesuai pencarian data
		$guru = DB::table('guru')
		->where('nik_gr','like',"%".$cari."%")
		->paginate();
 
    	// mengirim data pegawai ke view index
		return view('admin.daftar_guru',['guru' => $guru]);
 
	}
}
