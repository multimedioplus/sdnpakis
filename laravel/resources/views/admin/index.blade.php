@extends('layouts.admin')

@section('content')
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <h1 style="margin-left:20px;font-weight:300; margin-top:20px;margin-bottom:20px">Dashboard</h1>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-8 col-sm-12">
                        <div class="white-box">
                          <h3 style="margin-top:-10px;" class="box-title">Kirim Pengumuman</h3><hr />
                          <div class="row">
                            <div class="col-md-12">
                              <input type="text" class="form-control form-control-line" name="dari" placeholder="Dari"/><br />
                              <input type="text" class="form-control form-control-line" name="perihal" placeholder="Perihal"/><br />
                              <textarea class="form-control form-control-line" row="10" name="message" placeholder="Pengumuman" style="height:200px;"></textarea><br />
                              <input class="btn btn-success full-width" value="send" type="submit" />
                            </div>
                          </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="panel">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        PENGUMUMAN TERBARU
                                    </div>
                                    <div class="panel-body">
                                      <div class="row">
                                        <i style="margin-left:15px;">29 Januari 2018</i><br /><br />
                                        <div class="col-md-2">
                                        <b>Dari</b>
                                        <br />
                                        <b>Perihal</b>
                                        <b>Pesan</b>
                                        </div>
                                        <div class="col-md-10">
                                        : Administrasi<br />
                                        : Daftar Ulang<br />
                                        : Bagi yang belum melakukan daftar ulang paling lambat tanggal 5 februari 2018
                                      </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                      <i style="margin-left:15px;">27 Januari 2018</i><br /><br />
                                      <div class="col-md-2">
                                      <b>Dari</b>
                                      <br />
                                      <b>Perihal</b>
                                      <b>Pesan</b>
                                      </div>
                                      <div class="col-md-10">
                                      : Erni Dwi Samito<br />
                                      : Ujian Susulan, S.pd<br />
                                      : Bagi siswa bernama Andi Prasepto segera menemu saya untuk melakukan ujian susulan
                                    </div>
                                  </div>
                                  <hr />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                    </div>
            <!-- /.container-fluid -->
@endsection
