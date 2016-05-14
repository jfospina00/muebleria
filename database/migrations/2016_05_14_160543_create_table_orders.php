<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_position');
			$table->double('total_priece');
			//Foreign Key
			$table->integer('state_id')->unsigned();
  			$table->foreign('state_id')->references('id')->on('states');
  			//----------------------------------------------------------------
			$table->integer('user_id')->unsigned();
  			$table->foreign('user_id')->references('id')->on('users');
  			//----------------------------------------------------------------
  			$table->integer('product_id')->unsigned();
  			$table->foreign('product_id')->references('id')->on('products');
			//Timestamps
			$table->timestamps();
		});
	}
	public function down()
	{
		Schema::drop('orders');
	}

}