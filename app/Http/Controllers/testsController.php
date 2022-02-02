<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testsController extends Controller
{
    public function tests()
    {
        return view('tests');
    }
}
