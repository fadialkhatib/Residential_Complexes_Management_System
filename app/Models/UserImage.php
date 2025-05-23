<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class UserImage extends Model
{

	protected $table = 'userImage';
	public $timestamps = true;
	protected $fillable = [
		'idUser',
		'idFile',
		'TypeImage',
	];
}
