<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tendik;
 
use App\Exports\TendikExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TendikController extends Controller
{
    public function index()
	{
		$tendik = DB::table('tendik')
        ->orderByRaw('nama_tk ASC')
        ->paginate(5);

        
        return view('sup_admin\tendik', [
            'title' => "Tenaga Kependidikan",
            'tendik' => $tendik
        ]);
	}
 
	public function export()
	{
		return Excel::download(new TendikExport, 'tendik.xlsx');
	}
}
