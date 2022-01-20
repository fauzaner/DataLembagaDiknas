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
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/sup_admin');
        }

        return back()->with('loginError', 'Login Failed!');
    }
}
