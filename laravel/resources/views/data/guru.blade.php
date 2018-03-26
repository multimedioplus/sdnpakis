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
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="panel" style="padding:15px;">
                            <div class="sk-chat-widgets">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                      <div class="row">
                                       <h3 style="margin-top:-10px;" class="box-title">Data Guru</h3><hr />
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>NIP</th>
                                        <th>NUPTK</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                      </tr>
                                    </thead>
                                    <tbody>
            
                                  @foreach ($data as $guru)
                                   <tr>
                                       <td>{{ $guru->nip }}</td>
                                       <td>{{ $guru->nuptk }}</td>
                                        <td>{{ $guru->name }}</td>
                                        <td>{{ $guru->jabatan }}</td>
                                        <td>{{ $guru->alamat }}</td>
                                        <td>{{ $guru->email }}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    </table>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                    </div>
            <!-- /.container-fluid -->
@endsection
