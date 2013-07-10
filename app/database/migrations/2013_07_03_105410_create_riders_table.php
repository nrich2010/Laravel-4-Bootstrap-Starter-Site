<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRidersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riders', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('rider_id');
			$table->text('first_name');
			$table->text('last_name');
			$table->integer('phone1');
			$table->integer('phone2');
			$table->integer('school');
			$table->integer('teacher');
			$table->text('disability');
			$table->text('special_req');
			$table->boolean('wheelchair');
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
        Schema::drop('riders');
    }

}
