<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $data_customer = Customer::all();
        $data_perusahaan = Perusahaan::all();

        return view('customer.index', [
            'data_customer' => $data_customer,
            'data_perusahaan' => $data_perusahaan,
            'title' => 'Customer'
        ]);
    }

    public function create(Request $request)
    {
        // $this->validate(
        //     $request,
        //     [
        //         'nama_pt' => 'required|min:5',
        //         'nama_agent' => 'required|min:5',
        //         'alamat' => 'required',
        //         'kota' => 'required',
        //         'email' => 'required',
        //         'no_telp' => 'required',
        //     ],
        //     [
        //         'nama_pt.required' => 'Nama Perusahaan harus diisi !',
        //         'nama_pt.min' => 'Nama Perushaan minimal 5 karakter !',
        //         'nama_agent.required' => 'Nama Agent harus diisi !',
        //         'nama_agent.min' => 'Nama Agent minimal 5 karakter !',
        //         'alamat.required' => 'Alamat harus diisi !',
        //         'kota.required' => 'Kota harus diisi !',
        //         'email.required' => 'Email harus diisi!',
        //         'no_telp.required' => 'No Telepon harus diisi !'
        //     ]
        // );

        Customer::create($request->all());

        Alert::success('Ditambahkan', 'Data Berhasil Ditambahkan');

        return redirect('/customer');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer/edit', [
            'customer' => $customer,
            'title' => 'Edit Customer'
        ]);
    }

    public function update(Request $request, $id)
    {
        // $this->validate(
        //     $request,
        //     [
        //         'nama_pt' => 'required|min:5',
        //         'nama_agent' => 'required|min:5',
        //         'alamat' => 'required',
        //         'kota' => 'required',
        //         'email' => 'required',
        //         'no_telp' => 'required',
        //     ],
        //     [
        //         'nama_pt.required' => 'Nama Perusahaan harus diisi !',
        //         'nama_pt.min' => 'Nama Perushaan minimal 5 karakter !',
        //         'nama_agent.required' => 'Nama Agent harus diisi !',
        //         'nama_agent.min' => 'Nama Agent minimal 5 karakter !',
        //         'alamat.required' => 'Alamat harus diisi !',
        //         'kota.required' => 'Kota harus diisi !',
        //         'email.required' => 'Email harus diisi!',
        //         'no_telp.required' => 'No Telepon harus diisi !'
        //     ]

        // );

        $customer = Customer::find($id);
        $customer->update($request->all());
        Alert::success('Diupdate', 'Data Berhasil Diupdate');
        return redirect('/customer');
    }
    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        Alert::success('Dihapus', 'Data Berhasil Dihapus');
        return redirect('/customer');
    }
}
