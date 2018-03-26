<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Siswa;
use App\User;
use Session;
use App\Buku;

class SiswaController extends Controller
{
  public function login(Request $request) {
      $nis      = $request->input('nis');
      $password = $request->input('password');
      
      $data = Siswa::where('nis', $nis)->get();
      
      foreach ($data as $siswa) {
       
       if($password == $siswa->password) {
           $siswa = Siswa::where('nis', $nis)->get();
           $data = DB::table('pengumumen')->orderBy('id', 'DESC')->simplePaginate(2);
           session()->regenerate();
           Session::put('role', 'siswa');
           Session::put('nis', $nis);
          return view('admin.dashboard')->with('data', $data)->with('siswa', $siswa)->with('role', 'siswa');
       } else {
           return redirect()->back();
       }
     }
  }
  
  public function index() {
    session()->regenerate();
    $nis = session('nis');  
    $siswa = Siswa::where('nis', $nis)->get();
    $data = DB::table('pengumumen')->orderBy('id', 'DESC')->simplePaginate(2);
    return view('admin.dashboard')->with('data', $data)->with('siswa', $siswa)->with('role', 'siswa');
  }

  public function baca()
  {
    session()->regenerate();
    $nis = session('nis');
    $buku = Buku::where('siswa', $nis)->get();
    $siswa = Siswa::where('nis', $nis)->get();
    $hitung = Buku::where('siswa', $nis)->count();
    return view('siswa.membaca')
            ->with('role', 'siswa')
            ->with('siswa', $siswa)
            ->with('buku', $buku)
            ->with('hitung', $hitung);
  }
  
   public function membaca(Request $request) {
      $judul        = $request->input('judul');
      $tanggal      = $request->input('tanggal');
      $pengarang    = $request->input('pengarang');
      $penerbit     = $request->input('penerbit');
      $nis          = $request->input('nis');
      $tokoh        = $request->input('tokoh');
      $saran        = $request->input('saran');
      $foto         = $request->file('foto');
      $rangkuman    = $request->input('rangkuman');
      
      $data            = new Buku();
      $data->judul     = $judul;
      $data->tanggal   = $tanggal;
      $data->pengarang = $pengarang;
      $data->penerbit  = $penerbit;
      $data->siswa     = $nis;
      $data->tokoh     = "$tokoh";
      $data->guru      = "";
      $data->saran     = "$saran";
      $data->rangkuman = "$rangkuman";
       if ($request->hasFile('foto')) {
        $fileName      = $foto->getClientOriginalName();
        $data->foto    = $fileName;
        $foto->move(public_path().'/buku/', $fileName);
    }
      $data->save();
      
      return redirect("siswa/buku/baca")->with('role', 'siswa');
  }
  
  public function hapusBuku(Request $request, $id) {
      $buku = Buku::where('id', $id)->delete();
      return redirect("siswa/buku/baca")->with('role', 'siswa');
  }
  
}
