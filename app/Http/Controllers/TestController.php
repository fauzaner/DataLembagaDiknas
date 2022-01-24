<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class TestController extends Controller
{
    public function test()
    {
        if(Auth::check())
        {
            return redirect('dashboard');
        }else{
            return view('test');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data))
        {
            return redirect('dashboard');
        }else{
            Session::flash('error', 'Login Failed');
            return redirect('/test');
        }
    }
}
