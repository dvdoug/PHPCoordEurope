<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GeoTiffHREF2025NN2000NorwayProvider implements GridProvider
{
    public function provideGrid(): GeoTiffGrid
    {
        return new GeoTiffGrid(__DIR__ . '/../../resources/no_kv_HREF2025A_NN2000_EUREF89.tif');
    }
}
