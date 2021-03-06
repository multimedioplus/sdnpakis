<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabaseGaleri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('galeris', function (Blueprint $table) {
           $table->increments('id');
           $table->string('nama');
           $table->string('tanggal');
           $table->string('deskripsi');
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
         Schema::dropIfExists('galeris');
     }
}
