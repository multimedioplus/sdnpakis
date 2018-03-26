@extends('layouts.admin')

@section('content')
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <h1 style="margin-left:20px;font-weight:300; margin-top:20px;margin-bottom:20px">Galeri Sekolah</h1>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="panel" style="padding:15px;">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Input Gallery
                                    </div>
                                    <div class="panel-body">
                                      <div class="row">
                                          @if ($id === 0)
                                        <form method="post" action="{{url('input/galeri')}}"  enctype="multipart/form-data">
                                          {{ csrf_field() }}
                                        <input type="date" class="form-control form-control-line" name="tanggal" placeholder="Tanggal" required/><br />
                                        <input type="text" class="form-control form-control-line" name="nama" placeholder="Nama Kegiatan" required/><br />
                                        <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Kegiatan" required> Deskripsi Kegiatan </textarea><br />
                                        <label class="btn btn-file btn-default" style="width:100%;margin-bottom:15px;">
                                          Pilih Foto<input name="foto" required style="display: none;" type="file">
                                        </label>
                                        <br />
                                        <input type="submit" class="btn btn-success full-width" value="Upload" />
                                      </form>
                                      @else 
                                      @foreach ($edit as $galeri)
                                      <form method="post" action="{{url('admin/'.$galeri->id.'/galeri')}}"  enctype="multipart/form-data">
                                          {{ csrf_field() }}
                                        <input type="text" class="form-control" placeholder="Tanggal" disabled value="{{$galeri->tanggal}}"/><br />
                                        <input type="hidden" class="form-control form-control-line" name="tanggal" value="{{$galeri->tanggal}}"/>
                                        <input type="text" class="form-control form-control-line" name="nama" placeholder="Nama Kegiatan" value="{{$galeri->nama}}" required/><br />
                                        <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Kegiatan" required> {{$galeri->deskripsi}} </textarea><br />
                                        <label class="btn btn-file btn-default" style="width:100%;margin-bottom:15px;">
                                          Pilih Foto<input name="foto" style="display: none;" type="file">
                                        </label>
                                        <br />
                                        <input type="submit" class="btn btn-success full-width" value="Upload" />
                                      </form>
                                      @endforeach
                                      @endif
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="col-md-12 col-lg-8 col-sm-12">
                    <div class="white-box">
                      <h3 style="margin-top:-10px;" class="box-title">Data Kegiatan</h3><hr />
                      <p>Berikut adalah daftar Data Kegiatan </p>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Tanggal</th>
                            <th width="70%">Nama Kegiatan</th>
                            <th style="text-align:center">Opsi</th>
                          </tr>
                        </thead>
                        <tbody>

                      @foreach ($data as $galeri)
                       <tr>
                            <td>{{ $galeri->tanggal }}</td>
                            <td>{{ $galeri->nama }}</td>
                             <td class="row">
                              <a class="col-md-3" href="{{asset('laravel/public/galeri/'.$galeri->foto)}}">
                                <i class="fa fa-download fa-fw" title="View/Download" aria-hidden="true"></i>
                              </a>
                              <a class="col-md-3" href="{{url('admin/')}}/{{$galeri->id}}/galeri">
                                <i class="fa fa-edit fa-fw" title="Edit" aria-hidden="true"></i>
                              </a>
                              <a class="col-md-3" href="{{url('admin/hapus/'.$galeri->id.'/galeri')}}">
                                <i class="fa fa-times fa-fw" title="delete" aria-hidden="true"></i>
                              </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                        </div>
                      </div>
                      </div>
                      <hr />
                      
                    </div>
                    </div>
                </div>
                    </div>
            <!-- /.container-fluid -->
@endsection
