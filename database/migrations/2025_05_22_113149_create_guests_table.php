<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{

	public function up()
	{
		Schema::create('guests', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('userId')->unsigned();
			$table->integer('visitorTypeId')->unsigned();
			$table->text('description');
			$table->boolean('state');
			$table->text('rejectionReason');
			$table->integer('approvedById')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('guests');
	}
}
