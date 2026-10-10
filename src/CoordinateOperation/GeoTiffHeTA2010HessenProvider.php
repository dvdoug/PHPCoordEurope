<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GeoTiffHeTA2010HessenProvider implements GridProvider
{
    public function provideGrid(): GeoTiffGrid
    {
        return new GeoTiffGrid(__DIR__ . '/../../resources/de_hvbg_hessen_HeTA2010.tif');
    }
}
