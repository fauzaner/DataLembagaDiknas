<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PesertaDidik;
 
use App\Exports\PesertaDidikExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PesertaDidikController extends Controller
{
    public function index()
	{
		$peserta_didik = DB::table('peserta_didik')
        ->orderByRaw('nama_pd ASC')
        ->paginate(5);

        
        return view('sup_admin\peserta_didik', [
            'title' => "Peserta Didik",
            'peserta_didik' => $peserta_didik
        ]);
	}
 
	public function export()
	{
		return Excel::download(new PesertaDidikExport, 'peserta_didik.xlsx');
	}
}
