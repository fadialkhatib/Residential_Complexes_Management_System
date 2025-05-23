<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProductTable extends Migration
{

	public function up()
	{
		Schema::create('userProduct', function (Blueprint $table) {
			$table->integer('idOrder')->unsigned();
			$table->integer('idProduct')->unsigned();
			$table->integer('count');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('userProduct');
	}
}
