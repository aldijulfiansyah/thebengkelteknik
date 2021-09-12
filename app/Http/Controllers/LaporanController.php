<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LaporanController extends Controller
{
    public function index()
   {   
        $data_laporan = Laporan::all();
        return view('laporan.index',[
            'title' => 'Laporan']);
    }

    public function create(Request $request)
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
    //         'nama_client.regex' => 'Nama agent tidak boleh ada angka atau simbol  !'
    //     ]
    // );

        Laporan::create($request->all());

        Alert::success('Ditambahkan', 'Data Berhasil Ditambahkan');

        return redirect('/laporan');
        
    }




}
