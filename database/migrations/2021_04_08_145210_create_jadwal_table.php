<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->increments('idJadwal');
            $table->integer('UKM_idUKM')->unsigned();
            $table->string('namaKegiatan', 255);
            $table->date('tanggalAwal');
            $table->date('tanggalAkhir');
            $table->timestamps();
            $table->foreign('UKM_idUKM')->references('idUKM')->on('ukm')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
