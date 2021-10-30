@extends('layouts.master')
@section('content')
@include('sweetalert::alert')
<br>
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-headline">
                            <div class="panel-heading">
                                <center><h3 class="panel-title">Pengumuman Untuk Karyawan</h3></center>
                                
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover" id="pengu">
                                    <thead>
                                        <tr>
                                          <th>No</th>
                                          {{-- <th scope="col">Tgl Pengumuman</th>
                                          <th scope="col">Keterangan</th> --}}
                                          <th scope="col">Isi Pengumuman</th>
                                          <th scope="col">Dibuat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data_karyawan as $pengumuman)
                                        <tr>
                                            <td scope="row">{{$loop->iteration}}</td>
                                            <td scope="row">{{ $pengumuman->isi }}</td>
                                            <td scope="row">{{ $pengumuman->created_at }}</td>
                                            
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
  </div>  
@stop





























