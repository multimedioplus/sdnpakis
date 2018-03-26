@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center" >Form Pendaftaran Guru</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Nama Lengkap" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                            <label for="nip" class="col-md-4 control-label">NIP</label>
                            <div class="col-md-6">
                                <input id="nip" placeholder="Nomor NIP" type="number" class="form-control" name="nip" value="{{ old('nip') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nuptk') ? ' has-error' : '' }}">
                            <label for="nuptk" class="col-md-4 control-label">NUPTK</label>
                            <div class="col-md-6">
                                <input id="nuptk" type="number"  placeholder="Nomor NUPTK" class="form-control" name="nuptk" value="{{ old('nuptk') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                            <label for="jabatan" class="col-md-4 control-label">Jabatan</label>
                            <div class="col-md-6">
                                <input id="jabatan"  placeholder="Guru / Staff" type="text" class="form-control" name="jabatan" value="{{ old('jabatan') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>
                            <div class="col-md-6">
                                <input id="alamat" type="text"  placeholder="Alamat Lengkap" class="form-control" name="alamat" value="{{ old('alamat') }}" required autofocus>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email"  placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!--
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="role" class="col-md-4 control-label">Daftar Sebagai</label>
                        <div class="col-md-6"> -->
                          <input type="hidden" name="role" value="guru" />
                            <!-- <select required name="role" id="role" class="form-control">
                              <option>-- Pilih -- </option>
                              <option value="guru"> Guru </option>
                              <option value="siswa"> Siswa </option>
                            </select> -->
                        <!-- </div>
                    </div> -->


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm"  placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
