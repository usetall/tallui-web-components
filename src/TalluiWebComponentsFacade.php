<?php

namespace Tallui;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tallui\TalluiWebComponents
 */
class TalluiWebComponentsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tallui-web-components';
    }
}
