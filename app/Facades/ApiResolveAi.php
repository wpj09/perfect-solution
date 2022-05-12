<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ApiResolveAi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'api-resolve';
    }
}
