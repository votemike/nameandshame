<?php

namespace App\YouTube;

use Config;
use GuzzleHttp\Client;

class YouTubeApi
{
    protected $client;

    public function __construct(Client $client) {
        $this->client = $client;
    }

    public function getVideoInfo($videoId, $parts, $fields = null) {
        $response = $this->client->get('videos', ['query' => $this->createVideoQuery($videoId, $parts, $fields)]);

        return json_decode($response->getBody());
    }

    public function isEmbeddable($videoId) {
        $response = $this->getVideoInfo($videoId, ['status'], ['items/status/embeddable']);

        if(empty($response->items)) {
            return false;
        }

        return $response->items[0]->status->embeddable;
    }

    private function createVideoQuery($videoId, $parts, $fields = null) {
        $query = [];
        $query['id'] = $videoId;
        $query['key'] = Config::get('youtube.private_key');
        $query['part'] = implode(',', $parts);
        if($fields) {
            $query['fields'] = implode(',', $fields);
        }

        return http_build_query($query);
    }
}