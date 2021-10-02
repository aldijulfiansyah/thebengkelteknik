@extends('layouts.master')
@section('content')
<br>

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="invoice-title" style="margin-top: 70px;">
                                        <img src="{{ asset('admin/assets/img/invv.png')}}" class="logo">                       
                                    </div>
                                </div>
                                <div class="col-xs-6 text-right" style="margin-top: 40px;">
                                    <address>
                                        <strong>CV SUBAGIO TEKNIK</strong><br><br>
                                        Jl. Cigondewah Kaler No.28<br>
                                        Kec. Bandung Kulon, Kabupate Bandung<br>
                                        Bandung<br>
                                        Telp: 08900000000
                                    </address>
                                </div>
                            </div>        
                            <div class="row">
                                <hr>
                                <div class="text-center">
                                    <h3><strong>INVOICE</strong></h3>                                
                                </div>                                           
                                <div class="col-xs-6">
                                    <address>
                                        Kepada Yth. Bpk {{ $data_penjualan->barang->customer->nama_agent }}<br>
                                        <strong>{{ $data_penjualan->barang->perusahaan->nama_pt }}</strong><br>
                                        {{ $data_penjualan->barang->perusahaan->alamat }}<br>
                                        {{ $data_penjualan->barang->perusahaan->kota }}<br>
                                        No Telp : {{ $data_penjualan->barang->perusahaan->no_telp }}<br>
                                        Email   : {{ $data_penjualan->barang->perusahaan->email }}<br>
                                    </address>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <address>
                                        No Invoice  : {{ $data_penjualan->full_number }}<br>
                                        Tanggal     : {{ $data_penjualan->tanggal }}<br>
                                    </address>
                                </div>                              
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-tittle"><strong>Order</strong></h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <td class="text-center"><strong>No</strong></td>
                                                            <td class="text-center"><strong>Nama Barang</strong></td>
                                                            <td class="text-center"><strong>Jumlah</strong></td>
                                                            <td class="text-center"><strong>Harga Barang</strong></td>
                                                            <td class="text-center"><strong>Total</strong></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">{{ $data_penjualan->barang->nama_barang}}</td>
                                                            <td class="text-center">{{ $data_penjualan->jumlah }}</td>
                                                            <td class="text-center">RP {{ number_format($data_penjualan->barang->harga)}}</td>
                                                            <td class="text-center">RP {{ number_format($data_penjualan->barang->harga*$data_penjualan->jumlah)  }}</td>
                                                        </tr>
                                                        

                                                        <tr>
                                                            <td class="thick-line"></td>
                                                            <td class="thick-line"></td>
                                                            <td class="thick-line"></td>
                                                            <td class="thick-line "></td>
                                                            <td class="thick-line "></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a name="Cancel"  class="btn btn-primary inverted" href="/penjualan" role="button">Kembali</a>
                            &nbsp;
                            <a name="Cancel"  class="btn btn-success inverted" href="#" role="button"><i class="fa fa-print"></i> Print</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
