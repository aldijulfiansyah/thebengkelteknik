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
        $this->validate($request,[
            'tanggal'=>'required',
            'keterangan'=>'required',
            'pemasukan'=>'required',
            'pengeluaran'=>'required',
        ],
        [
            'tanggal.required' => 'Tanggal laporan harus diisi !',
            'keterangan.required' => 'Keterangan harus diisi !',
            'pemasukan.required' => 'Pemasukan harus diisi !',
            'pengeluaran.required' => 'Pengeluaran harus diisi ! '
            
        ]
    );

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
        $this->validate($request,[
            'tanggal'=>'required',
            'keterangan'=>'required',
            'pemasukan'=>'required',
            'pengeluaran'=>'required',
        ],
        [
            'tanggal.required' => 'Tanggal laporan harus diisi !',
            'keterangan.required' => 'Keterangan harus diisi !',
            'pemasukan.required' => 'Pemasukan harus diisi !',
            'pengeluaran.required' => 'Pengeluaran harus diisi ! '
            
        ]
    );

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
