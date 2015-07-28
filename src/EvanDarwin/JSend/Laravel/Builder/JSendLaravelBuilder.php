<?php

namespace EvanDarwin\JSend\Laravel\Builder;

use EvanDarwin\JSend\JSendBuilder;

class JSendLaravelBuilder extends JSendBuilder
{
  public function get($statusCode = 200)
  {
    return response($statusCode)->json(parent::get()->getArray());
  }
}
