<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class BEVHeightGHAEVRF2000AustriaProvider implements GridProvider
{
    public function provideGrid(): BEVHeightGrid
    {
        return new BEVHeightGrid(__DIR__ . '/../../resources/GV_HoehenGrid_V1.csv');
    }
}
