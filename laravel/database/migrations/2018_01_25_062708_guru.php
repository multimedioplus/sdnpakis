<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Guru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('guru', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nik')->unique();
          $table->string('nama');
          $table->string('tanggalLahir');
          $table->string('tempatLahir');
          $table->string('alamat');
          $table->string('telpon');
          $table->string('jenisKelamin');
          $table->string('jabatan');
          $table->string('foto');
          $table->rememberToken();
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('guru');
    }
}
