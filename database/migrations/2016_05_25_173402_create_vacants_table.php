<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacants', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->enum('activo',['true']);
            $table->string('title');
            $table->string('specialty');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('subcategory_id')->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->integer('num_vacan');
            $table->text('description');
            $table->enum('type_contract',['permanent','temporary','practices'])->nullable();
            $table->enum('type_schedule',['midti','fulti','perhour'])->nullable();
            $table->enum('type_salary',['bas_sal','fee','commis','bas_sal_comm'])->nullable();
            $table->enum('type_pay',['weekly','fortnightly','monthly'])->nullable();
            $table->boolean('public_min_pay')->nullable();
            $table->boolean('public_max_pay')->nullable();
            $table->integer('min_salary')->nullable();
            $table->integer('max_salary')->nullable();
            $table->boolean('to_travel')->nullable();
            $table->boolean('change_address')->nullable();
            $table->integer('pais_id')->unsigned()->nullable();
            $table->foreign('pais_id')->references('id')->on('paises');
            $table->integer('state_id')->unsigned()->nullable();
            $table->foreign('state_id')->references('id')->on('estados');
            $table->integer('mpio_id')->unsigned()->nullable();
            $table->foreign('mpio_id')->references('id')->on('municipios');       
            $table->text('final_comment')->nullable();
            $table->boolean('show_name')->nullable();
            $table->boolean('show_logo')->nullable();
            $table->boolean('show_email')->nullable();
            $table->boolean('show_phone')->nullable();
            $table->string('num_expiration',2);
            $table->timestamp('date_expiration');
            $table->softDeletes();

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
        Schema::drop('vacants');
    }
}
