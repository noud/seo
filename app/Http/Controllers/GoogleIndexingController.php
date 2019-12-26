<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use Google;
use Google_Service_Indexing_UrlNotification;

class GoogleIndexingController extends Controller
{
    private $indexing;

    public function __construct()
    {
        $this->indexing = Google::make('indexing');
    }
    
    public function updateURL(JobPosting $jobPosting)
    {
        $this->publish($jobPosting->thing->url, "URL_UPDATED");
    }

    public function removeURL(JobPosting $jobPosting)
    {
        $this->publish($jobPosting->thing->url, "URL_DELETED");
    }

    public function statusURL(JobPosting $jobPosting)
    {
        $this->status($jobPosting->thing->url);
    }

    private function status(string $jobPostingURL)
    {
        $responce = $this->indexing->urlNotifications->getMetadata([
            "url" => urlencode($jobPostingURL)
        ]);

        dd($responce);
    }

    private function publish(string $jobPostingURL, string $action)
    {
        $urlNotification = new Google_Service_Indexing_UrlNotification();
        $urlNotification->setUrl($jobPostingURL);
        $urlNotification->setType($action);
        
        $responce = $this->indexing->urlNotifications->publish($urlNotification);

        dd($responce);
    }
}
