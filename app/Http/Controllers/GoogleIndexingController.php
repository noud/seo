<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use App\Events\MyEvent;
use App\Services\Google\IndexingRequest;

class GoogleIndexingController extends Controller
{
    private $indexingRequest;

    public function __construct(IndexingRequest $indexingRequest)
    {
        $this->indexingRequest = $indexingRequest;
    }
    
    public function updateURL(JobPosting $jobPosting)
    {
        return $this->indexingRequest->updateURL($jobPosting);
    }

    public function removeURL(JobPosting $jobPosting)
    {
        return $this->indexingRequest->removeURL($jobPosting);
    }

    public function status(JobPosting $jobPosting)
    {
        return $this->indexingRequest->metadata($jobPosting);
    }
}
