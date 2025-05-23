<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

	public function up()
	{
		Schema::create('products', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->text('description');
			$table->boolean('stock');
			$table->decimal('price');
			$table->integer('idType')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}
