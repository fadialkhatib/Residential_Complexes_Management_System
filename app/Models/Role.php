<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

	protected $table = 'Role';
	public $timestamps = true;
	protected $fillable = [
		'roleName',
		'description'
	];
}
