<?php

namespace App\Models;

class JobPostng extends \App\Models\Base\JobPostng
{
	protected $fillable = [
		'base_salary_id',
		'employment_type',
		'hiring_organization_id',
		'job_location'
	];
}
