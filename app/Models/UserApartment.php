<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class UserApartment extends Model
{

	protected $table = 'userApartment';
	public $timestamps = true;
	protected $fillable = [
		'idUser',
		'idApartments',
		'isPrimary',
	];
}
