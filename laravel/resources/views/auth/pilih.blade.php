@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin:80px;">
        <a href="{{url('login/Admin')}}">
            <div class="zoom col-md-4 ">
             <div class="panel panel-default">
                    <div class="panel-body" >
                    <center><img src="{{asset('/public/img/pro-admin.png')}}" width="45%"></center>
                    <div class="panel-heading" style="text-align:center;">Login Admin</div>
                     </div>
                </div>
            </div>
        </a>
        
        <a href="login/Siswa">
             <div class="zoom col-md-4 ">
             <div class="panel panel-default">
                    <div class="panel-body" >
                    <center><img src="{{asset('/public/img/Girl.png')}}" width="45%"></center>
                    <div class="panel-heading" style="text-align:center;">Login Siswa</div>
                 </div>
            </div>
        </div>
        </a>
        
        <a href="login/Guru">
            <div class="zoom col-md-4 ">
             <div class="panel panel-default">
                    <div class="panel-body" >
                    <center><img src="{{asset('/public/img/guru.jpg')}}" width="60%"></center>
                    <div class="panel-heading" style="text-align:center;">Login Guru</div>
                     </div>
                </div>
            </div>
        </a>
    </div>
    </div>
@endsection
