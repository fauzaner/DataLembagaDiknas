<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

<<<<<<< HEAD
        $credentials = $request->only('username', 'password');

=======
>>>>>>> c11f458e2c323858b1599524c1acf0d90130bf18
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

<<<<<<< HEAD
        return back()->with('loginError', 'Email atau Password salah!!');
=======
>>>>>>> c11f458e2c323858b1599524c1acf0d90130bf18
    }
}
