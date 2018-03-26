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
            <div class="col-md-12 col-lg-4 col-sm-12">
                <div class="white-box">
                  <h2>Data RPP</h2>
                  <hr />
                  @if ($id === 0)
                  <form method="post" action="{{url('guru/rpp')}}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" required class="form-control" name="materi" placeholder="Materi Pokok"/><br />
                    <select name="kelas" required class="form-control">
                      <option disabled select> -- Pilih Kelas --</option>
                      <option value="1">Kelas 1</option>
                      <option value="2">Kelas 2</option>
                      <option value="3">Kelas 3</option>
                      <option value="4">Kelas 4</option>
                      <option value="5">Kelas 5</option>
                      <option value="6">Kelas 6</option>
                    </select><br />
                    
                    <input type="text" required class="form-control" disabled value="{{auth::user()->name}}"/><br />
                    <input type="hidden" required class="form-control" name="guru" value="{{auth::user()->name}}"/>
                    <input type="text" required class="form-control" name="tahun" placeholder="Tahun Ajaran"/><br />
                    <label class="btn btn-file btn-default" style="width:100%;margin-bottom:15px;">
                      Upload File<input name="pdf" required style="display: none;" type="file">
                    </label>
                    <!-- <font color="red">* Format file yang di upload harus PDF</font> -->
                    <br />
                    <input class="btn btn-success full-width" value="send" type="submit" />
                    </form>
                    @else
                    @foreach ($edit as $edit)
                    <form method="post" action="{{url('guru/')}}/{{$edit->id}}/rpp"  enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <input type="text" required class="form-control" name="judul" placeholder="Materi Pokok" value="{{$edit->muatan}}"/><br />
                      <select name="kelas" required class="form-control">
                        <option disabled select> -- Pilih Kelas --</option>
                        <option value="1">Kelas 1</option>
                        <option value="2">Kelas 2</option>
                        <option value="3">Kelas 3</option>
                        <option value="4">Kelas 4</option>
                        <option value="5">Kelas 5</option>
                        <option value="6">Kelas 6</option>
                      </select><br />
                      <input type="text" required class="form-control" disabled placeholder="Guru" value="{{$edit->nama}}"/><br />
                      <input type="hidden" required class="form-control" name="guru" placeholder="Guru" value="{{$edit->nama}}"/>
                      <input type="text" required class="form-control" name="tahun" placeholder="Tahun Ajaran" value="{{$edit->tahun}}"/><br />
                      <label class="btn btn-file btn-default" style="width:100%;margin-bottom:15px;">
                        Upload File<input name="pdf" style="display: none;" type="file">
                      </label>
                      <!-- <font color="red">* Format file yang di upload harus PDF</font> -->
                      <br />
                      <input class="btn btn-success full-width" value="send" type="submit" />
                      </form>
                    @endforeach
                    @endif
                      <br />
                </div>
              </div>

              <div class="col-md-12 col-lg-8 col-sm-12">
                  <div class="white-box">
                    <h2>Tabel Data RPP</h2>
                      <p>Berikut adalah daftar Data RPP, untuk format RPP bisa di download <a href="{{asset('/public/data/Format_RPP.docx')}}">disini</a> </p>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th width="30%">Materi Pokok</th>
                            <th>Satuan Pendidikan</th>
                            <th>Kelas</th>
                            <th>Tahun Ajaran</th>
                            <th>Opsi<th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $rpp)
                          <tr>
                            <td>{{$rpp->muatan}}</td>
                            <td>SDN Pakis V</td>
                            <td>{{$rpp->kelas}}</td>
                            <td>{{$rpp->tahun}}</td>
                            <td class="row">
                              <a class="col-md-3" href="{{asset('laravel/public/guru/'.$rpp->file)}}">
                                <i class="fa fa-download fa-fw" title="View/Download" aria-hidden="true"></i>
                              </a>
                              <a class="col-md-3" href="{{url('guru/')}}/{{$rpp->id}}/rpp">
                                <i class="fa fa-edit fa-fw" title="Edit" aria-hidden="true"></i>
                              </a>
                              <a class="col-md-3" href="{{url('guru/delete/')}}/{{$rpp->id}}/rpp">
                                <i class="fa fa-times fa-fw" title="delete" aria-hidden="true"></i>
                              </a>
                            </td>
                          </tr>
                          <tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
    <!-- /.container-fluid -->
    @endsection
