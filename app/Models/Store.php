<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

	protected $table = 'store';
	public $timestamps = true;
	protected $fillable = [
		'name',
		'idType'
	];
}
