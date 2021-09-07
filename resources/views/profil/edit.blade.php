@extends('layouts.master')


@section('content')


<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <form action="/profil/{{ $user->id }}/update" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="" class="form-label">Name</label>
                              <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="name" id="name" aria-describedby="textHelp" placeholder="Name" value="{{ old ('name',$user->name) }}">
                            </div>
                            @error('name')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                              <label for="" class="form-label">Birthdate</label>
                              <input name="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" aria-describedby="textHelp" placeholder="BirthDate" value="{{ old ('tgl_lahir',$user->tgl_lahir) }}">
                            </div>
                            @error('tgl_lahir')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                              <label for="" class="form-label">Username</label>
                              <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="username" aria-describedby="textHelp" placeholder="Username" value="{{ old ('username',$user->username) }}">
                            </div>
                            @error('username')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                              <label for="" class="form-label">Email</label>
                              <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="textHelp" placeholder="Ex : example@gamil.com" value="{{ old ('email',$user->email) }}">
                            </div>
                            @error('email')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <!-- <div class="form-group">
                              <label for="" class="form-label">Password</label>
                              <input name="password" type="password" class="form-control  @error('password') is-invalid @enderror" id="password" aria-describedby="textHelp" placeholder="Password" value="{{ old ('password',$user->password) }}">
                            </div>
                            @error('password')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror -->
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a name="Cancel" id="" class="btn btn-primary" href="/profil" role="button">Cancel</a>
                        </form>
                    </div> 
                </div>
            </div>
        </div>    
    </div>    
</div>
   

    
@endsection