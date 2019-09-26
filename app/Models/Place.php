<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use Spatie\SchemaOrg\Schema;

class Place extends \App\Models\Base\Place
{
	use JsonLd;

	protected $fillable = [
		'address_id',
		'geo_id'
	];

	public function getSchemaOrgSchemaAttribute()
	{
		$postalAddressSchema = $this->postal_address ? $this->postal_address->schema_org_schema : null;

		$place = Schema::Place()
			->address($postalAddressSchema)
		;
		return $place;
	}
	
	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}
}
