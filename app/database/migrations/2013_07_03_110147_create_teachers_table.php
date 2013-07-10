<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeachersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher_id');
			$table->text('name');
			$table->integer('school');
			$table->integer('phone_number');
			$table->text('email');
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
        Schema::drop('teachers');
    }

}
