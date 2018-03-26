<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSekolah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sekolahs', function (Blueprint $table) {
          $table->increments('id');
          $table->string('kapsek');
          $table->string('alamat');
          $table->string('hp');
          $table->string('email');
          $table->string('deskripsi');
          $table->string('jumGuru');
          $table->string('jumSiswaLaki');
          $table->string('jumSiswaCewe');
          $table->string('jumStaff');
          $table->string('luasTanah');
          $table->string('luasBangunan');
          $table->string('jumLab');
          $table->string('kantin');
          $table->string('perpustakaan');
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
        //
    }
}
