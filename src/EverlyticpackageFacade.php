<?php

namespace Youngoldman\Everlyticpackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Youngoldman\Everlyticpackage\Skeleton\SkeletonClass
 */
class EverlyticpackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'everlyticpackage';
    }
}
