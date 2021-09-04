@extends('layouts.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Barang</h3>
                                <div class="right">
                                      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                          <i class="lnr lnr-plus-circle"></i>
                                        Tambah Data</button>
                                        
                                </div>
                                
                                  
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover" id="bars">
                                    <thead>
                                        <tr>
                                          <th>No</th>
                                          <th scope="col">Nama Barang</th>
                                          <th scope="col">Quantity</th>
                                          <th scope="col">Perusahaan</th>
                                          <th scope="col">Agent</th>
                                          <th scope="col">Do</th>
                                          <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($data_barang as $barang)
                                        <tr>
                                            <td></td>
                                            <td scope="row">{{ $barang->nama_barang }}</td>
                                            <td scope="row">{{ $barang->jumlah }}</td>
                                            <td scope="row">{{ $barang->client_pt }}</td>
                                            <td scope="row">{{ $barang->nama_client }}</td>
                                            <td scope="row"><a href="/barang/{{ $barang->id }}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                                            <td scope="row"><a href="/barang/{{ $barang->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a></td>
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

    
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/barang/create" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="" class="form-label">Nama Barang</label>
                  <input name="nama_barang" type="text" class="form-control" id="nama_barang" aria-describedby="textHelp" placeholder="Masukan Nama">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Jumlah</label>
                  <input name="jumlah" type="number" class="form-control" id="jumlah" aria-describedby="textHelp" placeholder="Masukan Jumlah">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Perusahaan</label>
                  <input name="client_pt" type="text" class="form-control" id="client_pt" aria-describedby="textHelp" placeholder="Masukan Nama Perusahaan">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Agent</label>
                  <input name="nama_client" type="text" class="form-control" id="nama_client" aria-describedby="textHelp" placeholder="Masukan Nama Agent">
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>
  </div>
@stop

  @push('scripts')
  <script>
    // $(document).ready(function(){ $('#bars').DataTable(); });
    $(document).ready(function() {
    var t = $('#bars').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]]
    } );
    t.on( 'draw.dt', function () {
    var PageInfo = $('#example').DataTable().page.info();
         t.column(0, { page: 'current' }).nodes().each( function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        } );
    } );
    });
  </script>
@endpush






































{{-- 

@section('content1')
    

        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{ session('sukses') }}
          </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h1> data barang</h1>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data Barang
                </button>
            </div>
            
            <div>
                <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>NAMA BARANG</th>
                                <th>JUMLAH</th>
                                <th>PERUSAHAAN</th>
                                <th>AGENT</th>
                                <th>DO</th>
                                <th></th>
                            </tr>
                        </thead>
                            @foreach ($data_barang as $barang)
                                
                            
                            <tbody>
                                <tr>
                                    <td scope="row">{{ $barang->nama_barang }}</td>
                                    <td>{{ $barang->jumlah }}</td>
                                    <td>{{ $barang->client_pt }}</td>
                                    <td>{{ $barang->nama_client }}</td>
                                    <td><a href="/barang/{{ $barang->id }}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                                    <td><a href="/barang/{{ $barang->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a></td>
                                </tr>
                            </tbody>
                            @endforeach
                </table>
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/barang/create" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="" class="form-label">Nama Barang</label>
                  <input name="nama_barang" type="text" class="form-control" id="nama_barang" aria-describedby="textHelp" placeholder="Masukan Nama">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Jumlah</label>
                  <input name="jumlah" type="number" class="form-control" id="jumlah" aria-describedby="textHelp" placeholder="Masukan Jumlah">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Perusahaan</label>
                  <input name="client_pt" type="text" class="form-control" id="client_pt" aria-describedby="textHelp" placeholder="Masukan Nama Perusahaan">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Agent</label>
                  <input name="nama_client" type="text" class="form-control" id="nama_client" aria-describedby="textHelp" placeholder="Masukan Nama Agent">
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection --}}
