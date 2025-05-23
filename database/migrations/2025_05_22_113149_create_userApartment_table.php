<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserApartmentTable extends Migration
{

	public function up()
	{
		Schema::create('userApartment', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('idUser')->unsigned();
			$table->integer('idApartments')->unsigned();
			$table->boolean('isPrimary');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('userApartment');
	}
}
