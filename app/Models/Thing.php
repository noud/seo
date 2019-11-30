<?php

namespace App\Models;

class Thing extends \App\Models\Base\Thing
{
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
