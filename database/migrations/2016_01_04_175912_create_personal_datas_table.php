<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_datas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('estado_civil');
            $table->string('rfc')->nullable();
            $table->string('curp');
            $table->integer('pais_id')->unsigned();
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('estados');
            $table->integer('mpio_id')->unsigned();
            $table->foreign('mpio_id')->references('id')->on('municipios');
            $table->string('calle');
            $table->string('no_ext');
            $table->string('no_int')->nullable();
            $table->string('colonia');
            $table->string('codigo_postal');
            $table->string('tipo_tel1');
            $table->string('telefono1');
            $table->string('tipo_tel2')->nullable();
            $table->string('telefono2')->nullable();
            $table->boolean('licencia');
            $table->enum('tipo_licencia',['A','B','C','D'])->nullable();
            $table->boolean('disp_veiculo')->nullable();
            $table->boolean('disp_cam_res')->nullable();
            $table->boolean('disp_viajar')->nullable();
            $table->boolean('discapacidad');
            $table->string('situcacion_ac');
            $table->string('puesto_des');
            $table->string('req_salary');
            $table->string('salary_type');
            $table->string('des_salary');
            $table->string('salary_type_des');
            $table->string('img_user')->nullable();
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
        Schema::drop('personal_datas');
    }
}
