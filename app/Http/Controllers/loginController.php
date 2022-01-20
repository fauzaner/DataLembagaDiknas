<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class loginController extends Controller
{
    public function login()
    {
        return view ('login', [
        ]);
    }

    public function authenticate(Requets $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        dd('berhasil login!');
    }
}
