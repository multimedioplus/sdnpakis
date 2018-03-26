<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SDN Pakis 5 Surabaya</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

        <link href="{{ asset('public/admin/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- animation CSS -->
        <link href="{{ asset('public/admin/css/animate.css') }}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet">
        <!-- color CSS -->
        <link href="{{ asset('public/admin/css/colors/default.css') }}" id="theme" rel="stylesheet">
        <!-- Styles -->
        <!-- <link href="{{ asset('public/css/app.css') }}" rel="stylesheet"> -->
        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                /*font-family: 'Raleway', sans-serif;*/
                font-weight: 100;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background-image: url('{{asset('public/img/semua.jpg')}}');background-size: cover;background-position-y:-115px;">
        <div class="flex-center position-ref full-height"style="z-index:99">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ url('/data/sekolah') }}">Data Sekolah</a>
                        <a href="{{ url('/data/siswa') }}">Data Siswa</a>
                        <a href="{{ url('/data/guru') }}">Data Guru</a>
                        <a href="{{ url('/data/kegiatan') }}">Galeri Kegiatan</a>
                        <a href="{{ url('/data/about') }}">Tentang SDN Pakis</a>
                        <!-- <a href="{{ url('/register') }}">Register</a> -->
                        <a href="{{ url('/login') }}">Login</a>
                    @endif
                </div>
            @endif


            @yield('content')


        </div>
      </div>
    </body>
</html>
