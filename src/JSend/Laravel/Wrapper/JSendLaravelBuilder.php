<?php

namespace JSend\Laravel\Wrapper;

use JSend\JSendBuilder;

class JSendLaravelBuilder extends JSendBuilder
{
    public function get()
    {
        return \Response::json(parent::get());
    }
}