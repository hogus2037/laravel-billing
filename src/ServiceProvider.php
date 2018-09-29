<?php

namespace Hogus\LaravelBilling;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Omnipay\Common\GatewayFactory;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../config/config.php';
        $this->publishes([$configPath => config_path('laravel-billing.php')], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Billing::class,function ($app){
           return new Billing($app->config->get('laravel-billing',[]));
        });
        $this->app->alias(Billing::class, 'billing');

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Billing::class,'billing'];
    }
}
