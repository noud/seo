<?php

namespace App\Models\Traits;

trait sameAs
{
    private function getSchemaOrgsameAs()
	{
		$sameAs = [];
		$thing = $this->thing()->get()->first();
		if ($thing) {
			$sameAsThings = $thing->same_as()->get();
			foreach ($sameAsThings as $sameAsThing) {
				$sameAs[] = $sameAsThing->url->name;
			}
		}
		return $sameAs;
	}
}