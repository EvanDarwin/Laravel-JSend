<?php

namespace EvanDarwin\JSend\Laravel;

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

  public function boot()
  {
    // Publish our configuration files
    $this->publishes([
        __DIR__ . '/resources/configs/jsend.php' => config_path('jsend.php')
    ], 'config');
  }
}