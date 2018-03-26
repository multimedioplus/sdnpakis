<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
  protected $fillable = [
      'nik', 'nama', 'tanggalLahir','tempatLahir', 'alamat', 'telpon', 'jenisKelamin', 'jabatan', 'foto',
  ];
}
