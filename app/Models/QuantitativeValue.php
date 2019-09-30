<?php

namespace App\Models;

class QuantitativeValue extends \App\Models\Base\QuantitativeValue
{
	protected $fillable = [
		'unit_text',
		'value'
	];
}
