<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\sameAs;
use App\Models\Traits\telephone;

class Person extends \App\Models\Base\Person
{
	use JsonLd;
	use sameAs;
	use telephone;
	
	protected $fillable = [
		'given_name',
		'family_name',
		'email',
		'telephone'
	];

	public function getSchemaOrgSchemaAttribute()
	{
		$additional_name = $this->additional_name ? $this->additional_name : null;

		return $this->getSchemaOrgNodeIdentifierSchemaAttribute('Person', true)
			->additionalName($additional_name)
			->email($this->email)
			->familyName($this->family_name)
			->givenName($this->given_name)
			->telephone($this->telephone)
			// Thing
			->setProperty('sameAs', $this->getSchemaOrgsameAs())
		;
	}

	public function getNameAttribute()
	{
		return trim($this->given_name . ' '. $this->given_name) . ' ' . $this->family_name;
	}

	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}

	// Node Identifier

	public function getSchemaOrgNodeIdentifierSchema()
	{
		return $this->getSchemaOrgNodeIdentifierSchemaAttribute('Person');
	}
}
