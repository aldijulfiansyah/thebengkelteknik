@extends('layouts.master')


@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <form action="/customer/{{ $customer->id }}/update" method="POST">
                            @csrf
                            
                            <div class="form-group">
                              <label for="" class="form-label">Perusahaan</label>
                              <input name="nama_pt" type="text" class="form-control @error('nama_pt') is-invalid @enderror"  name="nama_pt" id="nama_pt" aria-describedby="textHelp" placeholder="Masukan Nama Perusahaan" value="{{ old ('nama_pt',$customer->nama_pt) }}">
                            </div>
                            @error('nama_pt')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="" class="form-label">Nama Agent</label>
                                <input name="nama_agent" type="text" class="form-control @error('nama_agent') is-invalid @enderror"  name="nama_agent" id="nama_agent" aria-describedby="textHelp" placeholder="Masukan Nama Agent" value="{{ old ('nama_agent',$customer->nama_agent) }}">
                            </div>
                            @error('nama_agent')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="" class="form-label">Email</label>
                                <input name="email" type="text" class="form-control @error('email') is-invalid @enderror"  name="email" id="email" aria-describedby="textHelp" placeholder="Masukan Email" value="{{ old ('email',$customer->email) }}">
                            </div>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="" class="form-label">No Telp</label>
                                <input name="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror"  name="no_telp" id="no_telp" aria-describedby="textHelp" placeholder="Masukan Nama Agent" value="{{ old ('no_telp',$customer->no_telp) }}">
                            </div>
                            @error('no_telp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary inverted">Update</button>
                            <a name="Cancel" id="" class="btn btn-primary" href="/customer inverted" role="button">Cancel</a>
                        </form>
                    </div> 
                </div>
            </div>
        </div>    
    </div>    
</div>


    
@endsection