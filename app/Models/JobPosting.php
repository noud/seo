<?php

namespace App\Models;

use SEO\Models\Traits\Slug;

class JobPosting extends \SEO\SchemaOrg\Models\JobPosting
{
    use Slug;
	
	public function generateSlug() {
		$urlParts = explode('/', $this->url);
		end($urlParts);
		return prev($urlParts);
	}
}
