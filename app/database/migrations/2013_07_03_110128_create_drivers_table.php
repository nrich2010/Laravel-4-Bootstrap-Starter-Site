<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDriversTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('driver_id');
			$table->text('first_name');
			$table->text('last_name');
			$table->integer('phone1');
			$table->integer('phone2');
			$table->boolean('wheelchairs');
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
        Schema::drop('drivers');
    }

}
