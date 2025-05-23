<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class WareHouse extends Model
{

	protected $table = 'wareHouse';
	public $timestamps = true;
	protected $fillable = [
		'name',
		'idType'
	];
}
