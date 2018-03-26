<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prota extends Model
{
  protected $fillable = [
      'nama', 'kelas', 'tahun','file',
  ];
}
