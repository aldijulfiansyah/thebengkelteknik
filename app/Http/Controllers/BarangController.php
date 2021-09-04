<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
   public function index()
   {
       $data_barang = Barang::all();
        return view('barang.index',[
        'data_barang' => $data_barang]);
    }

    public function create(Request $request)
    {
        Barang::create($request->all());
        return redirect('/barang')->with('sukses', 'Data Berhasil Ditambahkan');
        
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang/edit',['barang'=> $barang]);
    }

    public function update(Request $request,$id)
    {
        $barang = Barang::find($id);
        $barang->update($request->all());
        return redirect('/barang')->with('sukses', 'Data Berhasil Diupdate');
    }
    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang')->with('sukses', 'Data Berhasil Dihapus');
    }
}
