<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_perusahaan = Perusahaan::all();
        return view('perusahaan.index', [
            'data_perusahaan' => $data_perusahaan,
            'title' => 'Perusahaan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        Perusahaan::create($request->all());

        Alert::success('Ditambahkan', 'Data Berhasil Ditambahkan');

        return redirect('/perusahaan');
    }

    public function edit($id)
    {
        $perusahaan = Perusahaan::find($id);
        return view('perusahaan/edit',[
            'perusahaan'=> $perusahaan,
            'title' => 'Edit Perusahaan'
        ]);
    }
    public function update(Request $request,$id)
    {
    //     $this->validate($request,[
    //         'nama_barang'=>'required|min:4',
    //         'jumlah'=>'required',
    //         'harga'=>'required',
    //         'client_pt'=>'required|min:5',
    //         'nama_client'=>'required|regex:/^[a-zA-Z ]+$/|min:4',
    //         'barang_keluar'=>'required',
    //     ],
    //     [
    //         'nama_barang.required' => 'Nama barang harus diisi !',
    //         'nama_barang.min' => 'Nama barang minimal 4 karakter !',
    //         'jumlah.required' => 'Jumlah barang harus diisi !',
    //         'harga.required' => 'Harga barang/pcs harus diisi !',
    //         'barang_keluar.required' => 'Jumlah barang keluar harus diisi!,...jika tidak ada maka barang keluar isi dengan nilai kosong ( 0 ) !',
    //         'client_pt.required' => 'Nama perusahaan harus diisi !',
    //         'client_pt.min' => 'Nama perusahaan minimal 5 karakter !',
    //         'nama_client.required' => 'Nama agent perusahaan harus diisi !',
    //         'nama_client.min' => 'Nama agent minimal 4 karakter !',
    //         'nama_client.regex' => 'Nama agent tidak boleh ada angka atau simbol !'
    //     ]
    
    // );

        $perusahaan = Perusahaan::find($id);
        $perusahaan->update($request->all());
        Alert::success('Diupdate', 'Data Berhasil Diupdate');
        return redirect('/perusahaan');

    }
    public function delete($id)
    {   
        $perusahaan = Perusahaan::find($id);
        $perusahaan->delete();
        Alert::success('Dihapus', 'Data Berhasil Dihapus');
        return redirect('/perusahaan');
    }
}
