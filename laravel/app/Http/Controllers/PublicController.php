<?php

namespace App\Http\Controllers;
use DB;
use Pengumuman;
use Illuminate\Http\Request;
use App\Galeri;

class PublicController extends Controller
{
  public function utama() {
    // $data = pengumumen::orderBy('id', 'DESC')->simplePaginate(2);
    $galeri = galeri::all();
    return view('welcome')->with('galeri', $galeri);
  }
  public function awal() {
    return view('public');
  }

  public function guru()
  {
    $data = DB::table('gurus')->simplePaginate(12);
    return view('data.guru')->with('data', $data)->with('role', 'admin');
  }
  
   public function pilih()
  {
    return view('auth.pilih');
  }

  public function siswa()
  {
    $data = DB::table('siswas')->simplePaginate(12);
    return view('data.siswa')->with('data', $data);
  }
}
