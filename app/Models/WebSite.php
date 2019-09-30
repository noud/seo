<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\actions;
use Spatie\SchemaOrg\Schema;

class WebSite extends \App\Models\Base\WebSite
{
	use JsonLd;
	use actions;

	protected $fillable = [
		'thing_id'
	];

	public function getSchemaOrgSchemaAttribute()
	{
		return $this->getSchemaOrgNodeIdentifierSchemaAttribute('WebSite', true)
			// Thing
			->name($this->site->thing->name)
		;
	}

	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}

	public function action()
	{
		return $this->hasMany(\App\Models\Action::class);
	}
}
