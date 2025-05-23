<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRollTable extends Migration
{

	public function up()
	{
		Schema::create('userRoll', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('idUser')->unsigned();
			$table->integer('idRoll')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('userRoll');
	}
}
