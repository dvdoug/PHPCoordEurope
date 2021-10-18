<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GUGiKHeightETRF2000EVRF2007PolandProvider implements GridProvider
{
    private GUGiKHeightGrid $cache;

    public function provideGrid(): GUGiKHeightGrid
    {
        return $this->cache ??= new GUGiKHeightGrid(__DIR__ . '/../../resources/gugik-geoid2011-PL-EVRF2007-NH.txt');
    }
}
