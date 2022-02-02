<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sidebarController extends Controller
{
    public function sidebar() 
    {
        return view('sidebar');
    }
}
