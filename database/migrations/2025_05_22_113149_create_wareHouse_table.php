<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWareHouseTable extends Migration
{

	public function up()
	{
		Schema::create('wareHouse', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->integer('idType')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('whereHouse');
	}
}
