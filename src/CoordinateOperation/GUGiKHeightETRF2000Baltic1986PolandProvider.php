<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GUGiKHeightETRF2000Baltic1986PolandProvider implements GridProvider
{
    public function provideGrid(): GUGiKHeightGrid
    {
        return new GUGiKHeightGrid(__DIR__ . '/../../resources/gugik-geoid2011-PL-KRON86-NH.txt');
    }
}
