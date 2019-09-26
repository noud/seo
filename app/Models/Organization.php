<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\sameAs;
use App\Models\Traits\telephone;
use Spatie\SchemaOrg\Schema;

class Organization extends \App\Models\Base\Organization
{
	use JsonLd;
	use sameAs;
	use telephone;
	
	protected $fillable = [
		'email',
		'name',
		'logo',
		'telephone',
		'url',
	];

	public function getSchemaOrgSchemaAttribute()
	{
		$email = $this->email ? $this->email : null;
		$url = $this->thing && $this->thing->url && $this->thing->url->name ? $this->thing->url->name : null;
		$logo = $this->logo ? $this->logo : null;
		$telephone = $this->telephone ? $this->telephone : null;
		$postalAddressSchema = $this->postal_address ? $this->postal_address->schema_org_schema : null;
		$placeSchema = $this->place ? $this->place->schema_org_schema : null;

		$organization = Schema::Organization()
			->address($postalAddressSchema)
			->location($placeSchema)
			->email($email)
			->setProperty('url', $url)
			->setProperty('sameAs', $this->getSchemaOrgsameAs())
			->setProperty('@id', isset($url) ? $url . '/#organization' : null)
			->name($this->thing->name)
			->logo($logo)
			->telephone($telephone)
			->employees($this->getSchemaOrgPersonsHavingRole('employees'))
			->founders($this->getSchemaOrgPersonsHavingRole('founders'))
		;
		return $organization;
	}

	public function getSchemaOrgPersonsHavingRole(string $role)
	{
		$organizationPersonsHavingRole = $this->$role()->get();
		$persons = null;
		foreach ($organizationPersonsHavingRole as $organizationPersonHavingRole) {
			$persons[] = $organizationPersonHavingRole->role->person->schema_org_schema;
		}
		return $persons;
	}

	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}

	public function employees()
	{
		return $this->hasMany(\App\Models\Employee::class);
	}

	public function founders()
	{
		return $this->hasMany(\App\Models\Founder::class);
	}
}
