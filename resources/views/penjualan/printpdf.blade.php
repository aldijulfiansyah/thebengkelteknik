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

<body onload="window.print();">

	<div class="loader">
		<img src="{{ asset('admin/assets/img/bars.svg') }}" >
	</div>

	<!-- WRAPPER -->
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





<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="invoice-title" style="margin-top: 70px;">
                                        <img src="{{ asset('admin/assets/img/stt.png')}}" class="logo">                       
                                    </div>
                                </div>
                                <div class="col-xs-6 text-right" style="margin-top: 40px;">
                                    <address>
                                        <strong>CV SUBAGIO TEKNIK</strong><br><br>
                                        Jl. Cigondewah Kaler No.28<br>
                                        Kec. Bandung Kulon, Kabupate Bandung<br>
                                        Bandung<br>
                                        Telp: 08900000000
                                    </address>
                                </div>
                            </div>        
                            <div class="row">
                                <hr>
                                <div class="text-center">
                                    <h3><strong>INVOICE</strong></h3>                                
                                </div>                                           
                                <div class="col-xs-6">
                                    <address>
                                        Kepada Yth.<br>
                                        <strong>{{ $data_penjualan->barang->perusahaan->nama_pt }}</strong><br>
                                        {{ $data_penjualan->barang->perusahaan->alamat }}<br>
                                        {{ $data_penjualan->barang->perusahaan->kota }}<br>
                                        No Telp : {{ $data_penjualan->barang->perusahaan->no_telp }}<br>
                                        Email   : {{ $data_penjualan->barang->perusahaan->email }}<br>
                                    </address>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <address>
                                        No Invoice  : {{ $data_penjualan->full_number }}<br>
                                        Tanggal     : {{ $data_penjualan->tanggal }}<br>
                                        Agent : {{ $data_penjualan->barang->customer->nama_agent }}
                                    </address>
                                </div>                              
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-tittle"><strong>Order</strong></h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <td class="text-center"><strong>No</strong></td>
                                                            <td class="text-center"><strong>Nama Barang</strong></td>
                                                            <td class="text-center"><strong>Jumlah</strong></td>
                                                            <td class="text-center"><strong>Harga Barang</strong></td>
                                                            <td class="text-center"><strong>Total</strong></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">{{ $data_penjualan->barang->nama_barang}}</td>
                                                            <td class="text-center">{{ $data_penjualan->jumlah }}</td>
                                                            <td class="text-center">RP {{ number_format($data_penjualan->barang->harga)}}</td>
                                                            <td class="text-center">RP {{ number_format($data_penjualan->barang->harga*$data_penjualan->jumlah)  }}</td>
                                                        </tr>
                                                        

                                                        <tr>
                                                            <td class="thick-line"></td>
                                                            <td class="thick-line"></td>
                                                            <td class="thick-line"></td>
                                                            <td class="thick-line "></td>
                                                            <td class="thick-line "></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</html>
