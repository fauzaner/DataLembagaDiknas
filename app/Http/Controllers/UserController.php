<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function user()
    {
        $users = User::all();

        return view('sup_admin.tambah_user',
        ['users' => $users]);
    }

    public function destroy($username)
    {
        $users =User::where('username',$username)->first();

        if ($users != null) {
            $users->delete();
            return redirect()->route('user.page')->with('success','Berhasil Hapus Data User');
        }
    }

    public function edit($username)
    {
        $users = User::findOrFail($username);
        
        return view('sup_admin.tambah_user',
        ['users' => $users]);
    }

    public function update(Request $request, User $username)
    {
        $users = User::find($username)->update($request->all()); 
                
        return view('sup_admin.tambah_user',
        ['users' => $users]);
    }
}
