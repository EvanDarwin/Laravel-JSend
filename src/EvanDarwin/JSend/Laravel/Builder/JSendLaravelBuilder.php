<?php

namespace EvanDarwin\JSend\Laravel\Builder;

use EvanDarwin\JSend\JSendBuilder;

class JSendLaravelBuilder extends JSendBuilder
{
  public function get($statusCode = 200)
  {
    return response(json_encode(parent::get()->getArray()), $statusCode)
            ->header('Content-Type', 'application/json');
  }
}
