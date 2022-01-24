<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

<<<<<<< HEAD
        dd('berhasil login');
=======
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->with('loginError', 'Login Failed!');
>>>>>>> faaf645b0a82765e06baa19fc2e942f58f5245bd
    }
}
