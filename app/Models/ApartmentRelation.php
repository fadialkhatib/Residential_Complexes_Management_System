<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ApartmentRelation extends Model
{

	protected $table = 'apartmentRelation';
	public $timestamps = true;
	protected $fillable = [
		'idFloor',
		'idApartments',
		'idBuilding',
		'idType',
	];
}
