<?php

namespace Shawnveltman\PhpcsfixerHelper\Facades;

use Illuminate\Support\Facades\Facade;

class PhpcsfixerHelper extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'phpcsfixer-helper';
    }
}
