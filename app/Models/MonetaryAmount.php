<?php

namespace App\Models;

class MonetaryAmount extends \App\Models\Base\MonetaryAmount
{
	protected $fillable = [
		'currency',
		'value_id'
	];
}
