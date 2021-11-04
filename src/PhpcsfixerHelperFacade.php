<?php

namespace Shawnveltman\PhpcsfixerHelper;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shawnveltman\PhpcsfixerHelper\Skeleton\SkeletonClass
 */
class PhpcsfixerHelperFacade extends Facade
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
