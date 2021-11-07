<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GUGiKHeightEVRF2007Baltic1986PolandProvider implements GridProvider
{
    public function provideGrid(): GUGiKHeightGrid
    {
        return new GUGiKHeightGrid(__DIR__ . '/../../resources/gugik-evrf2007.txt');
    }
}
