<?php

namespace PauloHortelan\LaraZabbix;

use Illuminate\Support\ServiceProvider;

class LaraZabbixServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/lara-zabbix.php' => config_path('lara-zabbix.php'),
        ], 'config');
        // Load routes, views, migrations, etc.
        // $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        // $this->loadViewsFrom(__DIR__.'/resources/views', 'your-package-name');
        // $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(LaraZabbixClass::class, function ($app) {
            $config = $app['config']['zabbix'];

            return new LaraZabbixClass(
                $config['host'],
                $config['username'],
                $config['password'],
                $config['http_username'],
                $config['http_password'],
                $config['authToken'],
                $config['sslContext'],
                $config['checkSsl']
            );
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/lara-zabbix.php',
            'lara-zabbix'
        );
    }
}
