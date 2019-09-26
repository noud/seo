<?php

namespace App\Models;

class GeoCoordinate extends \App\Models\Base\GeoCoordinate
{
	protected $fillable = [
		'latitude',
		'longitude'
	];
}
