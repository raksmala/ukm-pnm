<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('idAnggota');
            $table->integer('UKM_idUKM')->unsigned();
            $table->string('namaAnggota', 255);
            $table->string('NIMAnggota', 20);
            $table->string('jabatanAnggota', 45);
            $table->string('kementerian', 255);
            $table->string('programStudiAnggota', 255);
            $table->enum('statusAnggota', ['tetap', 'baru']);
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
        Schema::dropIfExists('anggota');
    }
}
