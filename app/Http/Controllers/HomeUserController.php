<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeUserController extends Controller
{
    public function index()
    {   $eco = null;
        $data_user = User::find(Auth::user());
        // $banyak = DB::table('laporan')->sum('pemasukan');
        // $banyaks = DB::table('laporan')->sum('pengeluaran');
        // $lap = DB::table('laporan')->count();
        // $penj = DB::table('penjualan')->count();
        // $bar = DB::table('barang')->count();
        // $user = DB::table('users')->count();
       

        return view('userhome',[
            'title' => 'Home',
            'data_user' => $data_user,
            'eco'=> $eco
        ]);

        
    }
}
