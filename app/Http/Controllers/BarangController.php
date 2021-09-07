<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
   public function index()
   {
       $data_barang = Barang::all();
        return view('barang.index',[
        'data_barang' => $data_barang,
        'title' => 'Barang'
    ]);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'nama_barang'=>'required|min:4',
            'jumlah'=>'required',
            'client_pt'=>'required|min:5',
            'nama_client'=>'required|min:5',
            'barang_keluar'=>'required',
        ],
        [
            'nama_barang.required' => 'Nama barang harus diisi !',
            'nama_barang.min' => 'Nama barang minimal 4 karakter !',
            'jumlah.required' => 'Jumlah barang harus diisi !',
            'barang_keluar.required' => 'Jumlah barang keluar harus diisi!,...jika tidak ada maka barang keluar isi dengan nilai kosong ( 0 ) !',
            'client_pt.required' => 'Nama perusahaan harus diisi !',
            'client_pt.min' => 'Nama perusahaan minimal 5 karakter !',
            'nama_client.required' => 'Nama agent perusahaan harus diisi !',
            'nama_client.min' => 'Nama agent minimal 5 karakter !'
        ]
    );

        Barang::create($request->all());

        Alert::success('Ditambahkan', 'Data Berhasil Ditambahkan');

        return redirect('/barang');
        
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang/edit',[
            'barang'=> $barang,
            'title' => 'Edit Barang'
        ]);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'nama_barang'=>'required|min:4',
            'jumlah'=>'required',
            'client_pt'=>'required|min:5',
            'nama_client'=>'required|min:5',
            'barang_keluar'=>'required',
        ],
        [
            'nama_barang.required' => 'Nama barang harus diisi !',
            'nama_barang.min' => 'Nama barang minimal 4 karakter !',
            'jumlah.required' => 'Jumlah barang harus diisi !',
            'barang_keluar.required' => 'Jumlah barang keluar harus diisi!,...jika tidak ada maka barang keluar isi dengan nilai kosong ( 0 ) !',
            'client_pt.required' => 'Nama perusahaan harus diisi !',
            'client_pt.min' => 'Nama perusahaan minimal 5 karakter !',
            'nama_client.required' => 'Nama agent perusahaan harus diisi !',
            'nama_client.min' => 'Nama agent minimal 5 karakter !'
        ]
    
    );

        $barang = Barang::find($id);
        $barang->update($request->all());
        Alert::success('Diupdate', 'Data Berhasil Diupdate');
        return redirect('/barang');

    }
    public function delete($id)
    {   
        $barang = Barang::find($id);
        $barang->delete();
        Alert::success('Dihapus', 'Data Berhasil Dihapus');
        return redirect('/barang');
    }
    
}
