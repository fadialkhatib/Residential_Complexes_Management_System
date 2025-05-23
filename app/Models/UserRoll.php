<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class UserRoll extends Model
{

	protected $table = 'userRoll';
	public $timestamps = true;
	protected $fillable = [
		'idUser',
		'idRoll'
	];
}
