<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailjadwal', function (Blueprint $table) {
            $table->increments('idDetailJadwal');
            $table->integer('idJadwal')->unsigned();
            $table->string('NIM', 20);
            $table->string('namaUndangan', 255);
            $table->string('prodi', 255);
            $table->timestamps();
            $table->foreign('idJadwal')->references('idJadwal')->on('jadwal')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailjadwal');
    }
}
