<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GeoTiffFVR09FaroeProvider implements GridProvider
{
    public function provideGrid(): GeoTiffGrid
    {
        return new GeoTiffGrid(__DIR__ . '/../../resources/dk_sdfe_fvr09.tif');
    }
}
