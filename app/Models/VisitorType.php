<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorType extends Model
{

	protected $table = 'visitorType';
	public $timestamps = true;
	protected $fillable = [
		'name',
		'description',
	];
}
