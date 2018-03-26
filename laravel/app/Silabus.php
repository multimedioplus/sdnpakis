<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silabus extends Model
{
  protected $fillable = [
      'judul','nama', 'kelas', 'tahun','file',
  ];
}
