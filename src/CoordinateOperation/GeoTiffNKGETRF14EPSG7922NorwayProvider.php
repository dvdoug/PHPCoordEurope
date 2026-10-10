<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GeoTiffNKGETRF14EPSG7922NorwayProvider implements GridProvider
{
    public function provideGrid(): GeoTiffGrid
    {
        return new GeoTiffGrid(__DIR__ . '/../../resources/no_kv_NKGETRF14_EPSG7922_2000.tif');
    }
}
