<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prota;
use App\Promes;
use App\Rpp;
use App\Users;
use Auth;
use App\Buku;
use App\Silabus;
use App\Pengumuman;
use App\Kd;
use App\Nilaiuh;
use App\Analisisbd;
use App\Analisisuh;
use App\Analisisuh2;

class GuruController extends Controller
{
    
  public function index() {
       $data = pengumuman::orderBy('id', 'DESC')->simplePaginate(2);
        return view('admin.dashboard')->with('data', $data)->with('role', 'admin');
  } 
  
  public function silabus(Request $request, $id)
  {
    $nama = Auth::user()->name;
    $data = Silabus::where('nama', $nama)->get();
    if($id == 0) {
      $id = 0;
      return view('guru.silabus')->with('data', $data)->with('id', $id)->with('role', 'guru');
    } else {
      $edit = Silabus::where('id', $id)->get();
      return view('guru.silabus')
             ->with('data', $data)
             ->with('edit', $edit)
             ->with('id', $id)
             ->with('role', 'guru');
    }
  }

  public function inputSilabus(Request $request)
  {
    $judul  = $request->input('judul');
    $nama   = $request->input('guru');
    $kelas  = $request->input('kelas');
    $tahun  = $request->input('tahun');
    $file   = $request->file('pdf');

    $data         = new Silabus;
    $data->judul  = $judul;
    $data->nama   = $nama;
    $data->kelas  = $kelas;
    $data->tahun  = $tahun;
    if ($request->hasFile('pdf')) {
        $fileName      = $file->getClientOriginalName();
        $namaFile = "$nama+$fileName";
        $data->file    = $namaFile;
        $file->move(public_path().'/guru/', $namaFile);
    }
    $data->save();

    return redirect('/guru/0/silabus')->with('role', 'guru')->with('role', 'guru');
  }

  public function tantangan() {
    return view('siswa.membaca')->with('role', 'guru');
  }
  
  public function baca(Request $request) {
      $judul        = $request->input('judul');
      $tanggal      = $request->input('tanggal');
      $pengarang    = $request->input('pengarang');
      $penerbit     = $request->input('penerbit');
      $nis          = $request->input('nis');
      $guru         = $request->input('guru');
      
      $data            = new Buku();
      $data->judul     = $judul;
      $data->tanggal   = $tanggal;
      $data->pengarang = $pengarang;
      $data->penerbit  = $penerbit;
      $data->siswa     = $nis;
      $data->guru      = $guru;
      $data->tokoh     = "";
      $data->foto     = "";
      $data->saran     = "";
      $data->rangkuman = "";
      $data->save();
      
      return redirect("/guru/tantangan/membaca")->with('role', 'guru');
  }
  

  public function updateSilabus(Request $request, $id)
  {
    $judul  = $request->input('judul');
    $nama   = $request->input('guru');
    $kelas  = $request->input('kelas');
    $tahun  = $request->input('tahun');
    $file   = $request->file('pdf');

    $update = Silabus::where('id', $id)
              ->update([
                'judul'  => $judul,
                'nama'   => $nama,
                'kelas'  => $kelas,
                'tahun'  => $tahun
              ]);
    if ($request->hasFile('pdf')) {
        $fileName      = $file->getClientOriginalName();
        $namaFile = "$nama+$fileName";
        $file->move(public_path().'/guru/', $namaFile);
        $update = Silabus::where('id', $id)->update(['file'  => $namaFile]);
    }

    return redirect('guru/0/silabus')->with('role', 'guru');
  }
  
  
  public function deleteSilabus(Request $request, $id) {
      $data = Silabus::where('id', $id)->delete();
      return redirect('/guru/0/silabus')->with('role', 'guru');
  }
  
   public function deleteRpp(Request $request, $id) {
      $data = RPP::where('id', $id)->delete();
      return redirect('/guru/0/rpp')->with('role', 'guru');
  }

  public function rpp(Request $request, $id)
  {
    $nama = Auth::user()->name;
    $data = RPP::where('nama', $nama)->get();
    if($id == 0) {
      $id = 0;
      return view('guru.rpp')->with('data', $data)->with('id', $id)->with('role', 'guru');
    } else {
      $edit = Rpp::where('id', $id)->get();
      return view('guru.rpp')
             ->with('data', $data)
             ->with('edit', $edit)
             ->with('id', $id)->with('role', 'guru');
    }
  }

    public function inputRpp(Request $request)
    {
      $materi   = $request->input('materi');
      $nama     = $request->input('guru');
      $kelas    = $request->input('kelas');
      $tahun    = $request->input('tahun');
      $file     = $request->file('pdf');

      $data   = new Rpp;
      $data->muatan   = $materi;
      $data->nama     = $nama;
      $data->kelas    = $kelas;
      $data->tahun    = $tahun;

      if ($request->hasFile('pdf')) {
      $fileName       = $file->getClientOriginalName();
      $namaFile       = "$nama+$fileName";
      $data->file     = $namaFile;
      $file->move(public_path().'/guru/', $namaFile);
      }

      $data->save();

      return redirect('/guru/0/rpp')->with('role', 'guru');
    }

    public function updateRpp(Request $request, $id)
    {
      $judul  = $request->input('judul');
      $nama   = $request->input('guru');
      $kelas  = $request->input('kelas');
      $tahun  = $request->input('tahun');
      $file   = $request->file('pdf');

      $update = rpp::where('id', $id)
                ->update([
                  'muatan'  => $judul,
                  'nama'   => $nama,
                  'kelas'  => $kelas,
                  'tahun'  => $tahun
                ]);
      if ($request->hasFile('pdf')) {
          $fileName      = $file->getClientOriginalName();
          $namaFile = "$nama+$fileName";
          $file->move(public_path().'/guru/', $namaFile);
          $update = rpp::where('id', $id)->update(['file'  => $namaFile]);
      }

      return redirect('guru/0/rpp')->with('role', 'guru');
    }

    public function promes(Request $request, $id)
    {
    $data = promes::orderBy('kelas', 'ASC')->get();
    if($id == 0) {
      $id = 0;
      return view('guru.promes')
             ->with('data', $data)
             ->with('id'  , $id)->with('role', 'guru');
    } else {
      $edit = promes::where('id', $id)->get();
      return view('guru.promes')
             ->with('data', $data)
             ->with('id'  , $id)
             ->with('edit', $edit)->with('role', 'guru');
    }
    return view('guru.promes')->with('role', 'guru');
  }

  public function updatePromes(Request $request, $id)
  {
    $nama   = $request->input('guru');
    $kelas  = $request->input('kelas');
    $tahun  = $request->input('tahun');

    $file   = $request->file('pdf');
    $update = promes::where('id', $id)
              ->update([
                'nama'  => $nama,
                'kelas' => $kelas,
                'tahun' => $tahun
              ]);
    if ($request->hasFile('pdf')) {
        $fileName      = $file->getClientOriginalName();
        $namaFile = "$nama+$fileName";
        $file->move(public_path().'/guru/', $namaFile);
        $update = promes::where('id', $id)->update(['file'  => $namaFile]);
    }

    return redirect('guru/0/promes')->with('role', 'guru');
  }

  public function prota(Request $request, $id)
  {
    $data = prota::orderBy('kelas', 'ASC')->get();
    if($id == 0) {
      $id = 0;
      return view('guru.prota')
             ->with('data', $data)
             ->with('id'  , $id)->with('role', 'guru');
    } else {
      $edit = prota::where('id', $id)->get();
      return view('guru.prota')
             ->with('data', $data)
             ->with('id'  , $id)
             ->with('edit', $edit)->with('role', 'guru');
    }
  }

  public function updateProta(Request $request, $id)
  {
    $nama   = $request->input('guru');
    $kelas  = $request->input('kelas');
    $tahun  = $request->input('tahun');
    $file   = $request->file('pdf');

    $update = prota::where('id', $id)
              ->update([
                'nama'  => $nama,
                'kelas' => $kelas,
                'tahun' => $tahun
              ]);
    if ($request->hasFile('pdf')) {
        $fileName      = $file->getClientOriginalName();
        $namaFile = "$nama+$fileName";
        $file->move(public_path().'/guru/', $namaFile);
        $update = prota::where('id', $id)->update(['file'  => $namaFile]);
    }

    return redirect('guru/0/prota')->with('role', 'guru');
  }

  public function kd(Request $request, $id)
  {
    $data = Kd::orderBy('kelas', 'ASC')->get();
    if($id == 0) {
      $id = 0;
      return view('guru.kd')
             ->with('data', $data)
             ->with('id'  , $id)->with('role', 'guru');
    } else {
      $edit = Kd::where('kelas', $id)->get();
      return view('guru.kd')
             ->with('data', $data)
             ->with('id'  , $id)
             ->with('edit', $edit)->with('role', 'guru');
    }
    // return view('guru.kd')->with('role', 'guru')->with('id', $id);
  }
  
  public function updateKd(Request $request, $id)
  {
    $nama   = $request->input('guru');
    $kelas  = $request->input('kelas');
    $tahun  = $request->input('tahun');
    $file   = $request->file('pdf');
    $date   = $request->input('date'); 

    // echo "$nama - $kelas - $tahun - $file";

    $update = Kd::where('kelas', $id)
              ->update([
                'oleh'  => $nama,
                'kelas' => $kelas,
                'tahun' => $tahun
              ]);
    if ($request->hasFile('pdf')) {
        $fileName      = $file->getClientOriginalName();
        $namaFile      = "$date+$fileName";
        $file->move(public_path().'/guru/analisakd/', $namaFile);
        $update = Kd::where('kelas', $id)->update(['file'  => $namaFile]);
    }

    return redirect('guru/0/kd')->with('role', 'guru');
  }
  
  public function nilaiUH(Request $request, $id) {
    $data = NilaiUH::orderBy('kelas', 'ASC')->get();
    if($id == 0) {
      $id = 0;
      return view('guru.nilaiuh')
             ->with('data', $data)
             ->with('id'  , $id)->with('role', 'guru');
    } else {
      $edit = NilaiUH::where('kelas', $id)->get();
      return view('guru.nilaiuh')
             ->with('data', $data)
             ->with('id'  , $id)
             ->with('edit', $edit)->with('role', 'guru');
    }
      return view('guru.nilaiuh')->with('role', 'guru')->with('id', $id);
  }
  
   public function updateNilaiUH(Request $request, $id)
  {
    $nama   = $request->input('guru');
    $kelas  = $request->input('kelas');
    $tahun  = $request->input('tahun');
    $file   = $request->file('pdf');
    $date   = $request->input('date'); 

    // echo "$nama - $kelas - $tahun - $file";

    $update = nilaiuh::where('kelas', $id)
              ->update([
                'oleh'  => $nama,
                'kelas' => $kelas,
                'tahun' => $tahun
              ]);
    if ($request->hasFile('pdf')) {
        $fileName      = $file->getClientOriginalName();
        $namaFile      = "$date+$fileName";
        $file->move(public_path().'/guru/nilaiuh/', $namaFile);
        $update = nilaiuh::where('kelas', $id)->update(['file'  => $namaFile]);
    }
     return redirect('guru/0/nilai/uh')->with('role', 'guru')->with('id', $id);
}

    public function analisisbd(Request $request, $id) {
    $data = Analisisbd::orderBy('kelas', 'ASC')->get();
    if($id == 0) {
      $id = 0;
      return view('guru.analisisbd')
             ->with('data', $data)
             ->with('id'  , $id)->with('role', 'guru');
    } else {
      $edit = Analisisbd::where('kelas', $id)->get();
      return view('guru.analisisbd')
             ->with('data', $data)
             ->with('id'  , $id)
             ->with('edit', $edit)->with('role', 'guru');
    }
      return view('guru.analisisbd')->with('role', 'guru')->with('id', $id);
  }
  
  public function updatebd(Request $request, $id)
  {
    $nama   = $request->input('guru');
    $kelas  = $request->input('kelas');
    $tahun  = $request->input('tahun');
    $file   = $request->file('pdf');
    $date   = $request->input('date'); 

    // echo "$nama - $kelas - $tahun - $file";

    $update = analisisbd::where('kelas', $id)
              ->update([
                'oleh'  => $nama,
                'kelas' => $kelas,
                'tahun' => $tahun
              ]);
    if ($request->hasFile('pdf')) {
        $fileName      = $file->getClientOriginalName();
        $namaFile      = "$date+$fileName";
        $file->move(public_path().'/guru/analisisbd/', $namaFile);
        $update = analisisbd::where('kelas', $id)->update(['file'  => $namaFile]);
    }
     return redirect('guru/0/analisis/bd')->with('role', 'guru')->with('id', $id);
}

    public function analisisuh(Request $request, $id) {
    $data = Analisisuh::orderBy('kelas', 'ASC')->get();
    if($id == 0) {
      $id = 0;
      return view('guru.analisisuh')
             ->with('data', $data)
             ->with('id'  , $id)->with('role', 'guru');
    } else {
      $edit = Analisisuh::where('kelas', $id)->get();
      return view('guru.analisisuh')
             ->with('data', $data)
             ->with('id'  , $id)
             ->with('edit', $edit)->with('role', 'guru');
    }
      return view('guru.analisisuh')->with('role', 'guru')->with('id', $id);
  }
  
  public function updateuh(Request $request, $id)
  {
    $nama   = $request->input('guru');
    $kelas  = $request->input('kelas');
    $tahun  = $request->input('tahun');
    $file   = $request->file('pdf');
    $date   = $request->input('date'); 

    // echo "$nama - $kelas - $tahun - $file";

    $update = analisisuh::where('kelas', $id)
              ->update([
                'oleh'  => $nama,
                'kelas' => $kelas,
                'tahun' => $tahun
              ]);
    if ($request->hasFile('pdf')) {
        $fileName      = $file->getClientOriginalName();
        $namaFile      = "$date+$fileName";
        $file->move(public_path().'/guru/analisisuh/', $namaFile);
        $update = analisisuh::where('kelas', $id)->update(['file'  => $namaFile]);
    }
     return redirect('guru/0/analisis/uh')->with('role', 'guru')->with('id', $id);
}

    public function analisisuh2(Request $request, $id) {
    $data = Analisisuh2::orderBy('kelas', 'ASC')->get();
    if($id == 0) {
      $id = 0;
      return view('guru.analisisuh2')
             ->with('data', $data)
             ->with('id'  , $id)->with('role', 'guru');
    } else {
      $edit = Analisisuh2::where('kelas', $id)->get();
      return view('guru.analisisuh2')
             ->with('data', $data)
             ->with('id'  , $id)
             ->with('edit', $edit)->with('role', 'guru');
    }
      return view('guru.analisisuh2')->with('role', 'guru')->with('id', $id);
  }
  
  public function updateuh2(Request $request, $id)
  {
    $nama   = $request->input('guru');
    $kelas  = $request->input('kelas');
    $tahun  = $request->input('tahun');
    $file   = $request->file('pdf');
    $date   = $request->input('date'); 

    // echo "$nama - $kelas - $tahun - $file";

    $update = analisisuh2::where('kelas', $id)
              ->update([
                'oleh'  => $nama,
                'kelas' => $kelas,
                'tahun' => $tahun
              ]);
    if ($request->hasFile('pdf')) {
        $fileName      = $file->getClientOriginalName();
        $namaFile      = "$date+$fileName";
        $file->move(public_path().'/guru/analisisuh2/', $namaFile);
        $update = analisisuh2::where('kelas', $id)->update(['file'  => $namaFile]);
    }
     return redirect('guru/0/analisis/uh2')->with('role', 'guru')->with('id', $id);
}

 public function hb(Request $request, $id)
  {
    return view('guru.hb')->with('role', 'guru');
  }
}