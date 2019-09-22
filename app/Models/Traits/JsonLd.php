<?php

namespace App\Models\Traits;

/**
 * Class UserAttribute.
 */
trait JsonLd
{
    private $jsonLd = [];

	public function getSchemaOrgSchema()
	{
		return $this->getSchemaOrgSchemaAttribute();
	}

	public function getSchemaOrgAttribute()
	{
		return $this->getSchemaOrg($this->getSchemaOrgAsArray(), false, false);
	}

	public function getSchemaOrgEmbeddedAttribute()
	{
		// @todo if embedded script is always false
		return $this->getSchemaOrg($this->getSchemaOrgAsArray(), true, false);
	}

	public function getSchemaOrgScriptAttribute()
	{
		return $this->getSchemaOrg($this->getSchemaOrgAsArray(), false, true);
    }
    	
    public function getSchemaOrgAsArray()
	{
        $person = $this->getSchemaOrgSchema();
		return $person->toArray();
    }
    
    public function getSchemaOrg(array $jsonLd, bool $embedded = false, bool $script = true)
    {
        $this->jsonLd = $jsonLd;
    	$jsonLd = $this->SchemaOrgtoJson($embedded);
    	if ($script) {
    		$jsonLd = "<script type='application/ld+json'>{$jsonLd}</script>";
    	}
    	return $jsonLd;
    }
   
    public function SchemaOrgtoJson(bool $embedded = false)
    {
    	$jsonLd = $this->jsonLd;
		if ($embedded) {
			unset($jsonLd["@context"]);
		}
		return json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }
}