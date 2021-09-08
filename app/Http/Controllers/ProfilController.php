<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index()
   {
        $data_user = User::find(Auth::user());
        return view('profil.index',[
            'data_user' => $data_user,
            'title' => 'Profil'
        ]);
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('profil/edit',[
            'user'=> $user,
            'title' => 'Edit Profile'
        ]);
    }
    public function update(Request $request, User $user, $id)
    {
        $this->validate($request,[
            'name'=> 'required|max:255',
            'tgl_lahir' => 'required',
            'username' => 'required|min:3|max:255|unique:users',
            'email'=> 'required|email:dns'
        ]
    );

        $user = User::find($id);
        $user->update($request->all());
        Alert::success('Diupdate', 'Profil Berhasil Diupdate');
        return redirect('/profil');

    }
    public function update_password(Request $request)
    {
        $request->validate([
            'old_password' => 'required|min:5|max:100',
            'new_password' => 'required|min:5|max:100',
            'confirm_pass' => 'required|same:new_password',
        ]);

        $current_user=auth()->user();

        if(Hash::check($request->old_password,$current_user->password)){

            $current_user->update([
                'password'=>bcrypt($request->new_password)
            ]);
            Alert::success('Diupdate', 'Password Berhasil Diupdate');
            return redirect('/profil');

        }else{
            Alert::error('Gagal Update', 'Password Gagal Diupdate');
            return redirect('/profil');
        }
        
    }
}
