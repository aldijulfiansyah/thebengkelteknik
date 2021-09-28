@extends('layouts.master')
@section('content')
@include('sweetalert::alert')
<br>
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h2>Data Barang</h2>
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
                                          <th scope="col">Spesifikasi</th>
                                          <th scope="col">Quantity</th>
                                          <th scope="col">Harga/Pcs</th>
                                          <th scope="col">Perusahaan</th>
                                          <th scope="col">Agent</th>
                                          <th scope="col">Barang Keluar</th>
                                          <th scope="col">Sisa Barang Keluar</th>
                                          <th scope="col">Do</th>
                                          {{-- <th scope="col"></th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($data_barang as $barang)
                                        <tr>
                                            <td></td>
                                            <td scope="row">{{ $barang->nama_barang }}</td>
                                            <td scope="row">{{ $barang->deskripsi }}</td>
                                            <td scope="row">{{ $barang->jumlah }}</td>
                                            <td scope="row">Rp {{ number_format($barang->harga) }}</td>
                                            <td scope="row">{{ $barang->client_pt }}</td>
                                            <td scope="row">{{ $barang->nama_client }}</td>
                                            <td scope="row">{{ $barang->barang_keluar }}</td>
                                            <td scope="row">{{ $barang->jumlah - $barang->barang_keluar }}</td>
                                            <td scope="row"><a href="/barang/{{ $barang->id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                              &nbsp;&nbsp;&nbsp;
                                              <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $barang->id }}" data-nama="{{ $barang->nama_barang }}"><i class="fa fa-trash-o"></i> Delete</a>
                                            </td>
                                            {{-- <button type="button" name="del" class="btn btn-danger btn-sm" data-toggle="modal" data-value="{{ $barang->id }}" data-target="#modald">
                                              Delete
                                            </button> --}}
                                            {{-- <td scope="row"><a href="/barang/{{ $barang->id }}/delete" class="btn btn-danger btn-sm">Delete</a></td> --}}
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
                <div class="form-group {{ $errors->has('nama_barang') ? 'has-error' : '' }}">
                  <label for="" class="form-label">Nama Barang</label>
                  <input name="nama_barang" type="text" class="form-control" id="nama_barang" aria-describedby="textHelp" placeholder="Masukan Nama" value="{{ old('nama_barang') }}">
                  @if($errors->has('nama_barang'))
                    <span class="help-block">{{ $errors->first('nama_barang') }}</span>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : '' }}">
                  <label for="" class="form-label">Spesifikasi</label>
                  <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" aria-describedby="textHelp" placeholder="Masukan Spesifikasi Barang">{{ old('deskripsi') }}</textarea>
                  @if($errors->has('deskripsi'))
                    <span class="help-block">{{ $errors->first('deskripsi') }}</span>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('jumlah') ? 'has-error' : '' }}">
                  <label for="" class="form-label">Quantity</label>
                  <input name="jumlah" type="number" class="form-control" id="jumlah" aria-describedby="textHelp" placeholder="Masukan Jumlah Barang Yang Dipesan" value="{{ old('jumlah','0') }}">
                  @if($errors->has('jumlah'))
                    <span class="help-block">{{ $errors->first('jumlah') }}</span>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('harga') ? 'has-error' : '' }}">
                  <label for="" class="form-label">Harga/Pcs</label> <br>
                  <span style="float:left" class="label label-danger">Rp</span>
                  <input name="harga" type="number" class="form-control" id="harga" aria-describedby="textHelp" placeholder="Masukan Harga Barang per Pcs" value="{{ old('harga','0') }}">
                  @if($errors->has('harga'))
                    <span class="help-block">{{ $errors->first('harga') }}</span>
                  @endif
                </div>
                
                  @livewire('select')
              
                <div class="form-group {{ $errors->has('barang_keluar') ? 'has-error' : '' }}">
                  <label for="" class="form-label">Barang Keluar</label>
                  <input name="barang_keluar" type="number" class="form-control" id="barang_keluar" aria-describedby="textHelp" placeholder="Masukan Barang Keluar" value="{{ old('barang_keluar','0') }}">
                  @if($errors->has('barang_keluar'))
                    <span class="help-block">{{ $errors->first('barang_keluar') }}</span>
                  @endif
                </div>
                
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
        </div>
      </div>
    </div>
  </div>  
@stop

  @push('scripts')
  <script>
//erorr script
@error ('nama_barang')
    $('#exampleModal').modal('show');
@enderror
@error ('jumlah')
    $('#exampleModal').modal('show');
@enderror
@error ('client_pt')
    $('#exampleModal').modal('show');
@enderror
@error ('nama_client')
    $('#exampleModal').modal('show');
@enderror
@error ('barang_keluar')
    $('#exampleModal').modal('show');
@enderror
@error ('deskripsi')
    $('#exampleModal').modal('show');
@enderror
@error ('harga')
    $('#exampleModal').modal('show');
@enderror


///datatables script
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
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
});

//delete script
$('.delete').click(function(){
    var barangid = $(this).attr('data-id');
    var barangnama = $(this).attr('data-nama');
    
  swal({
  title: "Yakin?",
  text: "Anda akan menghapus data barang dengan nama "+barangnama+" ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/barang/"+barangid+"/delete"
    swal("Data dengan nama "+barangnama+" berhasil dihapus", {
      icon: "success",
    });
  } else {
    swal("Data tidak jadi dihapus");
  }
});

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
