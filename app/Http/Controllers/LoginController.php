<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // if(Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/');
        // }

        if(Auth::attempt($credentials)) {
            if (auth()->user()->role == "Karyawan User") {
                $request->session()->regenerate();
                return redirect()->intended('/userhome');
            }else {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        }
        return back()->with('loginError', 'Login Gagal');
    }

    public function index_user()
    {$eco = null;
     $data_user = User::find(Auth::user());
        
        return view('userhome', [
            'title' => 'User Home',
            'active' => 'userhome',
            'data_user' => $data_user,
            'eco'=> $eco
        ]);
    }

    // public function index_lock()
    // {
    //     $pin = null;
    //     return view('lock', [
    //         'title' => 'Login',
    //         'active' => 'login',
    //         'pin' => $pin
    //     ]);
    // }

    // public function auth_admin(Request $request) {

    //     $credentials = $request->validate([
    //         'pin' => 'required'
    //     ]);
    //     if('pin' == 12345) {
    //         return redirect('/');
    //     }else {
    //         return redirect('/login');
    //     }
        

    // }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
