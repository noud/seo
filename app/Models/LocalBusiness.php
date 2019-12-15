<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\sameAs;
use App\Models\Traits\telephone;
use Spatie\SchemaOrg\Schema;

class LocalBusiness extends \App\Models\Base\LocalBusiness
{
	use JsonLd;
	// use sameAs;
	// use telephone;
	
	protected $fillable = [
		'organization_id',
		'price_range',
	];

	public function getSchemaOrgSchemaAttribute()
	{
		$email = $this->organization->email ? $this->organization->email : null;
		$legal_name = $this->organization->legal_name ? $this->organization->legal_name : null;
		$logo = $this->organization->logo ? $this->organization->logo : null;
		$placeSchema = $this->organization->place ? $this->organization->place->schema_org_schema : null;
		$postalAddressSchema = $this->organization->postal_address ? $this->organization->postal_address->schema_org_schema : null;
		$telephone = $this->organization->telephone ? $this->organization->telephone : null;
		// Place
		$geo = Schema::GeoCoordinates()
			->latitude($this->organization->place->geo_coordinate->latitude)
			->longitude($this->organization->place->geo_coordinate->longitude);
		// Thing
		$alternate_name = $this->organization->thing && $this->organization->thing->alternate_name ? $this->organization->thing->alternate_name : null;

		return $this->getSchemaOrgNodeIdentifierSchemaAttribute('LocalBusiness', true)
			->priceRange($this->price_range)
			// Organization
			->address($postalAddressSchema)
			->geo($geo)	// optional
			->email($email)
			->legalName($legal_name)
			->location($placeSchema)
			->logo($logo)
			->telephone($telephone)
			// Thing
			->setProperty('alternateName', $alternate_name)
			->setProperty('image', $this->organization->thing->getSchemaOrgimage())
			->name($this->organization->thing->name)
			// ->setProperty('sameAs', $this->getSchemaOrgsameAs())
			->url($this->organization->thing->url)
		;
	}

	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}
}
