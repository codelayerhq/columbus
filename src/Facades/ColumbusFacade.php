<?php

namespace Codelayer\Columbus\Facades;

use Illuminate\Support\Facades\Facade;

class ColumbusFacade extends Facade
{
    /**
     * Get the facade accessor.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'columbus';
    }

}