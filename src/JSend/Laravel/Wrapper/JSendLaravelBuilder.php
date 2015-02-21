<?php

namespace JSend\Laravel\Wrapper;

use Illuminate\Support\Facades\Response;
use JSend\JSendBuilder;

class JSendLaravelBuilder extends JSendBuilder
{
    public function get()
    {
        $jsendResponse = parent::get();

        return \Response::json($jsendResponse->getArray());
    }
}