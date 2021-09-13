<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) {

        // $validateData = $request->validate([
        //     'name'=> 'required|max:255',
        //     'tgl_lahir' => 'required',
        //     'username' => 'required|min:3|max:255|unique:users',
        //     'avatar' => 'required|mimes:jpg,jpeg,png',
        //     'email' => 'required|email:dns|unique:users',
        //     'password'=> 'required|min:5|max:255'
        // ]);

        $this->validate($request, [
            'name'=> 'required|max:255',
            'tgl_lahir' => 'required',
            'username' => 'required|min:3|max:255|unique:users',
            'level' => 'required',
            'avatar' => 'required|mimes:jpg,jpeg,png|file|max:1024',
            'email' => 'required|email:dns|unique:users',
            'password'=> 'required|min:5|max:255'
        ]);

        //$validateData['password'] =bcrypt($validateData['password']);
        // $validateData['password'] = Hash::make($validateData['password']);

        $file_name = $request->avatar->getClientOriginalName();
        $avatar = $request->avatar->storeAs('thumbnail', $file_name);

        // User::create($validateData);

        User::create([
            'name'=> $request->name,
            'tgl_lahir' => $request->tgl_lahir,
            'username' => $request->username,
            'level' => $request->level,
            'avatar' => $avatar,
            'email' => $request->email,
            'password'=> Hash::make($request->password)
        ]);

        return redirect('/login')->with('success', "Registrasi Berhasil! Silahkan Sign In");
    }
}
