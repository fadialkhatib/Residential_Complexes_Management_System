<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class OrderUser extends Model
{

	protected $table = 'orderUser';
	public $timestamps = true;
	protected $fillable =
	[
		'idUser',
		'idStore',
		'type'
	];
}
