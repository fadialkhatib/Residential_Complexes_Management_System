<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreProductTable extends Migration
{

	public function up()
	{
		Schema::create('storeProduct', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('idStore')->unsigned();
			$table->integer('idProduct')->unsigned();
			$table->bigInteger('count');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('storeProdect');
	}
}
