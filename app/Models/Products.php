<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

	protected $table = 'products';
	public $timestamps = true;
	protected $fillable = [
		'name',
		'description',
		'stock',
		'price',
		'idType'
	];
}
