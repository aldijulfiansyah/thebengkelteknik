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
                                <h2>Data Customer</h2>
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
                                          <th scope="col">Nama Agent</th>
                                          <th scope="col">Perusahaan</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">No Telepon Agent</th>
                                          <th scope="col">Do</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($data_customer as $customer)
                                        <tr>
                                            <td></td>
                                            <td scope="row">{{ $customer->nama_agent }}</td>
                                            <td scope="row">{{ $customer->perusahaan->nama_pt }}</td>
                                            <td scope="row">{{ $customer->email_agent }}</td>
                                            <td scope="row">{{ $customer->no_telp_agent }}</td>
                                            <td scope="row"><a href="/customer/{{ $customer->id }}/edit" class="btn btn-warning btn-sm inverted"><i class="fa fa-pencil"></i> Edit</a>
                                              &nbsp;&nbsp;&nbsp;
                                              <a href="#" class="btn btn-danger btn-sm delete inverted" data-id="{{ $customer->id }}" data-nama="{{ $customer->nama_agent }}"><i class="fa fa-trash-o"></i> Delete</a>
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
            <form action="/customer/create" method="POST">
                @csrf
                <div class="form-group">
                  <label for="" class="form-label">Perusahaan</label>  
                  <select class="form-control select2" style="width: 100%;" name="perusahaan_id" id="type" required>
                      <option value="">- Pilih Perusahaan -</option>
                      @foreach ($data_perusahaan as $item) 
                      <option value="{{ $item->id }}" >{{ $item->nama_pt }}</option>
                      @endforeach
                  </select>
              </div>
                <div class="form-group {{ $errors->has('nama_agent') ? 'has-error' : '' }}">
                    <label for="" class="form-label">Nama Agent</label>
                    <input name="nama_agent" type="text" class="form-control" id="nama_agent" aria-describedby="textHelp" placeholder="Masukan Nama Agent" value="{{ old('nama_agent') }}">
                    @if($errors->has('nama_agent'))
                      <span class="help-block">{{ $errors->first('nama_agent') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('email_agent') ? 'has-error' : '' }}">
                    <label for="" class="form-label">Email</label>
                    <input name="email_agent" type="email" class="form-control" id="email_agent" aria-describedby="textHelp" placeholder="Masukan Email" value="{{ old('email_agent') }}">
                    @if($errors->has('email_agent'))
                      <span class="help-block">{{ $errors->first('email_agent') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('no_telp_agent') ? 'has-error' : '' }}">
                  <label for="" class="form-label">No Telepon Agent</label>
                  <input name="no_telp_agent" type="number" class="form-control" id="no_telp_agent" aria-describedby="textHelp" placeholder="Masukan No Telepon" value="{{ old('no_telp_agent') }}">
                  @if($errors->has('no_telp_agent'))
                    <span class="help-block">{{ $errors->first('no_telp_agent') }}</span>
                  @endif
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary inverted" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary inverted">Tambah</button>
        </form>
        </div>
      </div>
    </div>
  </div>  
@stop

  @push('scripts')
  <script>
//erorr script
@error ('nama_agent')
    $('#exampleModal').modal('show');
@enderror
@error ('alamat')
    $('#exampleModal').modal('show');
@enderror
@error ('kota')
    $('#exampleModal').modal('show');
@enderror
@error ('email_agent')
    $('#exampleModal').modal('show');
@enderror
@error ('no_telp_agent')
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
    var customerid = $(this).attr('data-id');
    var namacustomer = $(this).attr('data-nama');
    
  swal({
  title: "Yakin?",
  text: "Anda akan menghapus data customer dengan nama "+namacustomer+" ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/customer/"+customerid+"/delete"
    swal("Data dengan nama "+namacustomer+" berhasil dihapus", {
      icon: "success",
    });
  } else {
    swal("Data tidak jadi dihapus");
  }
});

});


  </script>
@endpush
