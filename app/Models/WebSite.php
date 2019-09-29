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
		// @todo fetch from db
		$searchAction = Schema::SearchAction()
			->target('https://duodeka.nl/?s={search_term_string}')
			->setProperty('query-input', 'required name=search_term_string')
		;

		$searchActionMobile = Schema::SearchAction()
			->target('https://duodeka.nl/?m={mobile_search_term_string}')
			->setProperty('query-input', 'required name=mobile_search_term_string')
		;
		$searchActions = $searchAction;
		// $searchActions = [$searchAction, $searchActionMobile];
		
		return $this->getSchemaOrgNodeIdentifierSchemaAttribute('WebSite', true)
			->potentialAction($searchActions)
			// Thing
			->name($this->thing->name)
		;
	}

	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}

	public function potentialActions()
	{
		return $this->hasMany(\App\Models\Action::class, 'potentialActions');
	}

	public function action()
	{
		return $this->hasMany(\App\Models\Action::class);
	}
}
