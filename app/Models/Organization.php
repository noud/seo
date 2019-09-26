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
		$legal_name = $this->legal_name ? $this->legal_name : null;
		$logo = $this->logo ? $this->logo : null;
		$placeSchema = $this->place ? $this->place->schema_org_schema : null;
		$postalAddressSchema = $this->postal_address ? $this->postal_address->schema_org_schema : null;
		$telephone = $this->telephone ? $this->telephone : null;
		// Thing
		$alternate_name = $this->thing && $this->thing->alternate_name ? $this->thing->alternate_name : null;
		$url = $this->thing && $this->thing->url && $this->thing->url->name ? $this->thing->url->name : null;

		$organization = Schema::Organization()
			->setProperty('@id', isset($url) ? $url . '/#organization' : null)
			->address($postalAddressSchema)
			->email($email)
			->employees($this->getSchemaOrgPersonsHavingRole('employees'))
			->founders($this->getSchemaOrgPersonsHavingRole('founders'))
			->legalName($legal_name)
			->location($placeSchema)
			->logo($logo)
			->telephone($telephone)
			// Thing
			->setProperty('alternateName', $alternate_name)
			->name($this->thing->name)
			->setProperty('sameAs', $this->getSchemaOrgsameAs())
			->setProperty('url', $url)
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
