<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use App\Events\MyEvent;

class JobPostingController extends Controller
{
    public function field(JobPosting $jobPosting, String $field)
    {
        return $jobPosting->$field ?? 'not found';
    }
}
