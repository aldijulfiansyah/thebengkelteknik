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
        $this->validate($request,[
            'nama_pt'=>'required|min:3',
            'alamat'=>'required',
            'kota'=>'required',
            'email'=>'required|email',
            'no_telp'=>'required|min:6',
            
        ],
        [
            'nama_pt.required' => 'Nama barang harus diisi !',
            'nama_barang.min' => 'Nama barang minimal 4 karakter !',
            'alamat.required' => 'Jumlah barang harus diisi !',
            'kota.required' => 'Nama kota wajib diisi !',
            'email.required' => 'Nama perusahaan harus diisi !',
            'no_telp.required' => 'Nomer Telepon Harus Diisi !',
            'no_telp.min'   => 'Nomer Telepon harus lebih dari 6'
            
        ]
    );
        
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
        $this->validate($request,[
            'nama_pt'=>'required|min:3',
            'alamat'=>'required',
            'kota'=>'required',
            'email'=>'required|email',
            'no_telp'=>'required|min:6',
        ],
        [
            'nama_pt.required' => 'Nama perusahaan harus diisi !',
            'nama_barang.min' => 'Nama perusahaan minimal 3 karakter !',
            'alamat.required' => 'alamat harus diisi !',
            'kota.required' => 'Nama kota harus diisi !',
            'email.required' => 'Email harus diisi !',
            'no_telp.required' => 'Nomer Telepon Harus Diisi !',
            'no_telp.min'   => 'Nomer Telepon harus lebih dari 6'
        ]
    
    );

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
