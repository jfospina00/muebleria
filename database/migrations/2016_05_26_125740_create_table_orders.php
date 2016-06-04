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
			$table->double('total');
			$table->double('subtotal');
			$table->double('unit_price');
			$table->double('discount_price');
			$table->integer('quatity');
			//Timestamps
			$table->timestamps();
		});
	}
	public function down()
	{
		Schema::drop('orders');
	}

}