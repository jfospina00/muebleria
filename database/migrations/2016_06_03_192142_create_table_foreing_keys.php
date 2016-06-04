<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableForeingKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Foreign Products
		Schema::table("products",function(Blueprint $table){

			$table->integer('category_id')->unsigned();
  			$table->foreign('category_id')->references('id')->on('categories');

			$table->integer('offer_id')->unsigned();
  			$table->foreign('offer_id')->references('id')->on('offers');

  			$table->integer('imageProduct_id')->unsigned();
  			$table->foreign('imageProduct_id')->references('id')->on('imageProducts');

  			$table->integer('state_id')->unsigned();
  			$table->foreign('state_id')->references('id')->on('states');

		});
		// Foreign Users
		Schema::table("users",function(Blueprint $table){

			$table->integer('state_id')->unsigned()->unable();
  			$table->foreign('state_id')->references('id')->on('states');

		});
		// Foreign Orders
		Schema::table("orders",function(Blueprint $table){

			$table->integer('state_id')->unsigned();
  			$table->foreign('state_id')->references('id')->on('states');

			$table->integer('user_id')->unsigned();
  			$table->foreign('user_id')->references('id')->on('users');

  			$table->integer('product_id')->unsigned();
  			$table->foreign('product_id')->references('id')->on('products');

		});
		// Foreign ProductsToOffers
		Schema::table("users",function(Blueprint $table){

			$table->integer('product_id')->unsigned();
  			$table->foreign('product_id')->references('id')->on('products');

  			$table->integer('offer_id')->unsigned();
  			$table->foreign('offer_id')->references('id')->on('offers');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
