<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nombre')->nullable();
            $table->string('razon_social');
            $table->string('rfc',20);
            $table->string('domicilio');
            $table->string('no_exterior');
            $table->string('colonia');
            $table->string('codigo_postal');
            $table->string('telefono')->nullable();
            $table->string('pagina_web')->nullable();
            $table->integer('pais_id')->unsigned();
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('estados');
            $table->integer('mpio_id')->unsigned();
            $table->foreign('mpio_id')->references('id')->on('municipios');
            $table->string('ciudad');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->enum('tipo_contrata_emp',['Empleador Directo','Servicios Temporales','De Reclutamiento'])->nullable();
            $table->text('presentacion')->nullable();

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
        Schema::drop('companies');
    }
}
