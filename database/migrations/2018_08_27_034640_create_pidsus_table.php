<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePidsusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pidsus', function (Blueprint $table) {
          $table->increments('id');
          $table->string('no_reg');
          $table->string('tgl_reg');
          $table->string('jenis_perkara')->nullable();
          $table->text('kasus_posisi')->nullable();
          $table->text('surat_dakwaan');
          $table->text('institusi_penyidik');
          $table->text('tuntutan')->nullable();
          $table->string('nama_terdakwa');
          $table->string('pasal_yang_dibuktikan')->nullable();
          $table->string('pasal_yang_didakwakan')->nullable();
          $table->string('amar_putusan')->nullable();
          $table->enum('status', ['penuntutan', 'kasasi', 'eksekusi']);
          $table->date('tanggal_eksekusi')->nullable();
          $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
          $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pidsus');
    }
}
