<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SDN PAKIS 5 SURABAYA</title>
    <link href="{{ asset('public/admin/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('public/admin/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('public/admin/css/colors/default.css') }}" id="theme" rel="stylesheet">
    <!-- Styles -->
    <!-- <link href="{{ asset('public/css/app.css') }}" rel="stylesheet"> -->
</head>
<body class="fix-header">
      <div class="preloader">
          <svg class="circular" viewBox="25 25 50 50">
              <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
          </svg>
      </div>
      <!-- ============================================================== -->
      <!-- Wrapper -->
      <!-- ============================================================== -->
      <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic"  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" <b class="hidden-xs">Logout</b></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
              <div style="padding: 70px 0 0;background:#2f323e;text-align:center;" >
                  <a class="profile-pic" href="{{url('dashboard')}}"> <img src="{{asset('public/img/admin_512dp.png')}}" alt="user-img" style="width: 125px;height: 125px;" class="img-circle"></a>
                    @if($role == "siswa")
                    @foreach($siswa as $siswa)
                     <p style="color: #fff;font-size: 18px;font-weight: 400;margin-top: 10px;"> {{$siswa->nama}} </p>
                    <p style="color: #cacdd7;font-size: 15px;font-weight: 400;margin-top: -10px;">{{$siswa->nis}} </p>
                    <p style="color: #7ace4c;font-size: 12px;font-weight: 500;margin-top: -5px;">ONLINE </p>
                    @endforeach
                    
                    @else
                  <?php

                    if(Auth::user()->role == "guru") {
                  ?>
                    <p style="color: #fff;font-size: 18px;font-weight: 400;margin-top: 10px;"> <?php echo Auth::user()->name ?> </p>
                    <p style="color: #cacdd7;font-size: 15px;font-weight: 400;margin-top: -10px;"><?php echo Auth::user()->jabatan ?> </p>
                    <p style="color: #7ace4c;font-size: 12px;font-weight: 500;margin-top: -5px;">ONLINE </p>
                  <?php  } else { ?>
                    <p style="color: #fff;font-size: 18px;font-weight: 400;margin-top: 10px;">Admin Panel </p>
                    <p style="color: #cacdd7;font-size: 15px;font-weight: 400;margin-top: -10px;">Admin Bidang Komunikasi </p>
                    <p style="color: #7ace4c;font-size: 12px;font-weight: 500;margin-top: -5px;">ONLINE </p>
                    <?php }  ?>
                    @endif
              </div>
                <ul class="nav" id="side-menu" style="margin-top:50px;">
                 @if($role == "siswa")
                  <li>
                      <a href="{{url('siswa/dashboard')}}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                  </li>
                  <li>
                      <a href="{{url('siswa/buku/baca')}}" class="waves-effect"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Aku Suka Membaca</a>
                  </li>
                 @else
                  <?php

                    if(Auth::user()->role == "guru") {
                  ?>
                  <li>
                      <a href="{{url('guru/dashboard')}}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                  </li>
                  <li>
                      <a href="{{url('guru/0/prota')}}" class="waves-effect"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>Program Tahunan</a>
                  </li>
                  <li>
                      <a href="{{url('guru/0/promes')}}" class="waves-effect"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>Program Semester</a>
                  </li>
                  <li>
                      <a href="{{url('guru/0/silabus')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Silabus</a>
                  </li>
                  <li>
                      <a href="{{url('guru/0/rpp')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>RPP</a>
                  </li>
                  <li>
                      <a href="{{url('guru/0/kd')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Analisis KD</a>
                  </li>
                  <li>
                      <a href="{{url('guru/0/hb')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Analisis Hasil Belajar</a>
                      <ul>
                          <li><a href="{{url('guru/0/nilai/uh')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Nilai UH</a></li>
                          <li><a href="{{url('guru/0/analisis/bd')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Analisis BD</a></li>
                          <li><a href="{{url('guru/0/analisis/uh')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Analisis UH</a></li>
                          <li><a href="{{url('guru/0/analisis/uh2')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Analisis UH2</a></li>
                          <li><a href="{{url('guru/0/analisis/uts')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Analisis UTS</a></li>
                          <li><a href="{{url('guru/0/analisis/uas')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>>Analisis UAS</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="{{url('laporan/belajar')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Laporan Hasil Belajar</a>
                  </li>
                  <li>
                      <a href="{{url('media/belajar/guru')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Media Belajar</a>
                  </li>
                  <li>
                      <a href="{{url('guru/tantangan/membaca')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Tantangan Membaca</a>
                  </li>


                  <?php
                } else if(Auth::user()->role == "siswa") {
                  ?>
                  <h1> Siswa</h1>
                  <?php
                    } else if(Auth::user()->role == "admin"){
                  ?>

                  <li>
                      <a href="{{url('/dashboard')}}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                  </li>
                  <li>
                      <a href="{{url('buku/induk')}}" class="waves-effect"><i class="fa fa-picture-o fa-fw" aria-hidden="true"></i>Buku Induk</a>
                  </li>
                  <li>
                      <a href="{{url('admin/0/galeri')}}" class="waves-effect"><i class="fa fa-picture-o fa-fw" aria-hidden="true"></i>Galeri Sekolah</a>
                  </li>
                  <li>
                      <a href="{{url('guru')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i> Guru</a>
                      <ul class="nav" style="color:#fff">
                          <li style="padding:10px;"><a href="{{url('guru')}}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Input Data Guru</a></li>
                          <li style="padding:10px;"><a href="{{url('admin/data/guru')}}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Data Guru</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Data Siswa</a>
                      <ul class="nav" style="color:#fff">
                              <li style="padding:10px;"><a href="{{url('siswa')}}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Input Data Siswa</a></li>
                              <li style="padding:10px;"><a href="{{url('admin/data/siswa')}}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Data Siswa</a></li>
                          </ul>  
                </li>
                  <li>
                    <hr />
                      <a href="{{url('absen/siswa')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Absen Siswa</a>
                  </li>

                  <li>
                      <a href="{{url('absen/guru')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Absen Guru</a>
                  </li>
                  <hr />

                  <li>
                      <a href="{{url('keuangan')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Keuangan</a>
                  </li>
                  <li>
                      <a href="{{url('inventaris')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Inventaris</a>
                  </li>
                  <li>
                      <a href="{{url('dokumen/kurikulum')}}" class="waves-effect"><i class="fa fa-folder-o fa-fw" aria-hidden="true"></i>Dokumen Kurikulum</a>
                  </li>
                  <hr />

                  <?php
                    }
                    ?>
                    @endif
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="waves-effect"><i class="fa  fa-sign-out fa-fw" aria-hidden="true"></i>Keluar</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <hr />
                </ul>
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
    <footer class="footer text-center"> 2017 &copy; SD Negeri Pakis 5 Surabaya </footer>
    </div>
    </div>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('public/admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('public/admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('public/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('public/admin/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('public/admin/js/waves.js')}}"></script>
    <!--Counter js -->
    <script src="{{ asset('public/admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{ asset('public/admin/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <!-- chartist chart -->
    <script src="{{ asset('public/admin/plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{ asset('public/admin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{ asset('public/admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('public/admin/js/custom.min.js')}}"></script>
    <script src="{{ asset('public/admin/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
</body>
</html>
