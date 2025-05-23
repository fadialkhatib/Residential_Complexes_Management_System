<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Buildings extends Model
{

	protected $table = 'buildings';
	public $timestamps = true;
	protected $fillable = [
		'name',
		'description'
	];
}
