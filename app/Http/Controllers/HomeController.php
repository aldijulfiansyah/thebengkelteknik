<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $eco = null;
        $data_user = User::find(Auth::user());
        $banyak = DB::table('laporan')->sum('pemasukan');
        $banyaks = DB::table('laporan')->sum('pengeluaran');
        $lap = DB::table('laporan')->count();
        $penj = DB::table('penjualan')->count();
        $bar = DB::table('barang')->count();
        $user = DB::table('users')->count();
       

        return view('welcome',[
            'lap' => $lap,
            'penj' => $penj,
            'bar' => $bar,
            'user' => $user,
            'title' => 'Home',
            'banyak' => $banyak,
            'banyaks' => $banyaks,
            'data_user' => $data_user,
            'eco'=> $eco
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
