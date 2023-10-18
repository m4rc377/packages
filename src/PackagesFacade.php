<?php

namespace M4rc377\Packages;

use Illuminate\Support\Facades\Facade;

/**
 * @see \M4rc377\Packages\Skeleton\SkeletonClass
 */
class PackagesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'packages';
    }
}
