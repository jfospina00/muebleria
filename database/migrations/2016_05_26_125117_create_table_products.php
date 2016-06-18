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
			$table->text('imageProduct1');;
			$table->text('imageProduct2')->nullable();
			$table->text('imageProduct3')->nullable();
			$table->text('imageProduct4')->nullable();
			$table->text('imageProduct5')->nullable();
			$table->timestamps();
		});
	}
	public function down()
	{
		Schema::drop('products');
	}

}