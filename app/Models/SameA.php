<?php

namespace App\Models;

class SameA extends \App\Models\Base\SameA
{
	protected $table = 'same_as';
	
	protected $fillable = [
		'id',
		'thing_id',
		'url_id'
	];
}
