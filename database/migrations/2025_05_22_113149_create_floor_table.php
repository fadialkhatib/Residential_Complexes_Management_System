<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFloorTable extends Migration
{

	public function up()
	{
		Schema::create('floor', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('floorNumber');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('floor');
	}
}
