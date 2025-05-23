<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{

	public function up()
	{
		Schema::create('notifications', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 100);
			$table->string('body', 100);
			$table->integer('idUser')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('notifications');
	}
}
