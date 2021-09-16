@extends('layouts.master')


@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <form action="/penjualan/{{ $penjualan->id }}/update" method="POST">
                            @csrf
                            
                            <div class="form-group">
                                <label for="" class="form-label">Nama Barang</label>  
                                <select class="form-control select2" style="width: 100%;" name="barang_id" id="barang_id">
                                    <option disabled value>- Pilih Barang -</option>
                                    <option  value="{{ $penjualan->barang_id }}">{{ $penjualan->barang->nama_barang }}</option>
                                    @foreach ($bar as $item) 
                                    <option value="{{ $item->id }}" >{{ $item->nama_barang }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                              <label for="" class="form-label">Jumlah</label>
                              <input name="jumlah" type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" aria-describedby="textHelp" placeholder="Masukan Jumlah" value="{{  old('jumlah',$penjualan->jumlah) }}">
                            </div>
                            @error('jumlah')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a name="Cancel" id="" class="btn btn-primary" href="/penjualan" role="button">Cancel</a>
                        </form>
                    </div> 
                </div>
            </div>
        </div>    
    </div>    
</div>


    
@endsection















@section('content1')

        <h1>Edit Barang</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{ session('sukses') }}
          </div>
        @endif
        <div class="form-row align-items-center">
            <div class="col-md-6" >
            <form action="/penjualan/{{ $penjualan->id }}/update" method="POST">
                @csrf
                <div class="form-group">
                  <label for="" class="form-label">Nama Barang</label>
                  <input name="nama_barang" type="text" class="form-control" id="nama_barang" aria-describedby="textHelp" placeholder="Masukan Nama" value="{{ $penjualan->barang->nama_barang }}">
                </div>
                <div class="form-group">
                  <label for="" class="form-label">Jumlah</label>
                  <input name="jumlah" type="number" class="form-control" id="jumlah" aria-describedby="textHelp" placeholder="Masukan Jumlah" value="{{ $penjualan->barang->jumlah }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    
    
    @endsection

