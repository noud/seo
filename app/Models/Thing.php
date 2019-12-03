<?php

namespace App\Models;

use App\Models\Traits\image;

class Thing extends \App\Models\Base\Thing
{
	use image;

	public function identifier()
	{
		return $this->belongsTo(\App\Models\PropertyValue::class, 'identifier_id');
	}

	public function image()
	{
		return $this->hasMany(\App\Models\Image::class);
	}
	
	public function same_as()
	{
		return $this->hasMany(\App\Models\SameA::class);
	}
}
