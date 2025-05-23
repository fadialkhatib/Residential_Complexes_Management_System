<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserImageTable extends Migration
{

	public function up()
	{
		Schema::create('userImage', function (Blueprint $table) {
			$table->integer('idUser')->unsigned();
			$table->integer('idFile')->unsigned();
			$table->enum('TypeImage', array('profile', 'Apartments', 'building'));
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('userImage');
	}
}
