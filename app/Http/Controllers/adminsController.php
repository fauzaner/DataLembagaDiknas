<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminsController extends Controller
{
    public function admins()
    {
        return view('admin.admins');
    }
}
