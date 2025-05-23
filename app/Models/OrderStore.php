<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class OrderStore extends Model
{

	protected $table = 'orderStore';
	public $timestamps = true;
	protected $fillable = [
		'idStore',
		'idWareHouse',
		'state'
	];
}
