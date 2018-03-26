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
                    <h2>Tabel Data Analisis UH 2</h2>
                      <p>Berikut adalah daftar Analisis UH 2,  untuk Analisis UH 2 bisa di download <a href="{{asset('/public/data/Analisisuh2.xlsx')}}">disini</a></p>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                              <th>Update Terakhir</th>
                            <th width="30%">Diedit Oleh</th>
                            <th>Satuan Pendidikan</th>
                            <th>Kelas</th>
                            <th>Tahun Ajaran</th>
                            <th width="10%"><center>Opsi</center><th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $Analisisuh2)
                          <tr>
                            <td>{{$Analisisuh2->updated_at}}</td>
                            <td>{{$Analisisuh2->oleh}}</td>
                            <td>SDN Pakis V</td>
                            <td>{{$Analisisuh2->kelas}}</td>
                            <td>{{$Analisisuh2->tahun}}</td>
                            <td class="row"><a class="col-md-3" href="{{asset('laravel/public/guru/Analisisuh2/'.$Analisisuh2->file)}}"><i class="fa fa-download fa-fw" title="View/Download" aria-hidden="true"></i></a><a class="col-md-3" href="{{url('guru/')}}/{{$Analisisuh2->kelas}}/analisis/uh2"><i class="fa fa-edit fa-fw" title="Edit" aria-hidden="true"></i></a></td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                  </div>
              </div>
                  @else
                  <div class="col-md-12 col-lg-4 col-sm-12">
                      <div class="white-box">
                      <h3>Update Data Analisis UH 2</h3>
                  <hr />
                  @foreach ($edit as $edit)
                      <form method="post" action="{{url('guru/')}}/{{$edit->kelas}}/analisis/uh2"  enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <input type="text" disabled required class="form-control" value="{{Auth::user()->name}}"/>
                      <input type="hidden" required class="form-control" name="guru" placeholder="Nama Pendidik" value="{{Auth::user()->name}}"/><br />
                      <input type="hidden" required class="form-control" name="kelas" value="{{$edit->kelas}}"/>
                      <input type="hidden" required class="form-control" name="date" value="{{$edit->updated_at}}"/>
                      <input type="text" required class="form-control" disabled value="Kelas {{$edit->kelas}}"/><br />
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
                    <h2>Tabel Data Analisis UH 2</h2>
                      <p>Berikut adalah daftar Analisis UH 2,  untuk format Analisis UH 2 bisa di download <a href="{{asset('/public/data/Analisisuh2.xlsx')}}">disini</a></p>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Update Terakhir</th>
                            <th>Update Oleh</th>
                            <th>Satuan Pendidikan</th>
                            <th>Kelas</th>
                            <th>Tahun Ajaran</th>
                            <th>Opsi<th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach ($data as $Analisisuh2)
                          <tr>
                            <td>{{$Analisisuh2->updated_at}}</td>
                            <td>{{$Analisisuh2->oleh}}</td>
                            <td>SDN Pakis V</td>
                            <td>{{$Analisisuh2->kelas}}</td>
                            <td>{{$Analisisuh2->tahun}}</td>
                            <td class="row"><a class="col-md-3" href="{{asset('laravel/public/guru/Analisisuh2/'.$Analisisuh2->file)}}"><i class="fa fa-download fa-fw" title="View/Download" aria-hidden="true"></i></a><a class="col-md-3" href="{{url('guru/')}}/{{$Analisisuh2->kelas}}/analisis/uh2"><i class="fa fa-edit fa-fw" title="Edit" aria-hidden="true"></i></a></td>
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
