@extends('layouts.admin')

@section('content')
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Nilai</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Nilai</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Nilai Siswa</h3>
                            <div class="table-responsive">
                              <table class="table">
                                <tr style="background:#2f323ee6;color:#fff; font-weight:500">
                                  <td>Kode MP<td>
                                  <td>Mata Pelajaran<td>
                                  <td>Nilai<td>
                                </tr>
                                <tr>
                                  <td>V3003<td>
                                  <td>Bahasa Indonesia<td>
                                  <td>A<td>
                                </tr>
                                <tr>
                                  <td>V3004<td>
                                  <td>Bahasa Inggris<td>
                                  <td>AB<td>
                                </tr>
                                <tr>
                                  <td>V3005<td>
                                  <td>Matematika<td>
                                  <td>AB<td>
                                </tr>
                                <tr>
                                  <td>V3006<td>
                                  <td>Olahraga<td>
                                  <td>B<td>
                                </tr>
                                <tr>
                                  <td>V3007<td>
                                  <td>Pendidikan Agama<td>
                                  <td>AB<td>
                                </tr>
                                <tr>
                                  <td>V3008<td>
                                  <td>Ilmu Pengetahuan Alam<td>
                                  <td>B<td>
                                </tr>

                              </table>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            @endsection
