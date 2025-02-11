<?php

namespace Taam\Timeline\Facades;

use Illuminate\Support\Facades\Facade;

class TimelineFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     * @codeCoverageIgnore
     */
    protected static function getFacadeAccessor()
    {
        return 'timeline';
    }
}
