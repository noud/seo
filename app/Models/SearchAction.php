<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\sameAs;

class SearchAction extends \App\Models\Base\SearchAction
{
	use JsonLd;
	use sameAs;

	protected $fillable = [
		'query',
		'target',
		'action_id'
	];

	public function getSchemaOrgSchemaAttribute()
	{
		return $this->getSchemaOrgNodeIdentifierSchemaAttribute('SearchAction', true)
			->query($this->query)
			->query_inputs('queryInput', $this->getSchemaOrgQueryInput())
			// Action
		;
	}

	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}

	public function query_inputs()
	{
		return $this->hasMany(\App\Models\QueryInput::class, 'target');
	}
}
