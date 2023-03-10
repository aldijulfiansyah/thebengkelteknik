<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function index()
   {
        $data_user = User::all();
        return view('user.index',[
        'data_user' => $data_user,
        'title' => 'User'
        ]);
    }

    public function create(Request $request)
    {
        
        // $this->validate($request,[
        //     'name'=> 'required|max:255',
        //     'tgl_lahir' => 'required',
        //     'username' => 'required|min:5|max:255|unique:users',
        //     'avatar' => 'required|mimes:jpg,jpeg,png|file|max:1024',
        //     'email' => 'required|email:dns|unique:users',
        //     'password'=> 'required|min:5|max:255'
        // ]);

        // $file_name = $request->avatar->getClientOriginalName();
        // $avatar = $request->avatar->storeAs('thumbnail', $file_name);
        
        // User::create([
        //     'name'=> $request->name,
        //     'tgl_lahir' => $request->tgl_lahir,
        //     'username' => $request->username,
        //     'role' => $request->role,
        //     'avatar' => $avatar,
        //     // 'avatar' => $request->avatar,
        //     'email' => $request->email,
        //     'password'=> Hash::make($request->password)
        // ]);

        $validatedData = $request->validate([
            'name'=> 'required|max:255',
            'tgl_lahir' => 'required',
            'username' => 'required|min:5|max:255|unique:users',
            'role' => 'required',
            'avatar' => 'mimes:jpg,jpeg,png|file|max:1024',
            'email' => 'required|email:dns|unique:users',
            'password'=> 'required|min:5|max:255'
        ]);
        
        $validatedData['password'] = Hash::make($validatedData['password']);
        if($request->file('avatar')){
            $validatedData['avatar'] = $request->file('avatar')->store('thumbnail');
        }
        User::create($validatedData);
        Alert::success('Ditambahkan', 'Data Berhasil Ditambahkan');
        return redirect('/user');
    }

    public function delete(User $user, $id)
    {   
        $user = User::find($id);
        if($user->avatar) {
            Storage::delete($user->avatar);
        }
        $user->delete();

        
        
        Alert::success('Dihapus', 'Data Berhasil Dihapus');
        return redirect('/user');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user/edit',[
            'user'=> $user,
            'title' => 'Edit User'
        ]);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            
            'name'=> 'required|max:255',
            'tgl_lahir' => 'required',
            'email'=> 'required|email:dns'
        ]
    );

        $user = User::find($id);
        $user->update($request->all());
        Alert::success('Diupdate', 'Data Berhasil Diupdate');
        return redirect('/user');

    }


}
