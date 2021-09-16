@extends('layouts.master')
@section('content')
@include('sweetalert::alert')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Barang</h3>
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
                                      <th scope="col">Avatar</th>
                                      <th scope="col">Nama</th>
                                      <th scope="col">Tanggal Lahir</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Username</th>
                                      <th scope="col">Role</th>
                                      <th scope="col">Do</th>
                                      <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($data_user as $user)
                                    <tr>
                                        <td></td>
                                        <td scope="row" class="text-center">
                                            @if($user->avatar)
                                            <img src="/storage/{{ $user->avatar }}" style="width:30px;height:30px;" class="img-circle" alt="Avatar">
                                            @else 
                                            <img src="img/profile.png" style="width:30px;height:30px;" class="img-circle" alt="Avatar">
                                            @endif
                                        </td>
                                        <td scope="row">{{ $user->name }}</td>
                                        <td scope="row">{{ $user->tgl_lahir }}</td>
                                        <td scope="row">{{ $user->email }}</td>
                                        <td scope="row">{{ $user->username }}</td>
                                        <td scope="row">{{ $user->role }}</td>
                                        <td scope="row"><a href="/user/{{ $user->id }}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                                        <td>
                                          <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $user->id }}" data-nama="{{ $user->name }}">Delete</a>
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/user/create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" placeholder="Name" autofocus  value="{{ old('name') }}">
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('tgl_lahir') ? 'has-error' : '' }}">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control @error('tgl_lahir')is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" placeholder="Birth Date"  value="{{ old('tgl_lahir') }}">
                    @if($errors->has('tgl_lahir'))
                        <span class="help-block">{{ $errors->first('tgl_lahir') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email" placeholder="Ex : example@gmailcom"  value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username')is-invalid @enderror" id="username" name="username" placeholder="Username"  value="{{ old('username') }}">
                    @if($errors->has('username'))
                        <span class="help-block">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
                    <label for="role" class="form-label">Hak Akses</label>
                    <select class="form-control @error('role')is-invalid @enderror" id="role" name="role" placeholder="Username"  value="{{ old('role') }}">
                        {{-- <option selected>Pilih Hak Akses</option> --}}
                        <option value="Karyawan Admin">Karyawan Admin</option>
                        <option value="Karyawan User">Karyawan User</option>
                    </select>
                    @if($errors->has('role'))
                        <span class="help-block">{{ $errors->first('role') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('avatar') ? 'has-error' : '' }}">
                    <label for="avatar" class="form-label">Avatar</label>
                    <input type="file" class="form-control @error('avatar')is-invalid @enderror" id="avatar" name="avatar" placeholder="Avatar"  value="{{ old('avatar') }}">
                    @if($errors->has('avatar'))
                        <span class="help-block">{{ $errors->first('avatar') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group" id="show_hide_password">
                        <input type="password" data-toggle="password" class="form-control @error('password')is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                        <div class="input-group-addon">
                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                          </div>
                    </div>
                    @if($errors->has('password'))
                            <span class="help-block">{{ $errors->first('password') }}</span>
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

@endsection


@push('scripts')

<script>
//erorr script
@error ('name')
    $('#exampleModal').modal('show');
@enderror
@error ('tgl_lahir')
    $('#exampleModal').modal('show');
@enderror
@error ('email')
    $('#exampleModal').modal('show');
@enderror
@error ('username')
    $('#exampleModal').modal('show');
@enderror
@error ('role')
    $('#exampleModal').modal('show');
@enderror
@error ('avatar')
    $('#exampleModal').modal('show');
@enderror
@error ('password')
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
    var userid = $(this).attr('data-id');
    var usernama = $(this).attr('data-nama');
    
  swal({
  title: "Yakin?",
  text: "Anda akan menghapus data barang dengan nama "+usernama+" ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/user/"+userid+"/delete"
    swal("Data dengan nama "+usernama+" berhasil dihapus", {
      icon: "success",
    });
  } else {
    swal("Data tidak jadi dihapus");
  }
});

});


</script>
@endpush