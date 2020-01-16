<?php

namespace App\Models;

use SEO\Models\Traits\Slug;

class BlogPosting extends \SEO\SchemaOrg\Models\BlogPosting
{
    use Slug;

	public function generateSlug() {
		$urlParts = explode('/', $this->url);
		end($urlParts);
		return prev($urlParts);
	}
}
