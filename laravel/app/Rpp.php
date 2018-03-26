<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rpp extends Model
{
  protected $fillable = [
      'muatan','nama', 'kelas', 'tahun','file',
  ];
}
