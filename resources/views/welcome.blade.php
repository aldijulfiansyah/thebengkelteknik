@extends('layouts.master')

@section('content')
<br>

<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    @if(auth()->user()->role == "Karyawan Admin")
                    <h1>Welcome Admin, {{ auth()->user()->name }} 
                        @foreach ($data_user as $datas)
                        @if($datas->avatar)
                        <img src="/storage/{{ auth()->user()->avatar }}" style="width:40px;height:40px;" class="img-circle" alt="Avatar"></h1>
                        @else
                        <img src="img/profile.png" style="width:40px;height:40px;" class="img-circle" alt="Avatar"></h1>
                        @endif
                        @endforeach
                    @else 
                    <h1>Welcome User, {{ auth()->user()->name }}
                        @foreach ($data_user as $datas)
                        @if($datas->avatar)
                        <img src="/storage/{{ auth()->user()->avatar }}" style="width:40px;height:40px;" class="img-circle" alt="Avatar"></h1>
                        @else
                        <img src="img/profile.png" style="width:40px;height:40px;" class="img-circle" alt="Avatar"></h1>
                        @endif
                        @endforeach
                    @endif
                    
                    <h3 class="panel-title">Weekly Overview</h3>
                    <p class="panel-subtitle">@php
                        $date = date('Y-m-d');
                    @endphp Tanggal : {{ $date }}</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-archive"></i></span>
                                <p>
                                    <span class="number">{{ $bar }}</span>
                                    <span class="title">Total Data Barang</span><br>
                                    @if (auth()->user()->role == "Karyawan Admin")
                                    <span class="link" style="float:left"><a name="" id="" class="btn btn-primary btn-sm" href="/barang" role="button">View Data</a></span>
                                    @endif
                                    
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-shopping-cart"></i></span>
                                <p>
                                    <span class="number">{{ $penj }}</span>
                                    <span class="title">Total Data Penjualan</span><br>
                                    @if (auth()->user()->role == "Karyawan Admin")
                                    <span class="link" style="float:left"><a name="" id="" class="btn btn-primary btn-sm" href="/penjualan" role="button">View Data</a></span>
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-list-ul"></i></span>
                                <p>
                                    <span class="number">{{ $lap }}</span>
                                    <span class="title">Total Data Laporan</span><br>
                                    @if (auth()->user()->role == "Karyawan Admin")
                                    <span class="link" style="float:left"><a name="" id="" class="btn btn-primary btn-sm" href="/laporan" role="button">View Data</a></span>
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-users"></i></span>
                                <p>
                                    <span class="number">{{ $user }}</span>
                                    <span class="title">Total User</span><br>
                                    @if (auth()->user()->role == "Karyawan Admin")
                                    <span class="link" style="float:left"><a name="" id="" class="btn btn-primary btn-sm" href="/user" role="button">View Data</a></span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div id="headline-chart" class="ct-chart"></div>
                        </div>
                        <div class="col-md-3">
                            @if ($banyak != 0)
                            <div class="weekly-summary text-right">
                                <span class="number">Rp{{ $eco = number_format($banyak) }}</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i></span>
                                <span class="info-label">- Total Pemasukan</span>
                            </div>
                            @else
                            <div class="weekly-summary text-right">
                                <span class="number">Rp {{ $eco = 0 }}</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i></span>
                                <span class="info-label">- Total Pemasukan</span>
                            </div>
                            @endif
                            
                            
                            @if ($banyak == 0)
                            
                            <div class="weekly-summary text-right">
                                <span class="number">Rp {{ $eco = number_format($banyaks)}}</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> Total Pemasukan Still Rp 0</span>
                                <span class="info-label">- Total Pengeluaran</span>
                            </div>

                            @else
                            
                            <div class="weekly-summary text-right">
                                <span class="number">Rp{{ $eco = number_format($banyaks) }}</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> {{ $eco = round(($banyaks/$banyak) *100) }}% dari Total Pemasukan</span>
                                <span class="info-label">- Total Pengeluaran</span>
                            </div>
                            @endif
                            
                            @if ($banyak == 0)
                            <div class="weekly-summary text-right">
                                <span class="number">Rp{{ $eco = 0 }}</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i>Not found any data selisih</span>
                                <span class="info-label">- Selisih</span>
                            @else
                            </div><div class="weekly-summary text-right">
                                <span class="number">Rp{{ number_format($banyak-$banyaks) }}</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> {{ round((($banyak-$banyaks)/$banyak) *100) }}% dari Total Pemasukan</span>
                                <span class="info-label">- Selisih</span>
                            </div>
                            @endif
                           
                        </div>
                    </div>
                </div>
            </div>
            
@endsection