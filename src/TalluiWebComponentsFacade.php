<?php

namespace Usetall\TalluiWebComponents;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Usetall\TalluiWebComponents\TalluiWebComponents
 */
class TalluiWebComponentsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tallui-web-components';
    }
}
