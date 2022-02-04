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

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table pegawai sesuai pencarian data
		$tendik = DB::table('tendik')
		->where('nik_tendik','like',"%".$cari."%")
		->paginate();
 
    	// mengirim data pegawai ke view index
		return view('admin.daftar_tendik',['tendik' => $tendik]);
 
	}
}
