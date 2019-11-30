<?php

namespace App\Models\Traits;

trait image
{
    private function getSchemaOrgimage()
	{
		$image = null;
		$thing = $this->article->creative_work->thing()->get()->first();
		if ($thing) {
			$imageThings = $thing->image()->get();
			foreach ($imageThings as $imageThing) {
				$image[] = $imageThing->image;
			}
		}
		return $image;
	}
}