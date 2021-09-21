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
                                <h2>Data Penjualan</h2>
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
                                          <th scope="col">Jumlah</th>
                                          <th scope="col">Harga/pcs</th>
                                          <th scope="col">Total Harga</th>
                                          <th scope="col">Do</th>
                                          {{-- <th scope="col"></th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($data_penjualan as $penjualan)
                                        <tr>
                                            <td></td>
                                            <td scope="row">{{ $penjualan->barang->nama_barang }}</td>
                                            <td scope="row">{{ $penjualan->jumlah }}</td>
                                            <td scope="row">Rp {{ number_format($penjualan->barang->harga) }}</td>
                                            <td scope="row">RP {{ number_format($penjualan->barang->harga*$penjualan->jumlah)  }}</td>
                                            <td scope="row">
                                              <a href="/penjualan/{{ $penjualan->id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                              &nbsp;&nbsp;&nbsp;
                                              {{-- <a href="#" class="btn btn-success btn-sm">Print</a> --}}
                                              <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $penjualan->id }}" data-nama="{{ $penjualan->barang->nama_barang }}"><i class="fa fa-trash-o"></i> Delete</a>
                                            </td>
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
            <form action="/penjualan/create" method="POST">
                @csrf
                <div class="form-group">
                    <label for="" class="form-label">Nama Barang</label>  
                    <select class="form-control select2" style="width: 100%;" name="barang_id" id="type" required>
                        <option value="">- Pilih Barang -</option>
                        @foreach ($bar as $item) 
                        <option value="{{ $item->id }}" >{{ $item->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group {{ $errors->has('jumlah') ? 'has-error' : '' }}">
                  <label for="" class="form-label">Jumlah</label>
                  <input name="jumlah" type="number" class="form-control" id="jumlah" aria-describedby="textHelp" placeholder="Masukan Jumlah Barang Yang Dipesan" value="{{ old('jumlah') }}">
                  @if($errors->has('jumlah'))
                    <span class="help-block">{{ $errors->first('jumlah') }}</span>
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
    var penjualanid = $(this).attr('data-id');
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
    window.location = "/penjualan/"+penjualanid+"/delete"
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
