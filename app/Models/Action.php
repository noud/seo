<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\sameAs;

class Action extends \App\Models\Base\Action
{
	use JsonLd;
	use sameAs;

	public function getSchemaOrgSchemaAttribute()
	{
		$additional_name = $this->additional_name ? $this->additional_name : null;

		return $this->getSchemaOrgNodeIdentifierSchemaAttribute('WebSite', true)
			// Action
			->target($this->target->urlTemplate)
			->query_inputs('queryInputs', $this->getSchemaOrgQueryInputs())
		;
	}

	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}

	public function queryInput()
	{
		return $this->hasMany(\App\Models\PropertyValueSpecification::class, 'target');
	}
}
