@extends('layouts.master')


@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <form action="/user/{{ $user->id }}/update" method="POST">
                            @csrf

                            <div class="form-group">
                              <label for="" class="form-label">Nama</label>
                              <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="name" id="name" aria-describedby="textHelp" placeholder="Masukan Nama Barang" value="{{ old ('name',$user->name) }}">
                            </div>
                            @error('name')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                              <label for="" class="form-label">Tanggal Lahir</label>
                              <input name="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror"  name="tgl_lahir" id="tgl_lahir" aria-describedby="textHelp" placeholder="Masukan Nama Barang" value="{{ old ('tgl_lahir',$user->tgl_lahir) }}">
                            </div>
                            @error('tgl_lahir')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                              <label for="" class="form-label">Email</label>
                              <input name="email" type="text" class="form-control @error('email') is-invalid @enderror"  name="email" id="email" aria-describedby="textHelp" placeholder="Masukan Nama Barang" value="{{ old ('email',$user->email) }}">
                            </div>
                            @error('email')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="role" class="form-label">Hak Akses</label>
                                <select class="form-control @error('role')is-invalid @enderror" id="role" name="role" placeholder="Username"  value="{{ old('role', $user->role) }}">
                                    {{-- <option selected>Pilih Hak Akses</option> --}}
                                    <option value="Karyawan Admin">Karyawan Admin</option>
                                    <option value="Karyawan User">Karyawan User</option>
                                </select>
                            </div>
                            @error('role')
                            <div class="invalid-feedback mb-2">
                                <p class="text-danger text-left">{{ $message }}</p>
                            </div>
                            @enderror
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a name="Cancel" id="" class="btn btn-primary" href="/user" role="button">Cancel</a>
                        </form>
                    </div> 
                </div>
            </div>
        </div>    
    </div>    
</div>

@endsection