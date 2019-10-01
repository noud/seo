<?php

namespace App\Models;

class PropertyValue extends \App\Models\Base\PropertyValue
{
	protected $fillable = [
		'value',
		'thing_id'
	];
}
