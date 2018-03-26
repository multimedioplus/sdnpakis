@extends('layouts.admin')

@section('content')
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <h1 style="margin-left:20px;font-weight:300; margin-top:20px;margin-bottom:20px">DATA SEKOLAH</h1>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-8 col-sm-12">
                        <div class="white-box">
                          <h3 style="margin-top:-10px;">Data Umum</h3><hr />
                          <div class="row">
                            <div class="col-md-12">
                              <form method="post" action="{{url('input/sekolah/data')}}"  enctype="multipart/form-data">
                                {{ csrf_field() }}
                              <input type="text" class="form-control form-control-line" name="nama" placeholder="SD Negeri Pakis 5 Surabaya" disabled="disable" style="padding-left:10px;"/><br />
                              <input type="text" class="form-control form-control-line" name="kapsek" placeholder="Kepala Sekolah"/><br />
                              <input type="text" class="form-control form-control-line" name="alamat" placeholder="Alamat Sekolah"/><br />
                              <input type="text" class="form-control form-control-line" name="hp" placeholder="Contact Sekolah"/><br />
                              <input type="text" class="form-control form-control-line" name="email" placeholder="Email Sekolah"/><br />
                              <textarea class="form-control form-control-line" row="10" name="deskripsi" placeholder="Deskripsi Sekolah" style="height:150px;"></textarea><br />
                              <input class="btn btn-success full-width" value="Send" type="submit" />
                            </form>
                            </div>
                          </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="panel">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Detail Sekolah
                                    </div>
                                        <div class="panel-body">
                                          <div class="row" style="margin-bottom:10px;">
                                              <div class="col-md-1">
                                                <i class="fa fa-user"></i>
                                              </div>
                                              <div class="col-md-6" style="padding-right: 0px;font-size:15px;">
                                                  Total Guru
                                              </div>
                                              <div class="col-md-1">
                                                :
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" name="guru" class="form-control form-control-line" style="width:100%; font-size:15px;margin-top:-10px;">
                                              </div>
                                        </div>

                                        <div class="row" style="margin-bottom:10px;">
                                            <div class="col-md-1">
                                              <i class="fa fa-user"></i>
                                            </div>
                                            <div class="col-md-6" style="padding-right: 0px;font-size:15px;">
                                                Siswa Laki
                                            </div>
                                            <div class="col-md-1">
                                              :
                                            </div>
                                            <div class="col-md-3">
                                              <input type="text" name="siswaLaki" class="form-control form-control-line" style="width:100%; font-size:15px;margin-top:-10px;">
                                            </div>
                                      </div>

                                      <div class="row" style="margin-bottom:10px;">
                                        <div class="col-md-1">
                                          <i class="fa fa-user"></i>
                                        </div>
                                        <div class="col-md-6" style="padding-right: 0px;font-size:15px;">
                                            Siswa Perempuan
                                        </div>
                                        <div class="col-md-1">
                                          :
                                        </div>
                                        <div class="col-md-3">
                                          <input type="text" name="siswaPerempuan" class="form-control form-control-line" style="width:100%; font-size:15px;margin-top:-10px;">
                                        </div>
                                  </div>

                                                    <div class="row" style="margin-bottom:10px;">
                                                        <div class="col-md-1">
                                                          <i class="fa fa-user"></i>
                                                        </div>
                                                        <div class="col-md-6" style="padding-right: 0px;font-size:15px;">
                                                            Jumlah Staff
                                                        </div>
                                                        <div class="col-md-1">
                                                          :
                                                        </div>
                                                        <div class="col-md-3">
                                                          <input type="text" name="staff" class="form-control form-control-line" style="width:100%; font-size:15px;margin-top:-10px;">
                                                        </div>
                                                  </div>
                                                  <hr />
                                                  <div class="row" style="margin-bottom:10px;">
                                                      <div class="col-md-1">
                                                        <i class="fa fa-building-o"></i>
                                                      </div>
                                                      <div class="col-md-6" style="padding-right: 0px;font-size:15px;">
                                                          Luas Tanah
                                                      </div>
                                                      <div class="col-md-1">
                                                        :
                                                      </div>
                                                      <div class="col-md-3">
                                                        <input type="text" name="tanah" class="form-control form-control-line" style="width:100%; font-size:15px;margin-top:-10px;">
                                                      </div>
                                                </div>

                                                <div class="row" style="margin-bottom:10px;">
                                                    <div class="col-md-1">
                                                      <i class="fa fa-building-o"></i>
                                                    </div>
                                                    <div class="col-md-6" style="padding-right: 0px;font-size:15px;">
                                                        Luas Bangunan
                                                    </div>
                                                    <div class="col-md-1">
                                                      :
                                                    </div>
                                                    <div class="col-md-3">
                                                      <input type="text" name="bangunan" class="form-control form-control-line" style="width:100%; font-size:15px;margin-top:-10px;">
                                                    </div>
                                              </div>
                                              <hr />

                                              <div class="row" style="margin-bottom:10px;">
                                                <div class="col-md-1">
                                                  <i class="fa fa-institution "></i>
                                                </div>
                                                <div class="col-md-6" style="padding-right: 0px;font-size:15px;">
                                                    Jumlah Kelas
                                                </div>
                                                <div class="col-md-1">
                                                  :
                                                </div>
                                                <div class="col-md-3">
                                                  <input type="text" name="kelas" class="form-control form-control-line" style="width:100%; font-size:15px;margin-top:-10px;">
                                                </div>
                                          </div>

                                          <div class="row" style="margin-bottom:10px;">
                                              <div class="col-md-1">
                                                <i class="fa fa-bug"></i>
                                              </div>
                                              <div class="col-md-6" style="padding-right: 0px;font-size:15px;">
                                                  Jumlah Laboratorium
                                              </div>
                                              <div class="col-md-1">
                                                :
                                              </div>
                                              <div class="col-md-3">
                                                <input type="text" name="lab" class="form-control form-control-line" style="width:100%; font-size:15px;margin-top:-10px;">
                                              </div>
                                        </div>
                                        <div class="row" style="margin-bottom:10px;">
                                            <div class="col-md-1">
                                              <i class="fa fa-coffee"></i>
                                            </div>
                                            <div class="col-md-6" style="padding-right: 0px;font-size:15px;">
                                                Kantin atau Koperasi
                                            </div>
                                            <div class="col-md-1">
                                              :
                                            </div>
                                            <div class="col-md-3">
                                              <input type="text" name="kantin" class="form-control form-control-line" style="width:100%; font-size:15px;margin-top:-10px;">
                                            </div>
                                      </div>
                                      <div class="row" style="margin-bottom:10px;">
                                          <div class="col-md-1">
                                            <i class="fa fa-book"></i>
                                          </div>
                                          <div class="col-md-6" style="padding-right: 0px;font-size:15px;">
                                              Perpustakaan
                                          </div>
                                          <div class="col-md-1">
                                            :
                                          </div>
                                          <div class="col-md-3">
                                            <input type="text" name="perpus" class="form-control form-control-line" style="width:100%; font-size:15px;margin-top:-10px;">
                                          </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-12">
                                          <input type="submit" name="perpus" value="Submit" class="btn btn-success full-width" style="width:100%; font-size:15px;margin-top:-10px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                    <div class="col-md-12 col-lg-8 col-sm-12">
                      <div class="white-box">
                        <h3 style="margin-top:-10px;">Data Pendukung</h3><hr />
                        <div class="row">
                          <div class="col-md-12">
                            <p>Data Pendukung ini berkaitan dengan prestasi yang didapatkan oleh sekolah, Sarana Prasarana, Dokumen - Dokumen pendukung</p>

                            <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#home">Prestasi Sekolah</a></li>
                              <li><a data-toggle="tab" href="#menu1">Prestasi Siswa</a></li>
                              <li><a data-toggle="tab" href="#menu2">Sarana Prasarana</a></li>
                              <li><a data-toggle="tab" href="#menu3">Dokumen Pendukung</a></li>
                            </ul>

                            <div class="tab-content">
                              <div id="home" class="tab-pane fade in active">
                                <h3>Prestasi Sekolah</h3>
                                <input type="text" name="nama" class="form-control form-control-line" placeholder="Nama Prestasi" /><br />
                                <input type="date" name="tahun" class="form-control form-control-line" placeholder="Tahun Prestasi" /><br />
                                <label class="btn btn-file btn-default" style="width:100%;margin-bottom:15px;">
                                  Upload Foto<input name="foto" style="display: none;" type="file">
                                </label>
                                <input type="submit" class="btn btn-success full-width" value="Upload" />
                              </div>
                              <div id="menu1" class="tab-pane fade">
                                <h3>Prestasi Siswa</h3>
                                <input type="text" name="nama" class="form-control form-control-line" placeholder="Nama Prestasi" /><br />
                                <input type="date" name="tahun" class="form-control form-control-line" placeholder="Tahun Prestasi" /><br />
                                <label class="btn btn-file btn-default" style="width:100%;margin-bottom:15px;">
                                  Upload Foto<input name="foto" style="display: none;" type="file">
                                </label>
                                <input type="submit" class="btn btn-success full-width" value="Upload" />
                              </div>
                              <div id="menu2" class="tab-pane fade">
                                <h3>Menu 2</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                              </div>
                              <div id="menu3" class="tab-pane fade">
                                <h3>Menu 3</h3>
                                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                          </div>
                          </div>
                        </div>
                    </div>
            </div>
            <!-- /.container-fluid -->
@endsection
