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
                      <form method="post" action="{{url('input/pengumuman')}}"  enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <input type="text" class="form-control form-control-line" name="dari" placeholder="Dari"/><br />
                      <input type="text" class="form-control form-control-line" name="perihal" placeholder="Perihal"/><br />
                      <textarea class="form-control form-control-line" row="10" name="message" placeholder="Pengumuman" style="height:200px;"></textarea><br />
                      <input class="btn btn-success full-width" value="send" type="submit" />
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
                                PENGUMUMAN TERBARU
                            </div>
                            <div class="panel-body">
                              @foreach ($data as $pengumuman)
                              <div class="row">
                                <div class="col-md-6">
                                <i>{{ $pengumuman->created_at }}</i>
                                </div>
                                <div class="col-md-6" style="text-align:right;color:red;">
                                  <a href="hapus/pengumuman/<?php echo $pengumuman->id ?>"><i class="fa fa-trash fa-fw" aria-hidden="true"></i></a>
                                </div><br />
                                <div class="col-md-2">
                                <b>Dari</b>
                                <br />
                                <b>Perihal</b>
                                <b>Pesan</b>
                                </div>
                                <div class="col-md-10">
                                : {{ $pengumuman->dari }}<br />
                                : {{ $pengumuman->perihal }}<br />
                                : {{ $pengumuman->pengumuman }}
                                  </div>
                                </div>
                                <hr style="margin: 0px;margin-top:10px;margin-bottom:10px;"/>
                                 @endforeach
                            <div style="width:100%; text-align:center;">{{ $data->links() }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
            </div>
    <!-- /.container-fluid -->
    @endsection
