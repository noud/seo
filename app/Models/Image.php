<?php

namespace App\Models;

class Image extends \App\Models\Base\Image
{
	protected $table = 'image';
	
		// return $this->hasOne(\App\Models\SameA::class);
	protected $fillable = [
		'id',
		'thing_id',
		'image'
	];
}
