<?php

namespace EvanDarwin\JSend\Laravel\Builder;

use EvanDarwin\JSend\JSendBuilder;

class JSendLaravelBuilder extends JSendBuilder
{
    public function __toString()
    {
        return json_encode(parent::get()->getArray());
    }

    public function get()
    {
        return $this->__toString();
    }
}