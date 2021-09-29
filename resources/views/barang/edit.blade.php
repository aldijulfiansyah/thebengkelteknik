@extends('layouts.master')


@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <form action="/barang/{{ $barang->id }}/update" method="POST">
                            @csrf
                            
                            <div class="form-group">
                              <label for="" class="form-label">Nama Barang</label>
                              <input name="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror"  name="nama_barang" id="nama_barang" aria-describedby="textHelp" placeholder="Masukan Nama Barang" value="{{ old ('nama_barang',$barang->nama_barang) }}">
                            </div>
                            @error('nama_barang')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                              <label for="" class="form-label">Spesifikasi</label>
                              <textarea type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" aria-describedby="textHelp" placeholder="Masukan Spesifikasi Barang"> {{ old('deskripsi',$barang->deskripsi) }}</textarea>
                            </div>
                            @error('deskripsi')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                              <label for="" class="form-label">Quantity</label>
                              <input name="jumlah" type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" aria-describedby="textHelp" placeholder="Masukan Jumlah" value="{{  old('jumlah',$barang->jumlah) }}">
                            </div>
                            @error('jumlah')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                              <label for="" class="form-label">Harga/Pcs</label>
                              <input name="harga" type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" aria-describedby="textHelp" placeholder="Masukan Harga/Pcs" value="{{  old('harga',$barang->harga) }}">
                            </div>
                            @error('harga')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                              <label for="" class="form-label">Perusahaan</label>
                              <input name="client_pt" type="text" class="form-control @error('client_pt') is-invalid @enderror" id="client_pt" aria-describedby="textHelp" placeholder="Masukan Nama Perusahaan" value="{{ old('client_pt',$barang->client_pt) }}">
                            </div>
                            @error('client_pt')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                              <label for="" class="form-label">Agent</label>
                              <input name="nama_client" type="text" class="form-control @error('nama_client') is-invalid @enderror" id="nama_client" aria-describedby="textHelp" placeholder="Masukan Nama Agent" value="{{ old ('nama_client',$barang->nama_client) }}">
                            </div>
                            @error('nama_client')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                              <label for="" class="form-label">Barang Keluar</label>
                              <input name="barang_keluar" type="number" class="form-control  @error('barang_keluar') is-invalid @enderror" id="barang_keluar" aria-describedby="textHelp" placeholder="Masukan Jumlah Barang Keluar" value="{{ old ('barang_keluar',$barang->barang_keluar) }}">
                            </div>
                            @error('barang_keluar')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary inverted">Update</button>
                            <a name="Cancel" id="" class="btn btn-primary inverted" href="/barang" role="button">Cancel</a>
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
            <form action="/barang/{{ $barang->id }}/update" method="POST">
                @csrf
                <div class="form-group">
                  <label for="" class="form-label">Nama Barang</label>
                  <input name="nama_barang" type="text" class="form-control" id="nama_barang" aria-describedby="textHelp" placeholder="Masukan Nama" value="{{ $barang->nama_barang }}">
                </div>
                <div class="form-group">
                  <label for="" class="form-label">Jumlah</label>
                  <input name="jumlah" type="number" class="form-control" id="jumlah" aria-describedby="textHelp" placeholder="Masukan Jumlah" value="{{ $barang->jumlah }}">
                </div>
                <div class="form-group">
                  <label for="" class="form-label">Perusahaan</label>
                  <input name="client_pt" type="text" class="form-control" id="client_pt" aria-describedby="textHelp" placeholder="Masukan Nama Perusahaan" value="{{ $barang->client_pt }}">
                </div>
                <div class="form-group">
                  <label for="" class="form-label">Agent</label>
                  <input name="nama_client" type="text" class="form-control" id="nama_client" aria-describedby="textHelp" placeholder="Masukan Nama Agent" value="{{ $barang->nama_client }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    
    
    @endsection

