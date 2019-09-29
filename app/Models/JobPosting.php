<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\sameAs;

class Organization extends \App\Models\Base\Organization
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
		if (is_numeric($this->base_salary)) {
			$value = Schema::QuantitativeValue()->unitText('MONTH')->value($this->salary);
			$baseSalary = Schema::MonetaryAmount()->currency('EUR')->value($value);
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
			'FULL_TIME',
            'PART_TIME',
            'CONTRACTOR',
            'INTERN',
			'TEMPORARY',
		];
		$employmentType = $employmentTypes[$this->employment_type];
		// Organization
		// $person = null;
		// if ($this->responsible_user) {
		// 	$person = Schema::Person()
		// 		->givenName($this->responsible_user->profile->first_name)
		// 		->familyName($this->responsible_user->profile->surname)
		// 		->email($this->responsible_user->email)
		// 		->telephone($this->responsible_user->profile->tel);
		// }
		$hiringOrganization = null;
		if ($this->organization) {
			$hiringOrganization = Schema::Organization()
				->employee($this->organization->getSchemaOrgEmployee())
				->logo($this->organization->logo)
				->telephone($this->organization->telephone)
				// Thing
				->url($this->organization->thing->url)
				->name($this->organization->thing->name)
			;
		}
		$jobLocation = null;
		if ($this->job_location) {
			$address = Location::findAddressByPlaceId($this->job_location);
			if ($address) {
				$address = Schema::PostalAddress()
					->streetAddress($address['AddressLine1'])
					->addressLocality($address['City'])
					->addressRegion($address['Region'])
					->postalCode($address['PostalCode'])
					->addressCountry($address['Country']);
				$jobLocation = Schema::Place()->address($address);
			}
		}

		return $this->getSchemaOrgNodeIdentifierSchemaAttribute('JobPosting', true)
			->baseSalary($baseSalary)
			->datePosted($datePosted)
			->description($description)
			->educationRequirements($educationRequirements)
			->employmentType($employmentType)
			->hiringOrganization($hiringOrganization)
			->jobLocation($jobLocation)
			->title($title)
			->validThrough($validThrough)
		;
	}

	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}
}
