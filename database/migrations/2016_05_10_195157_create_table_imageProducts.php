<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImageProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imageProducts', function(Blueprint $table)
		{
			$table->increments('id');
			//Foreign Key
  			$table->integer('product_id')->unsigned();
  			$table->foreign('product_id')->references('id')->on('products');
			//----------------------------------------------------------------
			$table->timestamps();
		});
	}
	public function down()
	{
		Schema::drop('imageProducts');
	}

}
