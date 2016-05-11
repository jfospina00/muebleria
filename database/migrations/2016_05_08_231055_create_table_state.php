<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableState extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('states', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_state');
			$table->string('type');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('states');
	}

}
