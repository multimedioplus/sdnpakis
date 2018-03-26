<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promes extends Model
{
  protected $fillable = [
      'nama', 'kelas', 'tahun','file',
  ];
}
