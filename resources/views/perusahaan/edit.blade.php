@extends('layouts.master')


@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <form action="/perusahaan/{{ $perusahaan->id }}/update" method="POST">
                            @csrf
                            
                            <div class="form-group">
                              <label for="" class="form-label">Perusahaan</label>
                              <input name="nama_pt" type="text" class="form-control @error('nama_pt') is-invalid @enderror"  name="nama_pt" id="nama_pt" aria-describedby="textHelp" placeholder="Masukan Nama Perusahaan" value="{{ old ('nama_pt',$perusahaan->nama_pt) }}">
                            </div>
                            @error('nama_pt')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"  name="alamat" id="alamat" aria-describedby="textHelp" placeholder="Masukan Alamat" value="{{ old ('alamat',$perusahaan->alamat) }}">
                            </div>
                            @error('alamat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="" class="form-label">Kota</label>
                                <input name="kota" type="text" class="form-control @error('kota') is-invalid @enderror"  name="kota" id="kota" aria-describedby="textHelp" placeholder="Masukan Kota" value="{{ old ('kota',$perusahaan->kota) }}">
                            </div>
                            @error('kota')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="" class="form-label">Email</label>
                                <input name="email" type="text" class="form-control @error('email') is-invalid @enderror"  name="email" id="email" aria-describedby="textHelp" placeholder="Masukan Email" value="{{ old ('email',$perusahaan->email) }}">
                            </div>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="" class="form-label">No Telp</label>
                                <input name="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror"  name="no_telp" id="no_telp" aria-describedby="textHelp" placeholder="Masukan Nama Agent" value="{{ old ('no_telp',$perusahaan->no_telp) }}">
                            </div>
                            @error('no_telp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a name="Cancel" id="" class="btn btn-primary" href="/perusahaan" role="button">Cancel</a>
                        </form>
                    </div> 
                </div>
            </div>
        </div>    
    </div>    
</div>


    
@endsection