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
		$organizationEmployees = $this->employees()->get();
		$employees = [];
		foreach ($organizationEmployees as $organizationEmployee) {
			$employees[] = $organizationEmployee->role->person->schema_org_schema;
		}

		$organizationFounders = $this->founders()->get();
		$founders = [];
		foreach ($organizationFounders as $organizationFounder) {
			$founders[] = $organizationFounder->role->person->schema_org_schema;
		}

		$urlName = $this->url ? $this->url->name : null;

		$organization = Schema::Organization()
			->setProperty('url', isset($urlName) ? $urlName : null)
			->sameAs($this->getSchemaOrgsameAs())
			->setProperty('@id', isset($urlName) ? $urlName . '#organization' : null)
			->name($this->name)
			->setProperty('logo', $this->logo ? $this->logo : null)
			->setProperty('telephone', $this->telephone ? $this->telephone : null)
			->employees($employees ? $employees : null)
			->founders($founders ? $founders : null)
		;
		return $organization;
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
