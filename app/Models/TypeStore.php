<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class TypeStore extends Model
{

	protected $table = 'typeStore';
	public $timestamps = true;
	protected $fillable = [
		'name',
		'description'
	];
}
