<?php

use Illuminate\Database\Seeder;

class Pengumuman extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengumuman')->insert([
           'dari' => str_random(10),
           'perihal' => str_random(10).'@gmail.com',
           'pengumuman' => 'Anak Anak diharapkan mengumpulkan buku perpusatakaan paling akhir, 18 Mei 2018',
       ]);
    }
}
