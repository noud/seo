<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use App\Services\Google\IndexingService;

class GoogleIndexingController extends Controller
{
    private $indexingService;

    public function __construct(IndexingService $indexingService)
    {
        $this->indexingService = $indexingService;
    }

    public function updateURL(JobPosting $jobPosting)
    {
        $this->indexingService->publish($jobPosting->thing->url, "URL_UPDATED");
    }

    public function removeURL(JobPosting $jobPosting)
    {
        $this->indexingService->publish($jobPosting->thing->url, "URL_DELETED");
    }

    public function statusURL(JobPosting $jobPosting)
    {
        $this->indexingService->status($jobPosting->thing->url);
    }
}
