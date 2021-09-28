@extends('layouts.masterauth')

@section('container')
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="admin/assets/img/mechanic.png" alt="Logo"></div>
								<p class="lead"><b>Login to your account</b></p>
								<br>
							</div>

                            @if(session()->has('success'))
								<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-check-circle"></i> {{ session('success') }}
								</div>
                            @endif
                            @if(session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<i class="fa fa-times-circle"></i> {{ session('loginError') }}
								</div>
                            @endif
							<form class="form-auth-small" action="/login" method="post">
                            @csrf

								<div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control @error('username')is-invalid @enderror" id="username" name="username" placeholder="Username" autofocus required value="{{ old('username') }}">
									<label for="username" class="control-label sr-only">Username</label>
                                    @error('username')
                                    <div class="invalid-feedback mb-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
								</div>
                                
                                <br>
								
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key"></i></span>
									<label for="password" class="control-label sr-only">Password</label>
									<div class="input-group" id="show_hide_password">
										<input type="password" data-toggle="password" class="form-control" id="password" name="password" placeholder="Password" required>
										<div class="input-group-addon">
										<a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
									  	</div>
									</div>
								</div>
								<br>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"> Hubungi admin untuk meminta akses !</i></span>
									<br>
									<br>
									<br>
									<p class="mt-5 mb-3 text-muted text-center">Subagio Teknik &copy; 2017–2021</p>
									{{-- <span class="helper-text"><i class="fa fa-user"> Belum Registrasi ? </i> <a href="/register">Registrasi Sekarang!</a></span> --}}
								</div>

							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Welcome To Subagio Teknik App</h1>
							<p>- hope you enjoy</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->

    @endsection
