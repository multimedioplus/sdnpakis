<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
    .zoom {
    padding: 50px;
    transition: transform .4s;
    margin: 0 auto;
}

.zoom:hover {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.1); 
}
    </style>

    <title>SDN PAKIS 5 SURABAYA</title>

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        SDN Pakis 5 Surabaya<!--{{ config('app.name', 'Laravel') }}-->
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{url('/pilih')}}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
            <div class="bg-dark text-white" style="background:#151515 !important; color:#fff; padding:20px;">
          <div class="container">
            <div class="row">
              <div class="p-4 col-md-3">
                <h2 class="mb-4 text-light">SDN PAKIS V</h2>
                <p class="text-white">Sekolah yang menjunjung tinggi tata krama dan nilai - nilai sosial</p>
              </div>
              <div class="p-4 col-md-3">
                <h2 class="mb-4 text-light">List</h2>
                <ul class="list-unstyled">
                  <a href="#" class="text-white">Home</a>
                  <br>
                  <a href="#" class="text-white">About us</a>
                  <br>
                  <a href="{{url('register')}}" class="text-white">Daftar Siswa</a>
                  <br>
                  <a href="{{ url('/register') }}" class="text-white">Daftar Guru</a>
                </ul>
              </div>
              <div class="p-4 col-md-3">
                <h2 class="mb-4 text-light">Contact</h2>
                <p class="text-primary">
                  <a href="tel:+246 - 542 550 5462" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-phone"></i> (031) 5665149</a>
                </p>
                <p class="text-primary">
                  <a href="mailto:info@pingendo.com" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i> sdnpakis5@yahoo.co.id</a>
                </p>
                <p>
                  <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank"><i class="fa d-inline mr-3 fa-map-marker text-secondary"></i> Jl. Pakis Sidokumpul No.55, Pakis, Kec. Sawahan, Kota SBY, Jawa Timur 60256</a>
                </p>
              </div>
              <div class="p-4 col-md-3">
                <h2 class="mb-4 text-light">Subscribe</h2>
                <form>
                  <fieldset class="form-group text-white"> <label for="exampleInputEmail1">Get our newsletter</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> </fieldset>
                  <button type="submit" class="btn btn-outline-light">Submit</button>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mt-3">
                <p class="text-center text-white">© Copyright 2017 Multimedio - All rights reserved. </p>
              </div>
            </div>
          </div>
        </div>
    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
</body>
</html>
