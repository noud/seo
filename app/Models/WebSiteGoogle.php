<?php

namespace App\Models;

use App\Models\Traits\JsonLd;
use App\Models\Traits\actions;
use Spatie\SchemaOrg\Schema;

class WebSiteGoogle extends \App\Models\Base\WebSiteGoogle
{
	use JsonLd;
	use actions;

	protected $fillable = [
		'thing_id'
	];

	public function getSchemaOrgSchemaAttribute()
	{
		$searchActions = $this->getSchemaOrgpotentialAction();

		return $this->getSchemaOrgNodeIdentifierSchemaAttribute('WebSite', true)
			->potentialAction($searchActions)
			// Thing
			->name($this->site->thing->name)
		;
	}

    private function getSchemaOrgpotentialAction()
	{
		$potentialAction = null;
		$potentialActionsGoogle = $this->potential_action_googles()->get();
		foreach ($potentialActionsGoogle as $potentialActionsGoogle) {
			$searchActionGoogle = $potentialActionsGoogle->search_action_google()->get()->first();
			$queryInput = $searchActionGoogle->property_value_specification()->get()->first();
			$potentialAction[] = Schema::SearchAction()
				->target($searchActionGoogle->target)
				->setProperty('query-input', ($queryInput->value_required ? 'required ' : '') . 'name='.$queryInput->value_name)
			;
		}
		if (count($potentialAction) === 1) {
			$potentialAction = $potentialAction[0];
		}
		return $potentialAction;
	}
	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}

	public function potentialActions()
	{
		return $this->hasMany(\App\Models\Action::class, 'potentialActions');
	}
}
