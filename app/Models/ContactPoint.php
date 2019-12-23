<?php

namespace App\Models;

class ContactPoint extends \App\Models\Base\ContactPoint
{
	protected $fillable = [
		'contact_type',
		'email',
		'telephone',
		'owner_id',
		'owner_type'
	];

	public function owner()
	{
		return $this->morphTo();
	}
}
