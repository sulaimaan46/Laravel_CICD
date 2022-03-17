<?php

namespace Hp\Compose;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hp\Compose\Skeleton\SkeletonClass
 */
class ComposeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'compose';
    }
}
