<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class UnsplashController extends Controller
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getRandomPhoto()
    {
        try {
            $response = $this->client->request('GET', 'photos/random', [
                'query' => [
                    'query' => 'hotel',
                    'orientation' => 'landscape',
                ],
            ]);

            $photoData = json_decode($response->getBody(), true);
            $photoUrl = $photoData['urls']['regular'];

            return view('random_photo', ['photoUrl' => $photoUrl]);
        } catch (\Exception $e) {
            // Handle the error
            return view('error');
        }
    }
}
