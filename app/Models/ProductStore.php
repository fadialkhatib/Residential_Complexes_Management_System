<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ProductStore extends Model
{

	protected $table = 'productStore';
	public $timestamps = true;
	protected $fillable = [
		'idOrder',
		'idProduct',
		'count'
	];
}
