<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ProductWareHouse extends Model
{

	protected $table = 'productWareHouse';
	public $timestamps = true;
	protected $fillable = [
		'idWareHouse',
		'idProduct',
		'count'
	];
}
