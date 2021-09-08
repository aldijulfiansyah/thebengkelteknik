<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PenjualanController extends Controller
{
    public function index()
    {
        $data_penjualan = Penjualan::all();
        return view('penjualan.index', [
            'data_penjualan' => $data_penjualan,
            'title' => 'penjualan'
        ]);
    }

    public function create(Request $request)
    {
        $bar = Barang::all();
        return view('penjualan.index', compact('bar'));

        $this->validate(
            $request,
            [
                'nama_barang' => 'required|min:4',
                'jumlah' => 'required',

            ],
            [
                'nama_barang.required' => 'Nama barang harus diisi !',
                'nama_barang.min' => 'Nama barang minimal 4 karakter !',
                'jumlah.required' => 'Jumlah barang harus diisi !',

            ]
        );

        Penjualan::create($request->all());

        Alert::success('Ditambahkan', 'Data Berhasil Ditambahkan');

        return redirect('/penjualan');
    }

    // public function edit($id)
    // {
    //     $barang = Barang::find($id);
    //     return view('barang/edit', [
    //         'barang' => $barang,
    //         'title' => 'Edit Barang'
    //     ]);
    // }

    // public function update(Request $request, $id)
    // {
    //     $this->validate(
    //         $request,
    //         [
    //             'nama_barang' => 'required|min:4',
    //             'jumlah' => 'required',
    //             'client_pt' => 'required|min:5',
    //             'nama_client' => 'required|regex:/^[a-zA-Z ]+$/|min:4',
    //             'barang_keluar' => 'required',
    //         ],
    //         [
    //             'nama_barang.required' => 'Nama barang harus diisi !',
    //             'nama_barang.min' => 'Nama barang minimal 4 karakter !',
    //             'jumlah.required' => 'Jumlah barang harus diisi !',
    //             'barang_keluar.required' => 'Jumlah barang keluar harus diisi!,...jika tidak ada maka barang keluar isi dengan nilai kosong ( 0 ) !',
    //             'client_pt.required' => 'Nama perusahaan harus diisi !',
    //             'client_pt.min' => 'Nama perusahaan minimal 5 karakter !',
    //             'nama_client.required' => 'Nama agent perusahaan harus diisi !',
    //             'nama_client.min' => 'Nama agent minimal 4 karakter !',
    //             'nama_client.regex' => 'Nama agent tidak boleh ada angka atau simbol !'
    //         ]

    //     );

    //     $barang = Barang::find($id);
    //     $barang->update($request->all());
    //     Alert::success('Diupdate', 'Data Berhasil Diupdate');
    //     return redirect('/barang');
    // }
    // public function delete($id)
    // {
    //     $barang = Barang::find($id);
    //     $barang->delete();
    //     Alert::success('Dihapus', 'Data Berhasil Dihapus');
    //     return redirect('/barang');
    // }
}
