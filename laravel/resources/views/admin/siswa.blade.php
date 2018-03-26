@extends('layouts.admin')

@section('content')
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
            <div class="row" style="margin-top:30px;">
                    <!--<h1 style="margin-left:20px;font-weight:300; margin-top:20px;margin-bottom:20px">Data Siswa</h1>-->
                    <!-- /.col-lg-12 -->
                </div>
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                     <!-- .col -->
                    <div class="col-lg-2 col-md-12 col-sm-12"></div>
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="panel" style="padding:30px;">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Input Data Siswa
                                    </div>
                                    <div class="panel-body">
                                      <div class="row">
                                        <form method="post" action="{{url('input/siswa')}}"  enctype="multipart/form-data">
                                          {{ csrf_field() }}
                                        <input type="number" class="form-control form-control-line" name="nis" placeholder="Nomor Induk Siswa" /><br />
                                        <input type="text" class="form-control form-control-line" name="nama" placeholder="Nama" /><br />
                                        <div class="row">
                                            <div class="col-md-6"><input type="text" class="form-control form-control-line" name="tempatLahir" placeholder="Tempat Lahir" value=""/></div>
                                            <div class="col-md-6"><input type="date" class="form-control form-control-line" name="tglLahir" placeholder="Tanggal Lahir" value=""/></div>
                                        </div>
                                        <br />
                                        <div class="row">
                                            <div class="col-md-3">
                                            <p style="font-size:18px;">Kelas</p> 
                                            </div>
                                            <div class="col-md-6"> 
                                            <select name="tingkat" class="form-control ">
                                            <option value="1"> 1</option>
                                            <option value="2"> 2</option>
                                            <option value="3"> 3</option>
                                            <option value="4"> 4</option>
                                            <option value="5"> 5</option>
                                            <option value="6"> 6</option>
                                            </select><br>
                                            </div>
                                            <div class="col-md-3"> 
                                            <select name="kelas" class="form-control">
                                            <option value="A"> A</option>
                                            <option value="B"> B</option>
                                            <option value="C"> C</option>
                                            </select><br></div>
                                        </div><br>
                                        <select name="jk" class="form-control">
                                            <option value="Laki - Laki"> Laki - Laki</option>
                                            <option value="Perempuan"> Perempuan</option>
                                        </select><br>
                                        <input type="number" class="form-control form-control-line" name="telpon" placeholder="Nomor Telpon" value=""/><br />
                                         <input type="text" class="form-control form-control-line" name="alamat" placeholder="Alamat RUmah" value=""/><br />
                                        <!--<label class="btn btn-file btn-default" style="width:100%;margin-bottom:15px;">-->
                                        <!--  Pilih Foto<input name="foto" style="display: none;" type="file">-->
                                        <!--</label>-->
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
