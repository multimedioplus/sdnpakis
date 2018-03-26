@extends('layouts.admin')

@section('content')
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- chat-listing & recent comments -->
        <!-- ============================================================== -->

        <div class="row" style="margin-top:40px;">
            <!-- .col -->
            @if ($id === 0)
              <div class="col-md-12 col-lg-12 col-sm-12">
                  <div class="white-box">
                    <h2>Tabel Data Program Tahunan</h2>
                      <p>Berikut adalah daftar Program Tahunan,  untuk format Program Tahunan bisa di download <a href="{{asset('/public/data/Format_Program_Tahunan.doc')}}">disini</a></p>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th width="30%">Diedit Oleh</th>
                            <th>Satuan Pendidikan</th>
                            <th>Kelas</th>
                            <th>Tahun Ajaran</th>
                            <th width="10%"><center>Opsi</center><th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $prota)
                          <tr>
                            <td>{{$prota->nama}}</td>
                            <td>SDN Pakis V</td>
                            <td>{{$prota->kelas}}</td>
                            <td>{{$prota->tahun}}</td>
                            <td class="row"><a class="col-md-3" href="{{asset('laravel/public/guru/'.$prota->file)}}"><i class="fa fa-download fa-fw" title="View/Download" aria-hidden="true"></i></a><a class="col-md-3" href="{{url('guru/')}}/{{$prota->id}}/prota"><i class="fa fa-edit fa-fw" title="Edit" aria-hidden="true"></i></a></td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                  </div>
              </div>
                  @else
                  <div class="col-md-12 col-lg-4 col-sm-12">
                      <div class="white-box">
                      <h3>Update Data Program Tahunan</h3>
                  <hr />
                  @foreach ($edit as $edit)
                      <form method="post" action="{{url('guru/')}}/{{$edit->id}}/prota"  enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <input type="text" required class="form-control" name="guru" placeholder="Nama Pendidik" value="{{$edit->nama}}"/><br />
                      <select name="kelas" required class="form-control">
                        <option disabled select> -- Pilih Kelas --</option>
                        <option value="1">Kelas 1</option>
                        <option value="2">Kelas 2</option>
                        <option value="3">Kelas 3</option>
                        <option value="4">Kelas 4</option>
                        <option value="5">Kelas 5</option>
                        <option value="6">Kelas 6</option>
                      </select><br />
                      <input type="text" required class="form-control" name="tahun" placeholder="Tahun Ajaran" value="{{$edit->tahun}}"/><br />
                      <label class="btn btn-file btn-default" style="width:100%;margin-bottom:15px;">
                        Upload File<input name="pdf" style="display: none;" type="file" value="{{$edit->file}}">
                      </label>
                      <!-- <font color="red">* Format file yang di upload harus PDF</font> -->
                      <br />
                      <input class="btn btn-success full-width" value="send" type="submit" />
                        @endforeach
                      </form>
                </div>
              </div>

              <div class="col-md-12 col-lg-8 col-sm-12">
                  <div class="white-box">
                    <h2>Tabel Data Program Tahunan</h2>
                      <p>Berikut adalah daftar Program Tahunan,  untuk format Program Tahunan bisa di download <a href="{{asset('/public/data/Format_Program_Tahunan.doc')}}">disini</a></p>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Satuan Pendidikan</th>
                            <th>Kelas</th>
                            <th>Tahun Ajaran</th>
                            <th>Detail</th>
                            <th>Opsi<th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach ($data as $prota)
                          <tr>
                            <td>{{$prota->nama}}</td>
                            <td>SDN Pakis V</td>
                            <td>{{$prota->kelas}}</td>
                            <td>{{$prota->tahun}}</td>
                            <td class="row"><a class="col-md-3" href="{{asset('laravel/public/guru/'.$prota->file)}}"><i class="fa fa-download fa-fw" title="View/Download" aria-hidden="true"></i></a><a class="col-md-3" href="{{url('guru/')}}/{{$prota->id}}/prota"><i class="fa fa-edit fa-fw" title="Edit" aria-hidden="true"></i></a></td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                  </div>
              </div>
                  @endif
          </div>
      </div>
    <!-- /.container-fluid -->
    @endsection
