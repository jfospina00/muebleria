<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContactus extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->integer('telephone');
			$table->integer('cellphone');
			$table->string('address');
			$table->email('email');
			$table->text('message');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('contactus');
	}

}
