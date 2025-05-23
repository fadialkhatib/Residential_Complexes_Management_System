<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{

	public function up()
	{
		Schema::create('apartments', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('apartmentNumber');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('apartments');
	}
}
