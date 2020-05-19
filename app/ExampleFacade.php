<?php

namespace App;

use Illuminate\Support\Facades\Facade;

/**
 * Class ExampleFacade
 * @package App
 */
class ExampleFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return "example";
    }
}
