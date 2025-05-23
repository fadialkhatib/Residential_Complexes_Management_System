<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{

	protected $table = 'notifications';
	public $timestamps = true;
	protected $fillable = [
		'title',
		'body',
		'idUser'
	];
}
