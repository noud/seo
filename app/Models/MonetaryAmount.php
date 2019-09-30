<?php

namespace App\Models;

class MonetaryAmount extends \App\Models\Base\MonetaryAmount
{
	protected $fillable = [
		'currency',
		'value_id'
	];

	public function value()
	{
		return $this->belongsTo(\App\Models\QuantitativeValue::class, 'value_id');
	}
}
