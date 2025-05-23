<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderUserTable extends Migration
{

	public function up()
	{
		Schema::create('orderUser', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('idUser')->unsigned();
			$table->integer('idStore')->unsigned();
			$table->boolean('type');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('orderUser');
	}
}
