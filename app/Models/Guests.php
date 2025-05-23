<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Guests extends Model
{

	protected $table = 'guests';
	public $timestamps = true;
	protected $fillable = [
		'userId',
		'visitorTypeId',
		'description',
		'state',
		'rejectionReason',
		'approvedById'
	];
}
