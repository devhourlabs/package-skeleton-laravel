<?php

namespace DevHour\Skeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Devhour\Skeleton\Skeleton
 */
class SkeletonFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
