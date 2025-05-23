<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Apartments extends Model
{

	protected $table = 'apartments';
	public $timestamps = true;
	protected $fillable = [
		'apartmentNumber'
	];
}
