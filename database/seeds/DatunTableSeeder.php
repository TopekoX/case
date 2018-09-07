<?php

use Illuminate\Database\Seeder;

class DatunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('datun')->insert([
          'penggugat' => 'Ispa dan Hanapia',
          'tergugat' => 'Walikota Palu',
          'no_skk' => '180/0152/hukum/2017',
          'tgl_skk' => '2017-12-27',
          'jenis_perkara' => 'TUN',
          'ket' => 'Banding'
      ]);
    }
}
