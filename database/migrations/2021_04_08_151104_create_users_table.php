<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('UKM_idUKM')->unsigned();
            $table->string('name', 255);
            $table->string('username', 255);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->enum('status', ['BEM', 'UKM']);
            $table->string('foto', 255);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
