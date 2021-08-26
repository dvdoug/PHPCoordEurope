<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class KMSETRS89NN1954Provider implements GridProvider
{
    public function provideGrid(): KMSGrid
    {
        return new KMSGrid(__DIR__ . '/../../resources/href2008a.bin');
    }
}
