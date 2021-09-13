<?php

namespace App\Http\Controllers;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index()
   {    $banyak = DB::table('laporan')->sum('pemasukan');
        $banyaks = DB::table('laporan')->sum('pengeluaran');
        $data_laporan = Laporan::all();
        return view('laporan.index',[
            'data_laporan' => $data_laporan,
            'title' => 'Laporan',
            'banyak' => $banyak,
            'banyaks' => $banyaks
        ]);
    }

    public function create(Request $request)
    {
    //     $this->validate($request,[
    //         'nama_laporan'=>'required|min:4',
    //         'jumlah'=>'required',
    //         'harga'=>'required',
    //         'client_pt'=>'required|min:5',
    //         'nama_client'=>'required|regex:/^[a-zA-Z ]+$/|min:4',
    //         'laporan_keluar'=>'required',
    //     ],
    //     [
    //         'nama_laporan.required' => 'Nama laporan harus diisi !',
    //         'nama_laporan.min' => 'Nama laporan minimal 4 karakter !',
    //         'jumlah.required' => 'Jumlah laporan harus diisi !',
    //         'harga.required' => 'Harga laporan/pcs harus diisi !',
    //         'laporan_keluar.required' => 'Jumlah laporan keluar harus diisi!,...jika tidak ada maka laporan keluar isi dengan nilai kosong ( 0 ) !',
    //         'client_pt.required' => 'Nama perusahaan harus diisi !',
    //         'client_pt.min' => 'Nama perusahaan minimal 5 karakter !',
    //         'nama_client.required' => 'Nama agent perusahaan harus diisi !',
    //         'nama_client.min' => 'Nama agent minimal 4 karakter !',
    //         'nama_client.regex' => 'Nama agent tidak boleh ada angka atau simbol  !'
    //     ]
    // );31

        Laporan::create($request->all());

        Alert::success('Ditambahkan', 'Data Berhasil Ditambahkan');

        return redirect('/laporan');
        
    }


    public function edit($id)
    {
        $laporan = Laporan::find($id);
        return view('laporan/edit',[
            'laporan'=> $laporan,
            'title' => 'Edit laporan'
        ]);
    }

    public function update(Request $request,$id)
    {
    //     $this->validate($request,[
    //         'nama_laporan'=>'required|min:4',
    //         'jumlah'=>'required',
    //         'harga'=>'required',
    //         'client_pt'=>'required|min:5',
    //         'nama_client'=>'required|regex:/^[a-zA-Z ]+$/|min:4',
    //         'laporan_keluar'=>'required',
    //     ],
    //     [
    //         'nama_laporan.required' => 'Nama laporan harus diisi !',
    //         'nama_laporan.min' => 'Nama laporan minimal 4 karakter !',
    //         'jumlah.required' => 'Jumlah laporan harus diisi !',
    //         'harga.required' => 'Harga laporan/pcs harus diisi !',
    //         'laporan_keluar.required' => 'Jumlah laporan keluar harus diisi!,...jika tidak ada maka laporan keluar isi dengan nilai kosong ( 0 ) !',
    //         'client_pt.required' => 'Nama perusahaan harus diisi !',
    //         'client_pt.min' => 'Nama perusahaan minimal 5 karakter !',
    //         'nama_client.required' => 'Nama agent perusahaan harus diisi !',
    //         'nama_client.min' => 'Nama agent minimal 4 karakter !',
    //         'nama_client.regex' => 'Nama agent tidak boleh ada angka atau simbol !'
    //     ]
    
    // );

        $laporan = Laporan::find($id);
        $laporan->update($request->all());
        Alert::success('Diupdate', 'Data Berhasil Diupdate');
        return redirect('/laporan');

    }





    public static function delete($id)
    {   
        $laporan = Laporan::find($id);
        $laporan->delete();
        Alert::success('Dihapus', 'Data Berhasil Dihapus');
        return redirect('/laporan');
    }

    public function sum(){
        $data["sum"] = Laporan::get()->sum('pemasukan');
        return view('laporan/index',$data);
    }

}
