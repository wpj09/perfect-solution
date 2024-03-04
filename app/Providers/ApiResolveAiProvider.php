<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class ApiResolveAiProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('api-resolve', function () {
            return Http::withOptions([
                'verify' => false,
                'base_uri' => 'https://api-resolveai-v1.herokuapp.com/'
            ])->withHeaders([
                'Autorization' => 'Beares ',
            ]);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
