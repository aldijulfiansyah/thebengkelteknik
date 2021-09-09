@extends('layouts.masterauth')

@section('container')

<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="admin/assets/img/mechanic.png" alt="Logo"></div>
								<p class="lead">Registration Form</p>
							</div>
							<form class="form-auth-small" action="/register" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
									<label for="name" class="control-label sr-only">Name</label>
									<input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" placeholder="Name" autofocus  value="{{ old('name') }}">
								</div>
                                @error('name')
                                <div class="invalid-feedback mb-2">
                                    <p class="text-danger text-left">{{ $message }}</p>
                                </div>
                                @enderror
								<div class="form-group">
									<label for="tgl_lahir" class="control-label sr-only">Tanggal Lahir</label>
									<input type="date" class="form-control @error('tgl_lahir')is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" placeholder="Birth Date"  value="{{ old('tgl_lahir') }}">
								</div>
								@error('tgl_lahir')
                                <div class="invalid-feedback mb-2">
                                    <p class="text-danger text-left">{{ $message }}</p>
                                </div>
                                @enderror
								<div class="form-group">
									<label for="email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email" placeholder="Ex : example@gmailcom"  value="{{ old('email') }}">
								</div>
                                @error('email')
                                <div class="invalid-feedback mb-2">
                                    <p class="text-danger text-left">{{ $message }}</p>
                                </div>
                                @enderror
                                <div class="form-group">
									<label for="username" class="control-label sr-only">Username</label>
									<input type="text" class="form-control @error('username')is-invalid @enderror" id="username" name="username" placeholder="Username"  value="{{ old('username') }}">
								</div>
                                @error('username')
                                <div class="invalid-feedback mb-2">
                                    <p class="text-danger text-left">{{ $message }}</p>
                                </div>
                                @enderror
								<div class="form-group">
									<label for="avatar" class="control-label sr-only">Avatar</label>
									<input type="file" class="form-control @error('avatar')is-invalid @enderror" id="avatar" name="avatar" placeholder="Avatar"  value="{{ old('avatar') }}">
								</div>
                                @error('avatar')
                                <div class="invalid-feedback mb-2">
                                    <p class="text-danger text-left">{{ $message }}</p>
                                </div>
                                @enderror
								<div class="form-group">
									<label for="password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control @error('password')is-invalid @enderror" id="password" name="password" placeholder="Password" >
								</div>
                                @error('password')
                                <div class="invalid-feedback mb-2">
                                    <p class="text-danger text-left">{{ $message }}</p>
                                </div>
                                @enderror
								
    
								<button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
								
                                <div class="bottom">
									<span class="helper-text"><i class="fa fa-paper-plane-o"> Sudah Registrasi </i> <a href="/login">Login !</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Free Bootstrap dashboard template</h1>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>

@endsection