<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('empresa_exp');
            $table->string('puesto_exp');
            $table->string('descrip_exp',350);
            $table->boolean('to_date')->nullable();
            $table->string('mo_ini_exp');
            $table->integer('y_ini_exp');
            $table->string('mo_fin_exp')->nullable();
            $table->integer('y_fin_exp')->nullable();
            $table->string('referencia');
            $table->string('puesto');
            $table->string('tel_experien');

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
        Schema::drop('work_experiences');
    }
}
