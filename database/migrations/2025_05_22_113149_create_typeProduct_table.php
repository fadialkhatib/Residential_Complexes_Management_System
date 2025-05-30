<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeProductTable extends Migration
{

	public function up()
	{
		Schema::create('typeProduct', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('typeProduct');
	}
}
