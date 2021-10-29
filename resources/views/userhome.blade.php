@extends('layouts.master')

@section('content')
<br>

<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    
                    <h1>Welcome User, {{ auth()->user()->name }}
                        @foreach ($data_user as $datas)
                        @if($datas->avatar)
                        <img src="/storage/{{ auth()->user()->avatar }}" style="width:40px;height:40px;" class="img-circle inverted" alt="Avatar"></h1>
                        @else
                        <img src="img/profile.png" style="width:40px;height:40px;" class="img-circle inverted" alt="Avatar"></h1>
                        @endif
                        @endforeach
                    
                    
                    <p class="panel-subtitle">@php
                        $date = date('Y-m-d');
                    @endphp Tanggal : {{ $date }}</p>
                    <br>
                    <h3 class="panel-title">Subagio Teknik Location</h3>
                    <iframe src="https://my.atlistmaps.com/map/d7e0ddec-4b5a-4363-b7a4-535e41ac2697?share=true" allow="geolocation" width="100%" height="600px" frameborder="0" scrolling="no" allowfullscreen></iframe>                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            
                        </div>
                        
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-3">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div id="headline-chart" class="ct-chart"></div>
                        </div>
                        <div class="col-md-3">
                           
                           
                           
                        </div>
                    </div>
                </div>
            </div>
            
@endsection