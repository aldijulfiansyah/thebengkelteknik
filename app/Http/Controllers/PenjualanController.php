<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function index()
    {
        $data_penjualan = Penjualan::all();
        $bar = Barang::all();
        return view('penjualan.index', [
            'data_penjualan' => $data_penjualan,
            'bar' => $bar,
            'title' => 'Penjualan'
        ]);
    }

    public function create(Request $request)
    {



        $this->validate(
            $request,
            [

                'jumlah' => 'required',


            ],
            [
                'jumlah.required' => 'Jumlah barang harus diisi !'

            ]
        );

        Penjualan::create($request->all());

        Alert::success('Ditambahkan', 'Data Berhasil Ditambahkan');

        return redirect('/penjualan');
    }

    public function edit($id)
    {
        $bar = Barang::all();
        $penjualan = Penjualan::with('barang')->find($id);
        return view('penjualan/edit', [
            'penjualan' => $penjualan,
            'bar' => $bar,
            'title' => 'Edit Penjualan'
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'jumlah' => 'required',
            ],
            [
                'jumlah.required' => 'Jumlah barang harus diisi !',
            ]

        );

        $penjualan = Penjualan::find($id);
        $penjualan->update($request->all());
        Alert::success('Diupdate', 'Data Berhasil Diupdate');
        return redirect('/penjualan');
    }
    public function delete($id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        Alert::success('Dihapus', 'Data Berhasil Dihapus');
        return redirect('/penjualan');
    }
}
