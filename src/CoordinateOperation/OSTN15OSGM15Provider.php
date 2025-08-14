<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class OSTN15OSGM15Provider implements GridProvider
{
    public function provideGrid(): OSTNOSGM15Grid
    {
        return new OSTNOSGM15Grid(__DIR__ . '/../../resources/OSTN15_OSGM15_GB.txt');
    }
}
