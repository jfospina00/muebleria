<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePositions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('positions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_position');
			$table->string('tittle_position');
			$table->text('message_position');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('positions');
	}

}
