<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class TypeApartment extends Model
{

	protected $table = 'typeApartment';
	public $timestamps = true;
	protected $fillable = ['name'];
}
