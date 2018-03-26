@extends('layouts.admin')

@section('content')
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" style="margin-top:30px;">
                    <!--<h1 style="margin-left:20px;font-weight:300; margin-top:20px;margin-bottom:20px">Data Guru</h1>-->
                    <!-- /.col-lg-12 -->
                </div>
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-lg-2 col-md-12 col-sm-12"></div>
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="panel" style="padding:15px;">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Input Data Guru
                                    </div>
                                    <div class="panel-body">
                                      <div class="row">
                                        <form method="post" action="{{url('input/guru')}}"  enctype="multipart/form-data">
                                          {{ csrf_field() }}
                                        <label for="email" class="control-label">NIP : </label><br>
                                        <input type="number" class="form-control form-control-line" name="nip" placeholder="NIP" /><br />
                                        <label for="email" class="control-label">NUPTK : </label><br>
                                        <input type="number" class="form-control form-control-line" name="nuptk" placeholder="NUPTK" /><br />
                                        <label for="email" class="control-label">Nama : </label><br>
                                        <input type="text" class="form-control form-control-line" name="nama" placeholder="Nama" /><br />
                                        <label for="email" class="control-label">Tempat, Tanggal Lahir : </label><br>
                                        <div class="row">
                                            <div class="col-md-6"><input type="text" class="form-control form-control-line" name="tempatLahir" placeholder="Tempat Lahir" /></div>
                                            <div class="col-md-6"><input type="date" class="form-control form-control-line" name="tglLahir" placeholder="Tanggal Lahir" /></div>
                                        </div>
                                        <br />
                                        <label for="email" class="control-label">Tingkat, Jurusan, dan Tahun : </label><br>
                                        <div class="row">
                                            <div class="col-md-3">
                                             <select name="tingkat" class="form-control">
                                            <option value="SMA">SMA</option>
                                            <option value="S1"> S1</option>
                                            <option value="S2"> S2</option>
                                            <option value="S3"> S3</option>
                                            </select><br>
                                            </div>
                                            <div class="col-md-6"><input type="text" class="form-control form-control-line" name="jurusan" placeholder="Pendidikan Bahasa Indonesia"></div>
                                            <div class="col-md-3"><input type="text" class="form-control form-control-line" name="tahun" placeholder="2002"></div>
                                        </div><br>
                                        <label for="email" class="control-label">Tanggal Mulai Mengajar : </label><br>
                                        <input type="date" class="form-control form-control-line" name="tglMulai" placeholder="Tanggal Mulai Mengajar" /><br />
                                        <label for="email" class="control-label">Golongan : </label><br>
                                        <input type="text" class="form-control form-control-line" name="telpon" placeholder="Golongan" /><br />
                                        <label for="email" class="control-label">Tahun kerja dan Bulan Kerja : </label><br>
                                         <div class="row">
                                            <div class="col-md-6"><input type="text" class="form-control form-control-line" name="thnKerja" placeholder="Tahun Kerja" /></div>
                                            <div class="col-md-6"><input type="date" class="form-control form-control-line" name="blnKerja" placeholder="Bulan Kerja" /></div>
                                        </div><br>
                                        <label for="email" class="control-label">Jenis Kelamin : </label><br>
                                        <select name="jk" class="form-control">
                                            <option value="Laki - Laki"> Laki - Laki</option>
                                            <option value="Perempuan"> Perempuan</option>
                                        </select><br>
                                        <label for="email" class="control-label">Nomor Telpon : </label><br>
                                        <input type="number" class="form-control form-control-line" name="telpon" placeholder="Nomor Telpon" /><br />
                                        <label class="btn btn-file btn-default" style="width:100%;margin-bottom:15px;">
                                          Pilih Foto<input name="foto" style="display: none;" type="file">
                                        </label>
                                        <br />
                                        <input type="submit" class="btn btn-success full-width" value="Upload" />
                                        </form>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12"></div>
                    <!-- /.col -->
                </div>
                    </div>
            <!-- /.container-fluid -->
@endsection
