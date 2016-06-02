<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_product');
			$table->string('material');
			$table->integer('price');
			$table->text('description_product');

			$table->integer('category_id')->unsigned();
  			$table->foreign('category_id')->references('id')->on('categories');

			$table->integer('offer_id')->unsigned();
  			$table->foreign('offer_id')->references('id')->on('offers');

  			$table->integer('state_id')->unsigned();
  			$table->foreign('state_id')->references('id')->on('states');

			$table->timestamps();
		});
	}
	public function down()
	{
		Schema::drop('products');
	}

}