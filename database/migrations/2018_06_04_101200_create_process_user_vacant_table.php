<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessUserVacantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('status_vacant', function (Blueprint $table) {
            $table->increments('id');

             //Referencia tabla vacantes empresa
            $table->integer('vacant_id')->unsigned();
            $table->foreign('vacant_id')->references('id')->on('vacants');
            
            //Referencia tabla users aspirantes
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        
        


        
    }
}
