<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{

	public function up()
	{
		Schema::create('buildings', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->text('description');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('buildings');
	}
}
