<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('role');
			$table->string('name');
			$table->string('last_name');
			$table->integer('telephone');
			$table->integer('cellphone');
			$table->string('address');
			$table->string('email')->unique();
			$table->string('password', 60);

			// $table->integer('state_id')->unsigned()->unable;
  	// 		$table->foreign('state_id')->references('id')->on('states');

			$table->rememberToken();
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