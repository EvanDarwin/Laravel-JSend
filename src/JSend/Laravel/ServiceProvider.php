<?php

namespace JSend\Laravel;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerHelpers();
    }

    /**
     * Registers custom helper functions
     */
    private function registerHelpers()
    {
        if (!function_exists('jsend')) {
            require_once 'helpers.php';
        }
    }
}