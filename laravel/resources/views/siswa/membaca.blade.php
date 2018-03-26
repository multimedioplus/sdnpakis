@extends('layouts.admin')

@section('content')
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <h1 style="margin-left:15px; margin-top:20px;margin-bottom:20px; text-align:center;">Aku Suka Membaca</h1>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    @if($role == "siswa")
                    <div class="col-lg-4 col-md-6 col-sm-12">  
                    @else 
                    <div class="col-lg-4 col-md-6 col-sm-12">  </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                    @endif
                        <div class="panel" style="padding:15px;">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Sudah Membaca
                                    </div>
                                    <div class="panel-body">
                                      <div class="row">
                                        @if($role == "siswa")
                                        <form method="post" action="{{url('siswa/tantangan/baca')}}"  enctype="multipart/form-data">
                                        @else
                                        <form method="post" action="{{url('guru/tantangan/baca')}}"  enctype="multipart/form-data">
                                        @endif
                                          {{ csrf_field() }}
                                        <input type="date" required class="form-control form-control-line" name="tanggal"   placeholder="Tanggal Baca">     <br>
                                        <input type="text" required class="form-control form-control-line" name="judul"     placeholder="Judul Buku" />     <br />
                                        <input type="text" required class="form-control form-control-line" name="pengarang" placeholder="Nama Pengarang" /> <br />
                                        <input type="text" required class="form-control form-control-line" name="penerbit"  placeholder="Nama Penerbit" />  <br />
                                        @if($role == "siswa")
                                        @foreach($siswa as $sis)
                                        <input type="hidden" value="{{$sis->nis}}" name="nis"><br />
                                        @endforeach
                                        @else 
                                        <input type="text" required class="form-control form-control-line" name="nis" placeholder="NIS Siswa">
                                        <input type="hidden" required value="{{Auth::user()->name}}" name="guru"><br />
                                        @endif
                                        @if($role == "siswa")
                                         <textarea name="tokoh" required class="form-control" placeholder="Tokoh dan Watak"> Tokoh dan Watak</textarea><br />
                                        <textarea name="rangkuman" required class="form-control" placeholder="rangkuman"> Rangkuman</textarea><br />
                                        <textarea name="saran" required class="form-control" placeholder="Tokoh dan Watak"> Saran</textarea><br />
                                        <label class="btn btn-file btn-default" style="width:100%;margin-bottom:15px;">
                                          Pilih Foto<input name="foto" required style="display: none;" type="file">
                                        </label>
                                        <br />
                                        @else
                                       
                                        @endif
                                        <input type="submit" class="btn btn-success full-width" value="Upload" />
                                      </form>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                @if($role == "siswa")
                <div class="col-md-12 col-lg-8 col-sm-12">
                    <div class="white-box">
                      <div class="row">
                          <div class="col-md-10" style="font-size:17px;">
                               @if($role == "siswa")
                               @foreach ($siswa as $data)
                              <div class="row" style="margin:5px 0px;"><div class="col-md-1">Nama</div><div class="col-md-11">: <b>{{$data->nama}}</b></div></div>
                              <div class="row" style="margin:5px 0px"><div class="col-md-1">NIS</div><div class="col-md-11">: <b>{{$data->nis}}</b></div></div>
                              <div class="row" style="margin:5px 0px"><div class="col-md-1">Kelas</div><div class="col-md-11">: <b>{{$data->kelas}}</b> </div></div>
                              @endforeach
                              @endif
                          </div>
                          <div class="col-md-2">
                            <img src="{{asset('laravel/public/siswa/star.png')}}" width="87px">
                            <div style="z-index:999;position: absolute;top: 40%;font-weight: 500;color:#fff;left: 40%;font-size: 20px;">{{$hitung}}</div>
                          </div>
                        </div><hr>
                      <h4 align="center">Sudah Baca Buku</h4>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Tanggal</th>
                            <th width="40%">Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th><center>Opsi</center><th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($buku as $buku)
                            <tr>
                                <td>
                                    @if($buku->guru != '')
                                    <font color=="green">{{$buku->tanggal}}</font>
                                    @else 
                                    {{$buku->tanggal}}
                                    @endif
                                    </td>
                                <td>{{$buku->judul}} </td>
                                <td>{{$buku->pengarang}}</td>
                                <td>{{$buku->penerbit}}</td>
                                <td class="row"><center><a href="{{url('/siswa/buku/')}}/{{$buku->id}}/hapus"><i class="fa fa-times fa-fw" title="Delete" aria-hidden="true"></i></a>  <a href="#"><i class="fa fa-edit fa-fw" title="view" aria-hidden="true"></i></a></center></td>
                            </tr>
                            @endforeach
                         </tbody>
                        </table>
                    </div>
                </div>                         
                @else
               
                @endif
                    </div>
            <!-- /.container-fluid -->
@endsection
