<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramkerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programkerja', function (Blueprint $table) {
            $table->increments('idProgramKerja');
            $table->integer('UKM_idUKM')->unsigned();
            $table->string('namaKegiatanProker', 255);
            $table->string('tujuanKegiatanProker', 1000);
            $table->date('tanggalKegiatanProker');
            $table->string('lokasiKegiatanProker', 255);
            $table->string('sasaranKegiatanProker', 1000);
            $table->string('tuKegiatanProker', 1000);
            $table->string('pjKegiatanProker', 255);
            $table->string('fotoKegiatanProker', 255);
            $table->enum('keteranganKegiatanProker', ['terlaksana', 'tidakTerlaksana', 'belumTerlaksana']);
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
        Schema::dropIfExists('programkerja');
    }
}
