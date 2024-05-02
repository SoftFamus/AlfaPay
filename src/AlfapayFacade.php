<?php

namespace Codesoclock\Alfapay;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codesoclock\Alfapay
 */
class AlfapayFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'alfapay';
    }
}
