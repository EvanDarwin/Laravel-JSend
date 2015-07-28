<?php

$loaderPath = dirname(__DIR__) . '/vendor/autoload.php';

if (!file_exists($loaderPath))
  die("Please run 'composer install' before running tests" . PHP_EOL);

require $loaderPath;