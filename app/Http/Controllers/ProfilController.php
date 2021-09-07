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
            'email'=> 'required|email:dns|unique:users'
        ]
    );

        $user = User::find($id);
        $user->update($request->all());
        Alert::success('Diupdate', 'Data Berhasil Diupdate');
        return redirect('/profil');

    }
}
