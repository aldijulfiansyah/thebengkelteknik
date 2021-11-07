<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


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
        $pengu = Pengumuman::all();

        return view('welcome',[
            'lap' => $lap,
            'penj' => $penj,
            'bar' => $bar,
            'user' => $user,
            'title' => 'Home',
            'banyak' => $banyak,
            'banyaks' => $banyaks,
            'data_user' => $data_user,
            'eco'=> $eco,
            'pengu' => $pengu
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Pengumuman::create($request->all());

        Alert::success('Ditambahkan', 'Pengumuman Berhasil Ditambahkan');

        return redirect('/');
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
    public function delete($id)
    {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->delete();
        Alert::success('Dihapus', 'Data Berhasil Dihapus');
        return redirect('/');
    }
}
