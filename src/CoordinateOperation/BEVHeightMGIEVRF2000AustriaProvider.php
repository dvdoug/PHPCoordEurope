<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class BEVHeightMGIEVRF2000AustriaProvider implements GridProvider
{
    public function provideGrid(): BEVHeightGrid
    {
        return new BEVHeightGrid(__DIR__ . '/../../resources/GEOID_BESSEL_Oesterreich.csv');
    }
}
