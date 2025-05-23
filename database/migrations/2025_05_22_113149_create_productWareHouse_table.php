<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductWareHouseTable extends Migration
{

	public function up()
	{
		Schema::create('productWareHouse', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('idWareHouse')->unsigned();
			$table->integer('idProduct')->unsigned();
			$table->bigInteger('count');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('productWareHous');
	}
}
