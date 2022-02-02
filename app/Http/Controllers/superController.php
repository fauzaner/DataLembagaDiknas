<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class superController extends Controller
{
    public function super()
    {
        return view('sup_admin.sups_admin'); 
    } 
}
