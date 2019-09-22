<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use Spatie\SchemaOrg\Schema;

class Person extends \App\Models\Base\Person
{
	use JsonLd;
	
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
		;
		return $person;
	}

	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}
}
