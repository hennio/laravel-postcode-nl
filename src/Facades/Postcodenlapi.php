<?php

namespace Hennio\Postcodenlapi\Facades;

use Illuminate\Support\Facades\Facade;

class Postcodenlapi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'postcodenl';
    }
}
