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
    public function provideGrid(): GUGiKHeightGrid
    {
        return new GUGiKHeightGrid(__DIR__ . '/../../resources/Model_quasi-geoidy-PL-geoid2021-PL-EVRF2007-NH.txt');
    }
}
