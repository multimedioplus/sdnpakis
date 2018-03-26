<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use DB;
use App\Guru;
use App\Siswa;
use App\Galeri;
use App\User;
use Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = pengumuman::orderBy('id', 'DESC')->simplePaginate(2);
        return view('admin.dashboard')->with('data', $data)->with('role', 'admin');
    }

    public function dataGuru() {
        $data = User::where('role', 'guru')->get();
        return view('data.guru')->with('data', $data)->with('role', 'admin');
    }

    public function dataSiswa() {
        $data = Siswa::all();
        return view('data.siswa')->with('data', $data)->with('role', 'admin');
    }

    public function guru()
    {
       return view('admin.guru')->with('role', 'admin');
    }

    public function siswa()
    {
        $data = siswa::simplePaginate(12);
        return view('admin.siswa')->with('data', $data)->with('role', 'admin');
    }

    public function buku()
    {
        return view('admin.buku')->with('role', 'admin');
    }

    public function sekolah()
    {
        return view('admin.sekolah')->with('role', 'admin');
    }

    public function galeri(Request $request, $id)
    {
    $data = Galeri::all();
    if($id == 0) {
      $id = 0;
      return view('admin.galeri')->with('data', $data)->with('id', $id)->with('role', 'admin');
    } else {
      $edit = Galeri::where('id', $id)->get();
      return view('admin.galeri')
             ->with('data', $data)
             ->with('edit', $edit)
             ->with('id', $id);
     }

    }

    public function updateGaleri(Request $request, $id) {
    //Get Data From Input
      $tanggal            = $request->input('tanggal');
      $nama               = $request->input('nama');
      $deskripsi          = $request->input('deskripsi');
      $file               = $request->file('foto');

    $update = Galeri::where('id', $id)
              ->update([
                'tanggal'   => $tanggal,
                'nama'      => $nama,
                'deskripsi' => $deskripsi,
              ]);
    if ($request->hasFile('foto')) {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path().'/galeri/', $fileName);
        $update = Galeri::where('id', $id)->update(['foto'  => $fileName]);
    }

    return redirect('admin/0/galeri');
    }

      public function deleteGaleri(Request $request, $id) {
      $data = Galeri::where('id', $id)->delete();
      return redirect('/admin/0/galeri')->with('role', 'admin');
    }

    public function akun()
    {
        return view('admin.akun');
    }

    public function pengumuman(Request $request)
    {
       //Get Data From Input
       $dari             = $request->input('dari');
       $perihal          = $request->input('perihal');
       $pengumuman       = $request->input('message');

       //Insert Database Pengumuman
       $data             = new Pengumuman;
       $data->dari       = $dari;
       $data->perihal    = $perihal;
       $data->pengumuman = $pengumuman;
       $data->save();

       return redirect('dashboard')->with('role', 'admin');
    }

    public function inputGuru(Request $request)
    {
      //Get Data From Input
      $nik                = $request->input('nip');
      $nama               = $request->input('nama');
      $tanggalLahir       = $request->input('tglLahir');
      $tempatLahir        = $request->input('tempatLahir');
      $alamat             = $request->input('alamat');
      $telpon             = $request->input('telpon');
      $jenisKelamin       = $request->input('jk');
      $jabatan            = $request->input('jabatan');
      $image              = $request->file('foto');

      //Insert Database Guru
      $data               = new guru;
      $data->nik          = $nik;
      $data->nama         = $nama;
      $data->tanggalLahir = $tanggalLahir;
      $data->tempatLahir  = $tempatLahir;
      $data->alamat       = $alamat;
      $data->telpon       = $telpon;
      $data->jenisKelamin = $jenisKelamin;
      $data->jabatan      = $jabatan;

      if ($request->hasFile('foto')) {
          $imageName      = $image->getClientOriginalName();
          $data ->foto    = $imageName;
          $image->move(public_path().'/guru/', $imageName);
      }

      $data->save();

      return redirect('guru')->with('role', 'admin');
    }

    public function inputSiswa(Request $request)
    {
      //Get Data From Input
      $nis                = $request->input('nis');
      $nama               = $request->input('nama');
      $tanggalLahir       = $request->input('tglLahir');
      $tempatLahir        = $request->input('tempatLahir');
      $alamat             = $request->input('alamat');
      $telpon             = $request->input('telpon');
      $jenisKelamin       = $request->input('jk');
      $tingkat            = $request->input('tingkat');
      $kelas              = $request->input('kelas');
      $image              = $request->file('foto');

      //Insert Database Pengumuman
      $data               = new siswa;
      $data->nis          = $nis;
      $data->nama         = $nama;
      $data->tanggalLahir = "";
      $data->tempatLahir  = "";
      $data->alamat       = "";
      $data->telpon       = "";
      $data->jenisKelamin = "";
      $data->kelas        = "";
      $data->foto         = "";
      $data->password     = $nis;

    //   if ($request->hasFile('foto')) {
    //       $imageName      = $image->getClientOriginalName();
    //       $data ->foto    = $imageName;
    //       $image->move(public_path().'/siswa/', $imageName);
    //   }

      $data->save();

      return redirect('siswa')->with('role', 'admin');
    }

    public function inputGaleri(Request $request)
    {
      //Get Data From Input
      $tanggal            = $request->input('tanggal');
      $nama               = $request->input('nama');
      $deskripsi          = $request->input('deskripsi');
      $image              = $request->file('foto');

      //Insert Database Galeri
      $data               = new galeri;
      $data->tanggal      = $tanggal;
      $data->nama         = $nama;
      $data->deskripsi    = $deskripsi;

      if ($request->hasFile('foto')) {
          $imageName      = $image->getClientOriginalName();
          $data ->foto    = $imageName;
          $image->move(public_path().'/galeri/', $imageName);
      }

      $data->save();

      return redirect('galeri')->with('role', 'admin');
    }

    public function hapusPengumuman(Request $request, $id)
    {
      $hapus = DB::table('pengumumen')->where('id', '=', $id)->delete();
      $data = DB::table('pengumumen')->orderBy('id', 'DESC')->simplePaginate(2);
      return redirect('home')->with('role', 'admin');
    }

}
