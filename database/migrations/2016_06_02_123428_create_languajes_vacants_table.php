<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguajesVacantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languajes_vacants', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('vacant_id')->unsigned();
            $table->foreign('vacant_id')->references('id')->on('vacants')->onDelete('cascade');
            $table->string('idioma');
            $table->string('idioma_nivel');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('languajes_vacants');
    }
}
