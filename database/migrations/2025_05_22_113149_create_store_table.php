<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreTable extends Migration
{

	public function up()
	{
		Schema::create('store', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('idType')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('store');
	}
}
