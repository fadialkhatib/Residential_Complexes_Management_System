<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderStoreTable extends Migration
{

	public function up()
	{
		Schema::create('orderStore', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('idStore')->unsigned();
			$table->integer('idWareHouse')->unsigned();
			$table->boolean('state');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('orderStore');
	}
}
