<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class TypeWareHouse extends Model
{

	protected $table = 'typeWareHouse';
	public $timestamps = true;
	protected $fillable = [
		'name',
		'description'

	];
}
