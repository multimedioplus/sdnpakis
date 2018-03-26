@extends('layouts.admin')

@section('content')
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Absensi Kehadiran</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Absensi Kehadiran</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                              <div class="col-md-6">
                                <h4>Ringkasan</h4>
                              </div>
                              <div class="col-md-6" style="text-align:right">
                                <i class="fa fa-check-circle" title="Masuk" style="margin:10px;color:green;"> Kehadiran : 70% </i>
                                <i class="fa fa-info-circle" title="Absen" style="margin:10px;color:darkblue;"> Izin : 5  </i>
                                <i class="fa fa-exclamation-circle" title="Masuk" style="margin:10px;color:darkorange;"> Sakit : 2  </i>
                                <i class="fa fa-times-circle" title="Masuk" style="margin:10px;color:red;"> Alfa : 2 </i>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Absensi Kehadiran</h3>
                            <div class="table-responsive">
                                <table class="table">
                                        <tr style="background:#2f323ee6;color:#fff; font-weight:500">
                                            <td rowspan="2" style="text-align:center;vertical-align:middle;">Kode MP</td>
                                            <td rowspan="2" style="text-align:center;vertical-align:middle;">Mata Pelajaran</td>
                                            <td colspan="16" style="text-align:center;">Minggu Ke</td>
                                            <td rowspan="2" style="text-align:center;vertical-align:middle;">%Kehadiran</td>
                                        </tr>
                                      <tr style="background:#2f323ee6;color:#fff; font-weight:500">
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                        <td>12</td>
                                        <td>13</td>
                                        <td>14</td>
                                        <td>15</td>
                                        <td>16</td>
                                      </tr>
                                        <tr>
                                            <td>VT003</td>
                                            <td>Bahasa Indonesia</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td style="background:red; color:white">A</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td style="background:orange; color:white">S</td>
                                            <td style="background:red; color:white">A</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>74%</td>
                                        </tr>
                                        <tr>
                                            <td>VT004</td>
                                            <td>Matematika</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td style="background:red; color:white">A</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>100%</td>
                                        </tr>
                                        <tr>
                                            <td>VT004</td>
                                            <td>Bahasa Inggris</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td style="background:red; color:white">A</td>
                                            <td>H</td>
                                            <td style="background:red; color:white">A</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>100%</td>
                                        </tr>
                                        <tr>
                                            <td>VT004</td>
                                            <td>Kesenian</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>100%</td>
                                        </tr>
                                        <tr>
                                            <td>VT004</td>
                                            <td>Ilmu Pengetahuan Alam</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td style="background:red; color:white">A</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>100%</td>
                                        </tr>
                                        <tr>
                                            <td>VT004</td>
                                            <td>Sejarah</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td style="background:darkblue; color:white">I</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>100%</td>
                                        </tr>
                                        <tr>
                                            <td>VT004</td>
                                            <td>Ilmu Pengetahuan Sosial</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td style="background:darkblue; color:white">I</td>
                                            <td style="background:darkblue; color:white">I</td>
                                            <td style="background:darkblue; color:white">I</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>100%</td>
                                        </tr>
                                        <tr>
                                            <td>VT004</td>
                                            <td>Pendidikan Agama</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>100%</td>
                                        </tr>
                                        <tr>
                                            <td>VT004</td>
                                            <td>Olahraga</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td style="background:orange; color:white">S</td>
                                            <td style="background:orange; color:white">S</td>
                                            <td style="background:orange; color:white">S</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>H</td>
                                            <td>100%</td>
                                        </tr>
                                  </table>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            @endsection
