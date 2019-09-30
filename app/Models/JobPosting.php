<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\sameAs;
use Spatie\SchemaOrg\Schema;

class JobPosting extends \App\Models\Base\JobPosting
{
	use JsonLd;
	use sameAs;
	
	protected $fillable = [
		'email',
		'name',
		'logo',
		'telephone',
		'url',
	];

	public function getSchemaOrgSchemaAttribute()
	{
		$baseSalary = null;
		if ($this->base_salary) {
			$value = Schema::QuantitativeValue()->unitText($this->base_salary->value->unit_text)->value($this->base_salary->value->value);
			$baseSalary = Schema::MonetaryAmount()->currency($this->base_salary->currency)->value($value);
		}
		$educationRequirements = null;
		if ($this->minimum_educational_level && $this->maximum_educational_level) {
			$educationRequirements = [
				$this->minimum_educational_level->name,
				// @todo and in between
				$this->maximum_educational_level->name,
			];
		};
		// @todo ENUM
		$employmentTypes = [
			'full-time',
			'part-time',
			'contract',
			'temporary',
			'seasonal',
			'internship',
		];
		$employmentType = isset($this->employment_type) ? $employmentTypes[$this->employment_type] : null;
		// Organization
		// $person = null;
		// if ($this->responsible_user) {
		// 	$person = Schema::Person()
		// 		->givenName($this->responsible_user->profile->first_name)
		// 		->familyName($this->responsible_user->profile->surname)
		// 		->email($this->responsible_user->email)
		// 		->telephone($this->responsible_user->profile->tel);
		// }
		$hiringOrganization = null;	// @todo check if manditory
		if ($this->organization) {
			$hiringOrganization = Schema::Organization()
				// ->employee($this->organization->getSchemaOrgEmployee())
				->logo($this->organization->logo)
				->telephone($this->organization->telephone)
				// Thing
				->url($this->organization->thing->url)
				->name($this->organization->thing->name)
			;
		}
		$jobLocation = null;	// @todo check if manditory
		if ($this->job_location) {
			$address = Schema::PostalAddress()
				->streetAddress($this->place->postal_address->street_address)
				->addressLocality($this->place->postal_address->address_locality)
				->addressRegion($this->place->postal_address->address_region)	// @todo Google advised
				->postalCode($this->place->postal_address->postal_code)
				->addressCountry($this->place->postal_address->address_country);
			$jobLocation = Schema::Place()->address($address);
		}
		$jobLocationType = [
			'TELECOMMUTE',	// Schema.org
			'remote',	// Google
		];

		return $this->getSchemaOrgNodeIdentifierSchemaAttribute('JobPosting', true)
			->baseSalary($baseSalary)	// Google advised
			->datePosted($this->date_posted)
			// ->educationRequirements($educationRequirements)
			->employmentType($employmentType)
			->hiringOrganization($hiringOrganization)
			->jobLocation($jobLocation)
			->title($this->title)	// jobTitle
			->validThrough($this->valid_through)	// Google advised
			// Thing
			->description($this->thing->description)
			->name($this->thing->name)
		;
	}
	
	public function base_salary()
	{
		return $this->monetary_amount();
	}

	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}
}
