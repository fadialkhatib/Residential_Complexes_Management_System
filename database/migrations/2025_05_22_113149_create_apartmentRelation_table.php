<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentRelationTable extends Migration
{

	public function up()
	{
		Schema::create('apartmentRelation', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('idFloor')->unsigned();
			$table->integer('idApartments')->unsigned();
			$table->integer('idBuilding')->unsigned();
			$table->integer('idType')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('apartmentRelation');
	}
}
