<?php

namespace  Tallui\WebComponents;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tallui\WebComponents\TalluiWebComponents
 */
class TalluiWebComponentsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tallui-web-components';
    }
}
