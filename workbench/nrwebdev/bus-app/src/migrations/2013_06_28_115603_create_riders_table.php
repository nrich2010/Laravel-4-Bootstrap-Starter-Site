<?php

use Illuminate\Database\Migrations\Migration;

class CreateRidersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		// Create the `Riders` table
		Schema::create('riders', function($table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->integer('rider_id')->unsigned();
			$table->integer('post_id')->unsigned();
			$table->text('content');
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
		// Delete the `Riders` table
		Schema::drop('riders');
	}

}