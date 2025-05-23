<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductStoreTable extends Migration
{

	public function up()
	{
		Schema::create('productStore', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('idOrder')->unsigned();
			$table->integer('idProduct')->unsigned();
			$table->integer('count');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('productStore');
	}
}
