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
                        <img src="/storage/{{ auth()->user()->avatar }}" style="width:40px;height:40px;" class="img-circle inverted" alt="Avatar"></h1>
                        @else
                        <img src="img/profile.png" style="width:40px;height:40px;" class="img-circle inverted" alt="Avatar"></h1>
                        @endif
                        @endforeach
                    @else 
                    <h1>Welcome User, {{ auth()->user()->name }}
                        @foreach ($data_user as $datas)
                        @if($datas->avatar)
                        <img src="/storage/{{ auth()->user()->avatar }}" style="width:40px;height:40px;" class="img-circle inverted" alt="Avatar"></h1>
                        @else
                        <img src="img/profile.png" style="width:40px;height:40px;" class="img-circle inverted" alt="Avatar"></h1>
                        @endif
                        @endforeach
                    @endif
                    
                    <br>
                    <br>
                    
                </div>
                <br>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon inverted"><i class="fa fa-archive"></i></span>
                                <p>
                                    <span class="number">{{ $bar }}</span>
                                    <span class="title">Total Data Barang</span><br>
                                    @if (auth()->user()->role == "Karyawan Admin")
                                    <span class="link" style="float:left"><a name="" id="" class="btn btn-primary btn-sm inverted" href="/barang" role="button">View Data</a></span>
                                    @endif
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-shopping-cart inverted"></i></span>
                                <p>
                                    <span class="number">{{ $penj }}</span>
                                    <span class="title">Total Data Penjualan</span><br>
                                    @if (auth()->user()->role == "Karyawan Admin")
                                    <span class="link" style="float:left"><a name="" id="" class="btn btn-primary btn-sm inverted" href="/penjualan" role="button">View Data</a></span>
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-list-ul inverted"></i></span>
                                <p>
                                    <span class="number">{{ $lap }}</span>
                                    <span class="title">Total Data Laporan</span><br>
                                    @if (auth()->user()->role == "Karyawan Admin")
                                    <span class="link" style="float:left"><a name="" id="" class="btn btn-primary btn-sm inverted" href="/laporan" role="button">View Data</a></span>
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-users inverted"></i></span>
                                <p>
                                    <span class="number">{{ $user }}</span>
                                    <span class="title">Total User</span><br>
                                    @if (auth()->user()->role == "Karyawan Admin")
                                    <span class="link" style="float:left"><a name="" id="" class="btn btn-primary btn-sm inverted" href="/user" role="button">View Data</a></span>
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
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <p>
                    <span class="link" style="float:left"><a name="" id="" class="btn btn-primary btn-sm inverted"data-toggle="modal" data-target="#pengumumanmodal" ><i class="fa fa-paper-plane-o"></i> &nbsp; &nbsp; Buat Pengumuman</a></span>
                    
                </p> &nbsp; &nbsp; &nbsp; &nbsp;
                <p class="panel-subtitle">@php
                    $date = date('Y-m-d');
                @endphp Tanggal : {{ $date }}</p>
            <table class="table table-hover" id="pengu">
                <thead>
                    <tr>
                      <th>No</th>
                      {{-- <th scope="col">Tgl Pengumuman</th>
                      <th scope="col">Keterangan</th> --}}
                      <th scope="col">Isi Pengumuman</th>
                      <th scope="col">Dibuat</th>
                      <th scope="col">Do</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($pengu as $pengumuman)
                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td scope="row">{{ $pengumuman->isi }}</td>
                        <td scope="row">{{ $pengumuman->created_at }}</td>
                        <td scope="row">
                          
                          <a href="#" class="btn btn-danger btn-sm delete inverted" data-id="{{ $pengumuman->id }}" ><i class="fa fa-trash-o"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>

            <h3>Subagio Teknik Location</h3>
            <iframe src="https://my.atlistmaps.com/map/d7e0ddec-4b5a-4363-b7a4-535e41ac2697?share=true" allow="geolocation" width="100%" height="600px" frameborder="0" scrolling="no" allowfullscreen></iframe>    
                

            </div>
            


<!-- Modal -->
<div class="modal fade" id="pengumumanmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Pengumuman </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/pengumuman/create" method="POST">
                @csrf
                <div class="form-group {{ $errors->has('isi') ? 'has-error' : '' }}">
                  <label for="" class="form-label">Pengumuman</label>
                  <textarea class="form-control" type="text" name="isi" style="height: 200px" id="isi" aria-describedby="textHelp" placeholder="Masukan Pengumuman">{{ old('isi') }}</textarea>
                  @if($errors->has('isi'))
                    <span class="help-block">{{ $errors->first('isi') }}</span>
                  @endif
                </div>
                
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary inverted" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary inverted">Tambah</button>
        </form>


@endsection

@push('scripts')
<script>

//delete script
$('.delete').click(function(){
    var penguid = $(this).attr('data-id');
    
  swal({
  title: "Yakin?",
  text: "Anda akan menghapus pengumuman ini?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/pengumuman/"+penguid+"/delete"
    swal("Data  berhasil dihapus", {
      icon: "success",
    });
  } else {
    swal("Data tidak jadi dihapus");
  }
});

});


</script>

@endpush