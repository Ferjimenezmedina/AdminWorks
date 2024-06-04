<?php

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

            $table->string('name');
            $table->string('a_paterno');
            $table->string('a_materno');
            $table->enum('type',['user','company','root']);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->enum('genero',['male','female']);
            $table->date('birthdate');
            $table->string('photo')->nullable();
            $table->string('registration_token')->nullable();
            $table->rememberToken()->nullable();
            
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
        Schema::drop('users');
    }
}
