<?php

namespace App\Models;

class PropertyValueSpecification extends \App\Models\Base\PropertyValueSpecification
{
	protected $fillable = [
		'value_name',
		'value_required'
	];
}
