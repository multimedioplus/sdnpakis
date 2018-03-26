<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class analisisuh extends Model
{
     protected $fillable = [
      'kelas', 'file', 'oleh', 'tahun'
  ];
}
