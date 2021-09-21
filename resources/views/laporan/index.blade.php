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
                            <h2>Data Laporan</h2>
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
                                      <th scope="col">Tanggal</th>
                                      <th scope="col">Keterangan</th>
                                      <th scope="col">Pemasukan</th>
                                      <th scope="col">Pengeluaran</th>
                                      <th scope="col">Do</th>
                                      <th scope="col"></th>
                                    </tr>
                                </thead>
                                
                                <tfoot>
                                  <tr>
                                    <th colspan="3">Total</th>
                                    <th  id="total_pemasukan">Rp{{ number_format($banyak) }}</th>
                                    <th  id="total_pengeluaran">Rp{{ number_format($banyaks) }}</th>
                                    <th></th>
                                    <th></th>
                                  </tr>
                                </tfoot>
                                <tbody>
                                  @foreach ($data_laporan as $laporan)
                                    <tr>
                                        <td></td>
                                        <td scope="row">{{ $laporan->tanggal }}</td>
                                        <td scope="row">{{ $laporan->keterangan }}</td>
                                        <td scope="row">Rp{{ number_format($laporan->pemasukan) }}</td>
                                        <td scope="row">Rp{{ number_format($laporan->pengeluaran) }}</td>
                                        <td scope="row"><a href="/laporan/{{ $laporan->id }}/edit" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</a></td>
                                            <td>
                                              <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $laporan->id }}" data-ket="{{ $laporan->keterangan }}"><i class="fa fa-trash-o"></i> Delete</a>
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
      <h5 class="modal-title" id="exampleModalLabel">Tambah Data Laporan</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <form class="form-auth-small" action="/laporan/create" method="POST">
            @csrf
            <div class="form-group {{ $errors->has('tanggal') ? 'has-error' : '' }}">
              <label for="" class="form-label">Tanggal</label>
              <input name="tanggal" type="date" class="form-control" id="tanggal" aria-describedby="textHelp" placeholder="Masukan Tanggal" value="{{ old('tanggal') }}">
              @if($errors->has('tanggal'))
                <span class="help-block">{{ $errors->first('tanggal') }}</span>
              @endif
            </div>
            <br>
            <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
              <label for="" class="form-label">Keterangan</label>
              <input name="keterangan" type="text" class="form-control" id="keterangan" aria-describedby="textHelp" placeholder="Masukan Keterangan" value="{{ old('keterangan') }}">
              @if($errors->has('keterangan'))
                <span class="help-block">{{ $errors->first('keterangan') }}</span>
              @endif
            </div>
            <br>
            <div class="form-group {{ $errors->has('pemasukan') ? 'has-error' : '' }}">
              <label for="" class="control-label">Pemasukan</label> <br>
              <span style="float:left" class="label label-danger">Rp</span>
              <input name="pemasukan" type="number" class="form-control" id="pemasukan" aria-describedby="textHelp" placeholder="Masukan Pemasukan" value="{{ old('pemasukan','0') }}">
              @if($errors->has('pemasukan'))
                <span class="help-block">{{ $errors->first('pemasukan') }}</span>
              @endif
            </div>
            <br>
            <div class="form-group {{ $errors->has('pengeluaran') ? 'has-error' : '' }}">
              <label for="" class="form-label">Pengeluaran</label> <br>
              <span style="float:left" class="label label-danger">Rp</span>
              <input name="pengeluaran" type="number" class="form-control" id="pengeluaran" aria-describedby="textHelp" placeholder="Masukan Pengeluaran" value="{{ old('pengeluaran','0') }}">
              @if($errors->has('pengeluaran'))
                <span class="help-block">{{ $errors->first('pengeluaran') }}</span>
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
@error ('tanggal')
$('#exampleModal').modal('show');
@enderror
@error ('keterangan')
$('#exampleModal').modal('show');
@enderror
@error ('pemasukan')
$('#exampleModal').modal('show');
@enderror
@error ('pengeluaran')
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
var laporanid = $(this).attr('data-id');
var laporanket = $(this).attr('data-ket');

swal({
title: "Yakin?",
text: "Anda akan menghapus data laporan dengan keterangan ("+laporanket+") ",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
window.location = "/laporan/"+laporanid+"/delete"
swal("Data dengan keterangan ("+laporanket+")  berhasil dihapus", {
  icon: "success",
});
} else {
swal("Data tidak jadi dihapus");
}
});

});


</script>
@endpush