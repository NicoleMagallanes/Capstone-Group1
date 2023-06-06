<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class UnsplashServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Client::class, function () {
            return new Client([
                'base_uri' => 'https://api.unsplash.com/',
                'headers' => [
                    'Accept-Version' => 'v1',
                    'Authorization' => 'NDFwFidV0oPEUM7Kw5mjCRZ-rU9Pw4hlsRc50dQyies',
                ],
            ]);
        });
    }
}
