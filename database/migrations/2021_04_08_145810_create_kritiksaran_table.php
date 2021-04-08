<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKritiksaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kritiksaran', function (Blueprint $table) {
            $table->increments('idKritikSaran');
            $table->integer('UKM_idUKM')->unsigned();
            $table->string('namaMahasiswa', 255);
            $table->longText('isiKritikSaran');
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
        Schema::dropIfExists('kritiksaran');
    }
}
