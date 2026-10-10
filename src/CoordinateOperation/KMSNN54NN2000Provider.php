<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class KMSNN54NN2000Provider implements GridProvider
{
    public function provideGrid(): KMSGrid
    {
        return new KMSGrid(__DIR__ . '/../../resources/NNTrans2018B.bin');
    }
}
