<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public $fillable = ['nama','tanggalLahir', 'email', 'telpon', 'alamat'];
}
