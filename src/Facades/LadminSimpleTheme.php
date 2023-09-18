<?php

namespace LowB\LadminSimpleTheme\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LowB\LadminSimpleTheme\LadminSimpleTheme
 */
class LadminSimpleTheme extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LowB\LadminSimpleTheme\LadminSimpleTheme::class;
    }
}
