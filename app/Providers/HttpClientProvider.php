<?php

namespace weiwait\OnlineChess\Providers;

use Illuminate\Support\ServiceProvider;

class HttpClientProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'httpClient',
            function () {
                return new \GuzzleHttp\Client([
                    'timeout' => 1.0,
                ]);
            }
        );

        $this->app->bind(
            \GuzzleHttp\ClientInterface::class,
            \GuzzleHttp\Client::class
        );
    }
}
