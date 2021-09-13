@extends('layouts.master')


@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <form action="/laporan/{{ $laporan->id }}/update" method="POST">
                            @csrf
                            
                            <div class="form-group">
                              <label for="" class="form-label">Tanggal</label>
                              <input name="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror"  name="tanggal" id="tanggal" aria-describedby="textHelp" placeholder="Masukan Tanggal" value="{{ old ('tanggal',$laporan->tanggal) }}">
                            </div>
                            @error('tanggal')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                              <label for="" class="form-label">Keterangan</label>
                              <textarea type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" aria-describedby="textHelp" placeholder="Masukan Keterangan"> {{ old('keterangan',$laporan->keterangan) }}</textarea>
                            </div>
                            @error('keterangan')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                              <label for="" class="form-label">Pemasukan</label>
                              <input name="pemasukan" type="number" class="form-control @error('pemasukan') is-invalid @enderror" id="pemasukan" aria-describedby="textHelp" placeholder="Masukan Pemasukan" value="{{  old('pemasukan',$laporan->pemasukan) }}">
                            </div>
                            @error('pemasukan')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                              <label for="" class="form-label">Pengeluaran</label>
                              <input name="pengeluaran" type="number" class="form-control @error('pengeluaran') is-invalid @enderror" id="pengeluaran" aria-describedby="textHelp" placeholder="Masukan Pengeluaran" value="{{  old('pengeluaran',$laporan->pengeluaran) }}">
                            </div>
                            @error('pengeluaran')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a name="Cancel" id="" class="btn btn-primary" href="/laporan" role="button">Cancel</a>
                        </form>
                    </div> 
                </div>
            </div>
        </div>    
    </div>    
</div>


    
@endsection



