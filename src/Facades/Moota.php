<?php

namespace Rimbaborne\Moota\Facades;

use Illuminate\Support\Facades\Facade;

class Moota extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'moota';
    }
}
