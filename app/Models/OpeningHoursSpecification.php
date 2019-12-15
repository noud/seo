<?php

namespace App\Models;

class OpeningHoursSpecification extends \App\Models\Base\OpeningHoursSpecification
{
	protected $fillable = [
		'closes',
		'day_of_week',
		'opens',
		'place_id'
	];

	protected $dates = [
	];
}
