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
        $peserta_didik = DB::table('peserta_didik')
        ->orderByRaw('nama_pd ASC')
        ->paginate(5);

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

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table pegawai sesuai pencarian data
		$peserta_didik = DB::table('peserta_didik')
		->where('nik_pd','like',"%".$cari."%")
		->paginate();
 
    	// mengirim data pegawai ke view index
		return view('admin.daftar_pd',['peserta_didik' => $peserta_didik]);
 
	}
}
