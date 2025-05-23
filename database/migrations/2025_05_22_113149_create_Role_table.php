<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleTable extends Migration
{

	public function up()
	{
		Schema::create('Role', function (Blueprint $table) {
			$table->increments('id');
			$table->string('roleName', 100);
			$table->string('description', 100)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Role');
	}
}
