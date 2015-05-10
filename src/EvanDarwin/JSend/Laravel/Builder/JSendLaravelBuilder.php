<?php

namespace EvanDarwin\JSend\Laravel\Builder;

use EvanDarwin\JSend\JSendBuilder;

class JSendLaravelBuilder extends JSendBuilder
{
    public function get()
    {
        return response()->json(parent::get()->getArray());
    }
}
