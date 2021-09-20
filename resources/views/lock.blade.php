@extends('layouts.masterauth')

@section('container')
{{-- @push('scripts')
<script>
    if(isset($_POST['submit'])) {
        $pin = $_POST['pin'];
        if($pin == "12345") {
            return redirect('/');
        }
        return redirect('/login');
    }
</script>
@endpush --}}
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box lockscreen clearfix">
                <div class="content">
                    <h1 class="sr-only">Klorofil - Free Bootstrap dashboard</h1>
                    <div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
                    <div class="user text-center">
                        <img src="/storage/{{ auth()->user()->avatar }}" class="img-circle" alt="Avatar" style="width:100px;height:100px;">
                        <h2 class="name">{{ auth()->user()->name }}</h2>
                        <p class="text-center">{{ auth()->user()->role }}</p>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Enter Admin PIN ..." name="pin" id="pin">
                            <span class="input-group-btn"><button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-arrow-right"></i></button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
@endsection