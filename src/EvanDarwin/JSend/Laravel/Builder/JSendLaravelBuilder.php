<?php

namespace EvanDarwin\JSend\Laravel\Builder;

use EvanDarwin\JSend\JSendBuilder;

class JSendLaravelBuilder extends JSendBuilder
{
    public function get()
    {
        $jsendResponse = parent::get();

        return response()->json($jsendResponse->getArray());
    }
}