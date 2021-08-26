<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class KMSETRS89NN2000Provider implements GridProvider
{
    public function provideGrid(): KMSGrid
    {
        return new KMSGrid(__DIR__ . '/../../resources/HREF2018B_NN2000_EUREF89.bin');
    }
}
