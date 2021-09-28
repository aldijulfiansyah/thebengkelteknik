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
                                <h2>Data Perusaan</h2>
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
                                          <th scope="col">Perusahaan</th>
                                          <th scope="col">Alamat</th>
                                          <th scope="col">Kota</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">No Telp</th>
                                          <th scope="col">Do</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($data_perusahaan as $perusahaan)
                                        <tr>
                                            <td></td>
                                            <td scope="row">{{ $perusahaan->nama_pt }}</td>
                                            <td scope="row">{{ $perusahaan->alamat }}</td>
                                            <td scope="row">{{ $perusahaan->kota }}</td>
                                            <td scope="row">{{ $perusahaan->email }}</td>
                                            <td scope="row">{{ $perusahaan->no_telp }}</td>
                                            <td scope="row"><a href="/perusahaan/{{ $perusahaan->id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                              &nbsp;&nbsp;&nbsp;
                                              <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $perusahaan->id }}" data-nama="{{ $perusahaan->nama_pt }}"><i class="fa fa-trash-o"></i> Delete</a>
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/perusahaan/create" method="POST">
                @csrf
                <div class="form-group {{ $errors->has('nama_pt') ? 'has-error' : '' }}">
                  <label for="" class="form-label">Perusahaan</label>
                  <input name="nama_pt" type="text" class="form-control" id="nama_pt" aria-describedby="textHelp" placeholder="Masukan Nama Perusahaan" value="{{ old('nama_pt') }}">
                  @if($errors->has('nama_pt'))
                    <span class="help-block">{{ $errors->first('nama_pt') }}</span>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
                    <label for="" class="form-label">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="textHelp" placeholder="Masukan Alamat" value="{{ old('alamat') }}">
                    @if($errors->has('alamat'))
                      <span class="help-block">{{ $errors->first('alamat') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('kota') ? 'has-error' : '' }}">
                    <label for="" class="form-label">Kota</label>
                    <input name="kota" type="text" class="form-control" id="kota" aria-describedby="textHelp" placeholder="Masukan Kota" value="{{ old('kota') }}">
                    @if($errors->has('kota'))
                      <span class="help-block">{{ $errors->first('kota') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="textHelp" placeholder="Masukan Email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                      <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('no_telp') ? 'has-error' : '' }}">
                  <label for="" class="form-label">No Telp</label>
                  <input name="no_telp" type="number" class="form-control" id="no_telp" aria-describedby="textHelp" placeholder="Masukan No Telepon" value="{{ old('no_telp') }}">
                  @if($errors->has('no_telp'))
                    <span class="help-block">{{ $errors->first('no_telp') }}</span>
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
@error ('nama_pt')
    $('#exampleModal').modal('show');
@enderror
@error ('nama_agent')
    $('#exampleModal').modal('show');
@enderror
@error ('alamat')
    $('#exampleModal').modal('show');
@enderror
@error ('kota')
    $('#exampleModal').modal('show');
@enderror
@error ('email')
    $('#exampleModal').modal('show');
@enderror
@error ('no_telp')
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
    var perusahaanid = $(this).attr('data-id');
    var namaperusahaan = $(this).attr('data-nama');
    
  swal({
  title: "Yakin?",
  text: "Anda akan menghapus data perusahaan dengan nama "+namaperusahaan+" ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/perusahaan/"+perusahaanid+"/delete"
    swal("Data dengan nama "+namaperusahaan+" berhasil dihapus", {
      icon: "success",
    });
  } else {
    swal("Data tidak jadi dihapus");
  }
});

});


  </script>
@endpush
