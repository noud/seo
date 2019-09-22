<?php

namespace App\Models;

class SameA extends \App\Models\Base\SameA
{
	protected $table = 'same_as';
	
	protected $fillable = [
		'id',
		'organization_id',
		'url_id'
	];
}
