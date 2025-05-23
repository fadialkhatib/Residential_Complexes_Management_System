<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{

	protected $table = 'typeProduct';
	public $timestamps = true;
	protected $fillable = ['name'];
}
