<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class DATETRS89DHHN2016Provider implements GridProvider
{
    public function provideGrid(): DATHeightGrid
    {
        return new DATHeightGrid(__DIR__ . '/../../resources/GCG2016.txt');
    }
}
