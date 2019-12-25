<?php

namespace App\Services\Google;

use App\Models\JobPosting;
// use Google_Client;
use Google;

class IndexingRequest
{
    const SERVICE_URL = "https://indexing.googleapis.com/v3/urlNotifications";

    /**
     * Client.
     *
     * @var string
     */
    private $client;

    /**
     * HTTP Client.
     *
     * @var string
     */
    private $httpClient;

    public function __construct()
    {
        $this->client = Google::getClient();
    }

    public function updateURL(JobPosting $jobPosting)
    {
        $this->publish($jobPosting->thing->url, "URL_UPDATED");
    }

    public function removeURL(JobPosting $jobPosting)
    {
        $this->publish($jobPosting->thing->url, "URL_DELETED");
    }

    public function getNotificationStatus(JobPosting $jobPosting)
    {
        $this->metadata($jobPosting->thing->url);
    }

    public function authorize()
    {
        // Get a Guzzle HTTP Client
        $this->httpClient = $this->client->authorize();
    }

    public function publish(string $jobPostingURL, string $action)
    {
        $this->authorize();
        $endpoint = self::SERVICE_URL . ':publish';
        
        // Define contents here. The structure of the content is described in the next step.
        $content = '{
          \"url\": \"' . $jobPostingURL . '\",
          \"type\": \"' . $action . '"
        }';

        $response = $this->httpClient->post($endpoint, [ 'body' => $content ]);
        return $this->handleResponse($response);
    }

    public function metadata(string $jobPostingURL)
    {
        $this->authorize();
        $endpoint = self::SERVICE_URL . '/metadata';
        
        $response = $this->httpClient->get($endpoint, [ 'query' => ["url" => urlencode($jobPostingURL) ]]);
        return $this->handleResponse($response);
    }

    private function handleResponse($response)
    {
        $status_code = $response->getStatusCode();
        $status_reason = $response->getReasonPhrase();
        
        // dump($status_code);
        // dump($status_reason);
        switch ($status_code) {
            case 400:
                $response = $status_code . ' ' . $status_reason;
        }
        dd($response);

        return $response;
    }
}
