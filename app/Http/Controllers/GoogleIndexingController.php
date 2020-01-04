<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use GoogleIndexing\Services\IndexingService;

class GoogleIndexingController extends Controller
{
    private $indexingService;

    public function __construct(IndexingService $indexingService)
    {
        $this->indexingService = $indexingService;
    }

    public function updateURL(JobPosting $jobPosting)
    {
        $this->indexingService->update($jobPosting->url);
    }

    public function removeURL(JobPosting $jobPosting)
    {
        $this->indexingService->remove($jobPosting->url);
    }

    public function statusURL(JobPosting $jobPosting)
    {
        $this->indexingService->status($jobPosting->url);
    }
}
