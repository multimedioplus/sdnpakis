<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use DB;

class FormController extends Controller
{
    public function index() {
      return view('form');
    }

    public function inputForm(Request $request) {
      $nama     = $request->input('nama'); // $nama = $_POST['nama'];
      $kelas    = $request->input('kelas');
      $telpon   = $request->input('telpon');

      // echo "$nama - $kelas - $telpon";

      $data         = new Form;
      $data->nama   = $nama;
      $data->kelas  = $kelas;
      $data->telpon = $telpon;
      $data->save();

      return redirect('form');
    }

    public function tampil() {
      $data = Form::all();
      return View('tampil')->with('number', $data);
    }
}
