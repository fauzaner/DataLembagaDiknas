<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cobaController extends Controller
{
    public function coba()
    {
        return view('coba', [
            'title' => 'coba',
            'active' => 'coba'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/lembaga');
        }

        return back()->with('loginError', 'Login failed!');
    }
}
