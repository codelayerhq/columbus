<?php

namespace Codelayer\Columbus\ServiceProviders;

use Codelayer\Columbus\Configs\Config;
use Codelayer\Columbus\Contracts\AddressSearchProvider;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class ColumbusServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $config = __DIR__ . '/../Configs/columbus.php';
        $this->publishes([
            $config => config_path('columbus.php'),
        ]);

        $this->mergeConfigFrom($config, 'columbus');
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AddressSearchProvider::class, function ($app) {
            $provider = $app['config']['columbus']['provider'];
            $keys = $app['config']['columbus']['config'];

            return new $provider(new Client(), new Config($keys['id'], $keys['secret']));
        });

        $this->app->alias(AddressSearchProvider::class, 'columbus');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [AddressSearchProvider::class];
    }
}