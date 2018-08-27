<?php

use Illuminate\Database\Seeder;

class PidsusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pidsus')->insert([
          'no_reg' => 'B-001',
          'tgl_reg' => '2018-01-09',
          'jenis_perkara' => 'Pencurian',
          'kasus_posisi' => 'Telah terjadi pencurian',
          'surat_dakwaan' => 'XXXXX',
          'institusi_penyidik' => 'Polsek Palbar',
          'nama_terdakwa' => 'Aco Basri',
          'pasal_yang_dibuktikan' => 'KUHP 090',
          'pasal_yang_didakwakan' => 'KUHP 090',
          'amar_putusan' => 'penjara 2 tahun',
          'status' => 'penuntutan',
      ]);
    }
}
