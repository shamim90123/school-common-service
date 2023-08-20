<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class ApiService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://127.0.0.1:8000', // Replace with your API's base URL
            'timeout'  => 20, // Request timeout in seconds
        ]);
    }

    public function authenticUser()
    {
        try {
            $response = $this->client->get('/token-verification'); // Replace with your API endpoint
            Log::info('response', $response);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            // Handle exception (e.g., log, throw custom exception)
            Log::info('response2');
            return null;
        }
    }
}
