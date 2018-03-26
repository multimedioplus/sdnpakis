<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
  protected $fillable = [
      'tanggal', 'nama', 'deskripsi',
  ];
}
