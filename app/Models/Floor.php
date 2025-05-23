<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{

	protected $table = 'floor';
	public $timestamps = true;
	protected $fillable = [
		'floorNumber'
	];
}
