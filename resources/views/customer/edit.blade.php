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
                                <label for="" class="form-label">Nama Perusahaan</label>  
                                <select class="form-control select2" style="width: 100%;" name="perusahaan_id" id="perusahaan_id">
                                    <option disabled value>- Pilih Perusahaan -</option>
                                    <option value="{{ $customer->perusahaan_id }}">{{ $customer->perusahaan->nama_pt }}</option>
                                    @foreach ($data_perusahaan as $item) 
                                    <option value="{{ $item->id }}" >{{ $item->nama_pt }}</option>
                                    @endforeach
                                </select>
                            </div>

                            
                            <div class="form-group">
                                <label for="" class="form-label">Nama Agent</label>
                                <input name="nama_agent" type="text" class="form-control @error('nama_agent') is-invalid @enderror"  name="nama_agent" id="nama_agent" aria-describedby="textHelp" placeholder="Masukan Nama Agent" value="{{ old ('nama_agent',$customer->nama_agent) }}">
                            </div>
                            @error('nama_agent')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="" class="form-label">Email</label>
                                <input name="email_agent" type="email" class="form-control @error('email_agent') is-invalid @enderror"  name="email_agent" id="email" aria-describedby="textHelp" placeholder="Masukan Email" value="{{ old ('email_agent',$customer->email_agent) }}">
                            </div>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="" class="form-label">No Telp</label>
                                <input name="no_telp_agent" type="number" class="form-control @error('no_telp_agent') is-invalid @enderror"  name="no_telp_agent" id="no_telp_agent" aria-describedby="textHelp" placeholder="Masukan Nama Agent" value="{{ old ('no_telp_agent',$customer->no_telp_agent) }}">
                            </div>
                            @error('no_telp_agent')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary inverted">Update</button>
                            <a name="Cancel" id="" class="btn btn-primary" href="/customer" role="button">Cancel</a>
                        </form>
                    </div> 
                </div>
            </div>
        </div>    
    </div>    
</div>


    
@endsection