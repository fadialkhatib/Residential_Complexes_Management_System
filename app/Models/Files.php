<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{

	protected $table = 'Files';
	public $timestamps = true;
	protected $fillable = [
		'name',
		'path'
	];
}
