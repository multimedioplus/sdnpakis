<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('public/css/theme.css')}}" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <title>SDN Pakis V Surabaya</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
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
    <body style="background-image: url('{{asset('public/img/semuatanpaanak.jpg')}}');background-size: cover;background-position-y:-150px;">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links full-width">
                    @if (Auth::check())
                        <a href="{{ url('/') }}">Beranda</a>
                        <a href="{{ url('/') }}">Profile</a>
                        <a href="{{ url('/') }}">Literasi</a>
                        <a href="{{ url('/') }}">Media Belajar</a>
                        <a href="{{ url('/') }}">Laporan Hasil Belajar</a>
                        <a href="{{ url('/') }}">Bank Soal</a>
                        <a href="{{ url('/dashboard') }}">Administrasi</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <a href="{{ url('/') }}">Beranda</a>
                        <a href="{{ url('/') }}">Profile</a>
                        <a href="{{ url('/') }}">Literasi</a>
                        <a href="{{ url('/') }}">Media Belajar</a>
                        <a href="{{ url('/') }}">Laporan Hasil Belajar</a>
                        <a href="{{ url('/') }}">Bank Soal</a>
                        <a href="{{url('/pilih')}}">Login</a>
                    @endif
                </div>
            @endif
              <div class="row" style="position:absolute; top:400px;left:120px;width:80%;z-index: 1;">
                <div class="col-md-6">
                  <img src="{{asset('public/img/boys.gif')}}" width="50%" style="position:absolute; right:20px;" />
                </div>
                <div class="col-md-6">
                  <img src="{{asset('public/img/girls.gif')}}" width="48%"  style="position:absolute; left:40px;-webkit-transform: scaleX(-1);transform: scaleX(-1);"/>
                </div>
              </div>
            </div>
        </div>
        <div class="" style="margin-top:180px;color:#FFF;background:url('{{asset('public/img/back1.jpg')}}')">
          <div class="container">
            <div class="row">
              <div class="col-md-3 align-self-center text-center p-4"> <i class="d-block  fa fa-5x fa-bank "></i>
                <h3 class="my-2">Perpustakaan</h3>
                <p class="">Kumpulan informasi yang bersifat ilmu pengetahuan, buku - buku, hiburan, rekreasi, dan ibadah</p>
              </div>
              <div class="col-md-3 align-self-center text-center p-4"> <i class="d-block  fa fa-5x fa-flask"></i>
                <h3 class="my-2">Laboratorium</h3>
                <p class="text-center">laboratorium fisika, laboratorium kimia, laboratorium biokimia, laboratorium komputer,&nbsp;</p>
              </div>
              <div class="col-md-3 align-self-center text-center p-4"> <i class="d-block  fa fa-5x fa-heart"></i>
                <h3 class="my-2">Olahraga</h3>
                <p class="">Aktivitas untuk melatih tubuh siswa, guuru dan staff tidak hanya secara jasmani tetapi juga secara rohani</p>
              </div>
              <div class="col-md-3 align-self-center text-center p-4"> <i class="d-block  fa fa-5x fa-home"></i>
                <h3 class="my-2">Kantin</h3>
                <p class="">Dapat digunakan pengunjung untuk makan, baik makanan yang dibawa sendiri maupun yang dibeli</p>
              </div>
            </div>
          </div>
        </div>
        <div class="py-5 bg-light">
          <div class="container">
            <div class="row text-center">
              <div class="col-md-12">
                <h1 class="mb-4 text-primary">FASILITAS SEKOLAH</h1>
                <p class="lead">Fasilitas yang tersedia di SDN Pakis V Surabaya diantaranya :&nbsp;</p>
                <div class="row text-left mt-5">
                  <div class="col-md-4 my-3">
                    <div class="row mb-3">
                      <div class="text-center col-2"><i class="d-block mx-auto fa fa-3x fa-bullhorn"></i></div>
                      <div class="align-self-center col-10">
                        <h5 class="text-secondary"><b>Media Sosial</b></h5>
                        <p>Melalui website sekolah, seluruh member dapat berinteraksi secara online.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 my-3">
                    <div class="row mb-3">
                      <div class="text-center col-2"><i style="font-size: 20px;" class="d-block mx-auto fa fa-3x fa-globe"></i></div>
                      <div class="align-self-center col-10">
                        <h5 class="text-secondary"><b>Jaringan Internet</b></h5>
                        <p>Layanan jaringan online yang dapat dinikmati di seluruh wilayah sekolah.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 my-3">
                    <div class="row mb-3">
                      <div class="text-center col-2"><i style="font-size: 20px;" class="d-block mx-auto fa fa-3x fa-building"></i></div>
                      <div class="align-self-center col-10">
                        <h5 class="text-secondary">&nbsp;Perpustakaan</h5>
                        <p>Proses pinjam meminjam buku pelajaran dan ilmu pengetahuan secara online.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 my-3">
                    <div class="row mb-3">
                      <div class="text-center col-2"><i style="font-size: 20px;" class="d-block mx-auto fa fa-3x fa-desktop"></i></div>
                      <div class="align-self-center col-10">
                        <h5 class="text-secondary">Laboratorium Komputer</h5>
                        <p>Fasilitas pembelajaran serta sarana pelatihan online yang tersedia dalam laboratorium.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 my-3">
                    <div class="row mb-3">
                      <div class="text-center col-2"><i style="font-size: 20px;" class="d-block mx-auto fa fa-3x fa-graduation-cap"></i></div>
                      <div class="align-self-center col-10">
                        <h5 class="text-secondary">&nbsp;e-Learning</h5>
                        <p>Belajar secara online dimanapun dan kapanpun tanpa dibatasi ruang dan waktu.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 my-3">
                    <div class="row mb-3">
                      <div class="text-center col-2"><i class="d-block mx-auto fa fa-3x fa-laptop"></i></div>
                      <div class="align-self-center col-10">
                        <h5 class="text-secondary"><b>Sistem Informasi Sekolah</b></h5>
                        <p>Informasi kegiatan pembelajaran, absensi, jadwal belajar serta perkembangan siswa.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="py-5 text-center opaque-overlay bg-primary text-white" style="background:url('{{asset('public/img/backdrop.jpg')}}')">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="">Peserta Didik, Guru, dan Staff</h1>
                <p class="">Sekolah kami terdiri dari 731 siswa, 28 guru, 3 staff TU serta lebih dari 5 sarana pendukung pembelajaran.</p>
              </div>
            </div>
            <div class="row">
              <div class="p-4 col-md-3">
                <h2 class="my-3">Total Siswa</h2>
                <h1>731
                  <br>
                </h1>
              </div>
              <div class="col-md-3 p-4">
                <h2 class="my-3">Guru</h2>
                <h1>28</h1>
              </div>
              <div class="col-md-3 p-4">
                <h2 class="my-3">Staff TU</h2>
                <h1>3</h1>
              </div>
              <div class="col-md-3 p-4">
                <h2 class="my-3">Sarana</h2>
                <h1>20</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="py-5 bg-light text-dark">
          <div class="container">
            <div class="row">
              <div class="align-self-center p-5 col-md-6">
                <h1 class="mb-4">Galeri Kegiatan Sekolah</h1>
                <p class="mb-5">Untuk menunjang kretifitas siswa baik akademik maupun non akademik kami melakukan berbagai kegiatan guna meningkatkan kualitas pendidikan siswa.&nbsp;</p>
                <a class="btn btn-lg btn-outline-light" href="#">View the gallery</a>
              </div>
              <div class="col-md-6 p-0">
                <div id="carousel1" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                      
                      <div class="carousel-item active">
                      <img src="{{asset('laravel/public/galeri/sdn-pakis-5c.jpg')}}" style="height:350px" atl="first slide" class="d-block img-fluid w-100">
                      <div class="carousel-caption">
                        <!-- <h3>Dining room</h3>
                        <p>Good architecture, better food</p> -->
                      </div>
                    </div>
                    
                    @foreach ($galeri as $foto)
                    <div class="carousel-item">
                      <img src="{{asset('laravel/public/galeri/'.$foto->foto)}}" style="height:350px" atl="first slide" class="d-block img-fluid w-100">
                      <div class="carousel-caption">
                        <!-- <h3>Dining room</h3>
                        <p>Good architecture, better food</p> -->
                      </div>
                    </div>
                    @endforeach
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                  <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-dark text-white">
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
                  <a href="tel:+246 - 542 550 5462" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-phone"></i>(031) 5665149</a>
                </p>
                <p class="text-primary">
                  <a href="mailto:info@pingendo.com" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>sdnpakis5@yahoo.co.id</a>
                </p>
                <p>
                  <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank"><i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>Jl. Pakis Sidokumpul No.55, Pakis, Kec. Sawahan, Kota SBY, Jawa Timur 60256</a>
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
                <p class="text-center text-white">© Copyright 2017 Pingendo - All rights reserved. </p>
              </div>
            </div>
          </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
