@extends('layouts.master')

@section('content')
@include('sweetalert::alert')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
										<h3 class="name">{{ auth()->user()->name }}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											<li>Birthdate <span>{{ auth()->user()->tgl_lahir }}</span></li>
											<li>Username <span>{{ auth()->user()->username }}</span></li>
											<li>Email <span>{{ auth()->user()->email }}</span></li>
											<li>Created At <span>{{ auth()->user()->created_at }}</span></li>
										</ul>
									</div>
									<div class="profile-info">
										<h4 class="heading">Social</h4>
										<ul class="list-inline social-icons">
											<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
										</ul>
									</div>
									<div class="profile-info">
										<h4 class="heading">About</h4>
										<p>Interactively fashion excellent information after distinctive outsourcing.</p>
									</div>
									<!-- @foreach ($data_user as $user)
									<div class="text-center"><a href="/profil/{{ $user->id }}/edit" class="btn btn-primary">Edit Profile</a></div>
									@endforeach -->
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<h4 class="heading"><b>Profile User</b></h4>
								<!-- AWARDS -->
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
								<button type="submit" class="btn btn-primary">Update Profile</button>
								<br>
								<br>
							</form>
								<!-- END AWARDS -->
								<!-- TABBED CONTENT -->
								<h4 class="heading"><b>User Security</b></h4>
								<form action="/profil/{{ $user->id }}/update-pass" method="POST">
								@csrf
									<div class="form-group">
									<label for="" class="form-label">Old Password</label>
									<input name="old_password" type="text" class="form-control @error('old_password') is-invalid @enderror"  name="old_password" id="old_password" aria-describedby="textHelp" placeholder="Isi password lama">
									</div>
									@error('old_password')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
									<div class="form-group">
									<label for="" class="form-label">New Password</label>
									<input name="new_password" type="text" class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="new_password" aria-describedby="textHelp" placeholder="Isi password baru">
									</div>
									@error('new_password')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
									<div class="form-group">
									<label for="" class="form-label">Confirm Password</label>
									<input name="confirm_pass" type="text" class="form-control @error('confirm_pass') is-invalid @enderror" name="confirm_pass" id="confirm_pass" aria-describedby="textHelp" placeholder="konfirmasi password">
									</div>
									@error('confirm_pass')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
									
								<button type="submit" class="btn btn-primary">Change Password</button>
							</form>
							<br>
							@if(session()->has('success'))
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								{{ session('success') }}
							</div>
							@endif
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>


@endsection