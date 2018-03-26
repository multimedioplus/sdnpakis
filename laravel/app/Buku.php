<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
  protected $fillable = [
      'tanggal','judul', 'pengarang', 'penerbit','siswa','guru', 'rangkuman', 'saran', 'tokoh'
  ];
}
