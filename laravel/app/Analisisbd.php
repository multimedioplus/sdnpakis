<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class analisisbd extends Model
{
     protected $fillable = [
      'kelas', 'file', 'oleh', 'tahun'
  ];
}
