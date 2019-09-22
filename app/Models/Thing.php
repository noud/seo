<?php

namespace App\Models;

class Thing extends \App\Models\Base\Thing
{
	public function same_as()
	{
		// return $this->hasOne(\App\Models\SameA::class);
		return $this->hasMany(\App\Models\SameA::class);
	}
}
