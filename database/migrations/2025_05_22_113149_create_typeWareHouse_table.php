<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeWareHouseTable extends Migration
{

	public function up()
	{
		Schema::create('typeWareHouse', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->text('description');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('typeWhereHouse');
	}
}
