<?php

abstract class LaravelJSend_TestCase extends \Orchestra\Testbench\TestCase
{
  protected function getPackageProviders($app)
  {
    // Set the default builder
    $app['config']->set('jsend.builder', '\EvanDarwin\JSend\Laravel\Builder\JSendLaravelBuilder');

    return ['EvanDarwin\JSend\Laravel\ServiceProvider'];
  }
}