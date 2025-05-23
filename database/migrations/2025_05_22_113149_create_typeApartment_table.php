<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeApartmentTable extends Migration
{

	public function up()
	{
		Schema::create('typeApartment', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('typeApartment');
	}
}
