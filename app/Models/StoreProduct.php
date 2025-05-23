<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class StoreProduct extends Model
{

	protected $table = 'storeProduct';
	public $timestamps = true;
	protected $fillable = [
		'idStore',
		'idProduct',
		'count'
	];
}
