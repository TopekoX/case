<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datun', function (Blueprint $table) {
            $table->increments('id')->nullable;
            $table->string('penggugat')->nullable;
            $table->string('tergugat')->nullable;
            $table->string('no_skk');
            $table->string('tgl_skk');
            $table->enum('jenis_perkara', ['TUN', 'PERDATA', 'PPH']);
            $table->text('ket')->nullable;
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
        Schema::dropIfExists('datun');
    }
}
