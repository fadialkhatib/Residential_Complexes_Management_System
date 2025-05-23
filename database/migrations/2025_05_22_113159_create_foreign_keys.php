<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{

	public function up()
	{
		Schema::table('userRoll', function (Blueprint $table) {
			$table->foreign('idUser')->references('id')->on('users')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('userRoll', function (Blueprint $table) {
			$table->foreign('idRoll')->references('id')->on('Role')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('guests', function (Blueprint $table) {
			$table->foreign('userId')->references('id')->on('users')
				->onDelete('restrict')
				->onUpdate('cascade');
		});
		Schema::table('guests', function (Blueprint $table) {
			$table->foreign('visitorTypeId')->references('id')->on('visitorType')
				->onDelete('restrict')
				->onUpdate('cascade');
		});
		Schema::table('guests', function (Blueprint $table) {
			$table->foreign('approvedById')->references('id')->on('users')
				->onDelete('restrict')
				->onUpdate('restrict');
		});
		Schema::table('userImage', function (Blueprint $table) {
			$table->foreign('idUser')->references('id')->on('users')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('userImage', function (Blueprint $table) {
			$table->foreign('idFile')->references('id')->on('Files')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('apartmentRelation', function (Blueprint $table) {
			$table->foreign('idFloor')->references('id')->on('floor')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('apartmentRelation', function (Blueprint $table) {
			$table->foreign('idApartments')->references('id')->on('apartments')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('apartmentRelation', function (Blueprint $table) {
			$table->foreign('idBuilding')->references('id')->on('buildings')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('apartmentRelation', function (Blueprint $table) {
			$table->foreign('idType')->references('id')->on('typeApartment')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('userApartment', function (Blueprint $table) {
			$table->foreign('idUser')->references('id')->on('users')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('userApartment', function (Blueprint $table) {
			$table->foreign('idApartments')->references('id')->on('apartmentRelation')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('notifications', function (Blueprint $table) {
			$table->foreign('idUser')->references('id')->on('users')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('wareHouse', function (Blueprint $table) {
			$table->foreign('idType')->references('id')->on('typeWareHouse')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('products', function (Blueprint $table) {
			$table->foreign('idType')->references('id')->on('typeProduct')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('productWareHouse', function (Blueprint $table) {
			$table->foreign('idWareHouse')->references('id')->on('wareHouse')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('productWareHouse', function (Blueprint $table) {
			$table->foreign('idProduct')->references('id')->on('products')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('store', function (Blueprint $table) {
			$table->foreign('idType')->references('id')->on('typeStore')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('storeProduct', function (Blueprint $table) {
			$table->foreign('idStore')->references('id')->on('store')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('storeProduct', function (Blueprint $table) {
			$table->foreign('idProduct')->references('id')->on('products')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('orderStore', function (Blueprint $table) {
			$table->foreign('idStore')->references('id')->on('store')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('orderStore', function (Blueprint $table) {
			$table->foreign('idWareHouse')->references('id')->on('wareHouse')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('productStore', function (Blueprint $table) {
			$table->foreign('idOrder')->references('id')->on('orderStore')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('productStore', function (Blueprint $table) {
			$table->foreign('idProduct')->references('id')->on('products')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('orderUser', function (Blueprint $table) {
			$table->foreign('idUser')->references('id')->on('users')
				->onDelete('restrict')
				->onUpdate('restrict');
		});
		Schema::table('orderUser', function (Blueprint $table) {
			$table->foreign('idStore')->references('id')->on('store')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('userProduct', function (Blueprint $table) {
			$table->foreign('idOrder')->references('id')->on('orderUser')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('userProduct', function (Blueprint $table) {
			$table->foreign('idProduct')->references('id')->on('products')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('userRoll', function (Blueprint $table) {
			$table->dropForeign('userRoll_idUser_foreign');
		});
		Schema::table('userRoll', function (Blueprint $table) {
			$table->dropForeign('userRoll_idRoll_foreign');
		});
		Schema::table('guests', function (Blueprint $table) {
			$table->dropForeign('guests_userId_foreign');
		});
		Schema::table('guests', function (Blueprint $table) {
			$table->dropForeign('guests_visitorTypeId_foreign');
		});
		Schema::table('guests', function (Blueprint $table) {
			$table->dropForeign('guests_approvedById_foreign');
		});
		Schema::table('userImage', function (Blueprint $table) {
			$table->dropForeign('userImage_idUser_foreign');
		});
		Schema::table('userImage', function (Blueprint $table) {
			$table->dropForeign('userImage_idFile_foreign');
		});
		Schema::table('apartmentRelation', function (Blueprint $table) {
			$table->dropForeign('apartmentRelation_idFloor_foreign');
		});
		Schema::table('apartmentRelation', function (Blueprint $table) {
			$table->dropForeign('apartmentRelation_idApartments_foreign');
		});
		Schema::table('apartmentRelation', function (Blueprint $table) {
			$table->dropForeign('apartmentRelation_idBuilding_foreign');
		});
		Schema::table('apartmentRelation', function (Blueprint $table) {
			$table->dropForeign('apartmentRelation_idType_foreign');
		});
		Schema::table('userApartment', function (Blueprint $table) {
			$table->dropForeign('userApartment_idUser_foreign');
		});
		Schema::table('userApartment', function (Blueprint $table) {
			$table->dropForeign('userApartment_idApartments_foreign');
		});
		Schema::table('notifications', function (Blueprint $table) {
			$table->dropForeign('notifications_idUser_foreign');
		});
		Schema::table('wareHouse', function (Blueprint $table) {
			$table->dropForeign('wareHouse_idType_foreign');
		});
		Schema::table('products', function (Blueprint $table) {
			$table->dropForeign('products_idType_foreign');
		});
		Schema::table('productWareHouse', function (Blueprint $table) {
			$table->dropForeign('productWareHouse_idWareHouse_foreign');
		});
		Schema::table('productWareHouse', function (Blueprint $table) {
			$table->dropForeign('productWareHouse_idProdect_foreign');
		});
		Schema::table('store', function (Blueprint $table) {
			$table->dropForeign('store_idType_foreign');
		});
		Schema::table('storeProduct', function (Blueprint $table) {
			$table->dropForeign('storeProduct_idStore_foreign');
		});
		Schema::table('storeProduct', function (Blueprint $table) {
			$table->dropForeign('storeProduct_idProduct_foreign');
		});
		Schema::table('orderStore', function (Blueprint $table) {
			$table->dropForeign('orderStore_idStore_foreign');
		});
		Schema::table('orderStore', function (Blueprint $table) {
			$table->dropForeign('orderStore_idWareHouse_foreign');
		});
		Schema::table('productStore', function (Blueprint $table) {
			$table->dropForeign('productStore_idOrder_foreign');
		});
		Schema::table('productStore', function (Blueprint $table) {
			$table->dropForeign('productStore_idProduct_foreign');
		});
		Schema::table('orderUser', function (Blueprint $table) {
			$table->dropForeign('orderUser_idUser_foreign');
		});
		Schema::table('orderUser', function (Blueprint $table) {
			$table->dropForeign('orderUser_idStore_foreign');
		});
		Schema::table('userProduct', function (Blueprint $table) {
			$table->dropForeign('userProduct_idOrder_foreign');
		});
		Schema::table('userProduct', function (Blueprint $table) {
			$table->dropForeign('userProduct_idProduct_foreign');
		});
	}
}
