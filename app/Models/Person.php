<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\sameAs;
use App\Models\Traits\telephone;
use Spatie\SchemaOrg\Schema;

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
		$person = Schema::Person()
			->givenName($this->given_name)
			->familyName($this->family_name)
			->email($this->email)
			->telephone($this->telephone)
			->sameAs($this->getSchemaOrgsameAs())
		;
		return $person;
	}

	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}
}
