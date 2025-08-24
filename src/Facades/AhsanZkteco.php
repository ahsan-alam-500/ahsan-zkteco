<?php

namespace Ahsan\AhsanZkteco\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ahsan\AhsanZkteco\AhsanZkteco
 */
class AhsanZkteco extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ahsan\AhsanZkteco\AhsanZkteco::class;
    }
}
