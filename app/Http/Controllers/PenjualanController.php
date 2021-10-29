<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\InvoiceCode;
use App\Models\Penjualan;
use Dompdf\Dompdf;
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
        $invoicecode = InvoiceCode::all();
        return view('penjualan.index', [
            'data_penjualan' => $data_penjualan,
            'bar' => $bar,
            'invoicecode' => $invoicecode,
            'title' => 'Penjualan'
        ]);
    }

    public function create(Request $request)
    {



        $this->validate(
            $request,
            [
                'tanggal' => 'required',
                'jumlah' => 'required',


            ],
            [
                'tanggal.required' => 'Tanggal penjualan harus diisi !',
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
                'tanggal' => 'required',
                'jumlah' => 'required',
            ],
            [
                'tanggal.required' => 'Tanggal penjualan harus diisi !',
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


    public function invoice($id)
    {

        $data_penjualan = Penjualan::all()->where('id', $id)->first();
        $bar = Barang::all();
        return view('penjualan/invoice', [
            'data_penjualan' => $data_penjualan,
            'bar' => $bar,
            'title' => 'Invoice'
        ]);
    }

    public function print($id)
    {

        $data_penjualan = Penjualan::all()->where('id', $id)->first();
        $bar = Barang::all();

        return view('penjualan/printpdf', [
            'data_penjualan' => $data_penjualan,
            'bar' => $bar,
            'title' => 'Invoice'
        ]);
        // $html = view('penjualan/printpdf', [
        //     'data_penjualan' => $data_penjualan,
        //     'bar' => $bar,
        //     'title' => 'Invoice'
        // ]);

        // // instantiate and use the dompdf class
        // $dompdf = new Dompdf();
        // $dompdf->loadHtml($html);

        // // (Optional) Setup the paper size and orientation
        // $dompdf->setPaper('A4', 'landscape');

        // // Render the HTML as PDF
        // $dompdf->render();

        // // Output the generated PDF to Browser
        // $dompdf->stream();
    }
}
