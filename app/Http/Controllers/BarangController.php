<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Customer;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class BarangController extends Controller
{
   public function index()
   {    $data_customer = Customer::all();
        $data_barang = Barang::all();
        $data_perusahaan = Perusahaan::all();
        return view('barang.index',[
            'data_barang' => $data_barang,
            'data_customer' => $data_customer,
            'data_perusahaan' => $data_perusahaan,
            'title' => 'Barang'
    ]);
    }

    public function GetCustomer($id)
    {
        $nama_customer = Customer::where('perusahaan_id',$id)->get();
        return  response()->json($nama_customer);
    }

    // public function listCustomer($perusahaan_id){
    //     $data = Customer::where('perusahaan_id',$perusahaan_id)->get();
    //     return  response()->json($data);
    // }

    

    public function create(Request $request)
    {
        $this->validate($request,[
            'nama_barang'=>'required|min:4',
            'jumlah'=>'required',
            'harga'=>'required',
            'barang_keluar'=>'required',
            'perusahaan_id' => 'required',
            'customer_id' => 'required'
            
        ],
        [
            'nama_barang.required' => 'Nama barang harus diisi !',
            'nama_barang.min' => 'Nama barang minimal 4 karakter !',
            'jumlah.required' => 'Jumlah barang harus diisi !',
            'harga.required' => 'Harga barang/pcs harus diisi !',
            'barang_keluar.required' => 'Jumlah barang keluar harus diisi!,...jika tidak ada maka barang keluar isi dengan nilai kosong ( 0 ) !'
            
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
            'harga'=>'required',
            'client_pt'=>'required|min:5',
            'barang_keluar'=>'required',
        ],
        [
            'nama_barang.required' => 'Nama barang harus diisi !',
            'nama_barang.min' => 'Nama barang minimal 4 karakter !',
            'jumlah.required' => 'Jumlah barang harus diisi !',
            'harga.required' => 'Harga barang/pcs harus diisi !',
            'barang_keluar.required' => 'Jumlah barang keluar harus diisi!,...jika tidak ada maka barang keluar isi dengan nilai kosong ( 0 ) !'
            
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
