<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesertaDidik;

class DataPDController extends Controller
{
    public function index(){

        $data_surat = DB::table('surat')
        ->orderByRaw('created_at DESC')
        ->paginate(10);

        
        return view('layouts/arsip', [
            'title' => "Arsip",
            'data_surat' => $data_surat
        ]);
    }
}
