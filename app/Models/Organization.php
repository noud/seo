<?php

namespace App\Models;

class Organization extends \SEO\SchemaOrg\Models\Base\Organization
{
	// @todo move to laravel-seo-schema-org

	public function employees()
	{
		return $this->hasMany(\SEO\SchemaOrg\Models\Employee::class);
	}

	public function founders()
	{
		return $this->hasMany(\SEO\SchemaOrg\Models\Founder::class);
	}
}
