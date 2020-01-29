<?php

use EvanDarwin\JSend\Laravel\Builder\JSendLaravelBuilder;
use EvanDarwin\JSend\Laravel\ServiceProvider;
use Orchestra\Testbench\TestCase;

abstract class LaravelJSend_TestCase extends TestCase {
    protected function getPackageProviders($app): array {
        // Set the default builder
        $app['config']->set('jsend.builder', JSendLaravelBuilder::class);
        return [ServiceProvider::class];
    }
}