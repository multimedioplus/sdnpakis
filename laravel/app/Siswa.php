<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
  protected $fillable = [
      'nis', 'nama', 'tanggalLahir','tempatLahir', 'alamat', 'telpon', 'jenisKelamin', 'kelas', 'foto','password'
  ];
}
