<?php

namespace App\YouTube;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class YouTubeServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->bind('youtube', function() {
            $client = new Client([
                'base_uri' => 'https://www.googleapis.com/youtube/v3/'
            ]);

            return new YouTubeApi($client);
        });
    }
}