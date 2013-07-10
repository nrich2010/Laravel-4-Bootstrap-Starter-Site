<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('bus_id');
			$table->integer('driver');
			$table->integer('capacity');
			$table->text('year');
			$table->text('veh_make');
			$table->text('veh_model');
			$table->text('engine');
			$table->boolean('lift');
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
        Schema::drop('buses');
    }

}
