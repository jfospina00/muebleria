<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOffers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_offer');
			$table->string('description_offer');
			$table->integer('discount');
			$table->date('start_date');
			$table->date('finish_date');
			$table->timestamps();

		});

	}
	public function down()
	{
		Schema::drop('offers');
	}

}
