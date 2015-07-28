<?php

/**
 * JSend helper function.
 *
 * @return \EvanDarwin\JSend\Laravel\Builder\JSendLaravelBuilder
 */
function jsend()
{
  $builderClass = config('jsend.builder');

  if (!class_exists($builderClass)) {
    throw new InvalidArgumentException("Invalid JSend builder provided. Class '${builderClass}' not found");
  }

  return new $builderClass();
}