<?php

namespace PauloHortelan\LaraZabbix\Facades;

use Illuminate\Support\Facades\Facade;
use PauloHortelan\LaraZabbix\LaraZabbixClass;

class LaraZabbixFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return LaraZabbixClass::class;
    }
}