<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\sameAs;
use Spatie\SchemaOrg\Schema;

class Organization extends \App\Models\Base\Organization
{
	use JsonLd;
	use sameAs;
	
	protected $fillable = [
		'name',
		'logo',
		'telephone'
	];

	public function getSchemaOrgSchemaAttribute()
	{
		$url = $this->thing->url ? $this->thing->url->name : null;

		$organization = Schema::Organization()
			->setProperty('url', isset($url) ? $url : null)
			->sameAs($this->getSchemaOrgsameAs())
			->setProperty('@id', isset($url) ? $url . '#organization' : null)
			->name($this->thing->name)
			->setProperty('logo', $this->logo ? $this->logo : null)
			->setProperty('telephone', $this->telephone ? $this->telephone : null)
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
