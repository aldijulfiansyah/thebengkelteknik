<!doctype html>
<html lang="en">

<head>
	<title>{{ $title }} | BengkelApp</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
	
	<!-- VENDOR CSS -->
	
	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/assets/vendor/linearicons/style.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/main.css') }}">
	<link rel="stylesheet" href="/vendor/ijabocrop/ijaboCropTool.min.css">
	{{-- <link rel="stylesheet" href="/vendor/imgbutton/imgbutton.css"> --}}
	
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/assets/img/favicon.png')}}">
	

	<style>
		.loader {
	
    width: 100%;
    height: 100%;
    position: fixed;
    padding-top: 20%;
    background: #2b333e;
    margin: 0 auto;
    z-index: 99999;
    padding-left: 47%;
}
	</style>
</head>

<body>

	<div class="loader">
		<img src="{{ asset('admin/assets/img/bars.svg') }}" >
	</div>

	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('layouts.includes._navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('layouts.includes._sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			{{--  --}}
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	
   <!-- jQuery -->
	
    <!-- DataTables -->
	<script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>

	
<!-- DataTables -->
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
	<script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{ asset('admin/assets/scripts/klorofil-common.js')}}"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="/vendor/showpass/bootstrap-show-password.min.js"></script>
	<script src="/vendor/showpass/showpass.js"></script>
	<script src="/vendor/ijabocrop/ijaboCropTool.min.js"></script>
	<script src="/vendor/dark/dark.js"></script>
	{{-- <script src="/vendor/imgbutton/imgbutton.js"></script> --}}
	<script>
		$(function(){
			setTimeout(()=>{
				$(".loader").fadeOut(150);
			},300)
		})
	</script>

	@stack('scripts')




</body>

</html>
