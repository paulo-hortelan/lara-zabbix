<?php

namespace PauloHortelan\LaraZabbix\Facades;

use Illuminate\Support\Facades\Facade;

class LaraZabbixFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'PauloHortelan\\LaraZabbix\\LaraZabbixClass';
    }
}
