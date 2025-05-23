<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{

	protected $table = 'userProduct';
	public $timestamps = true;
	protected $fillable = [
		'idOrder',
		'idProduct',
		'count'
	];
}
