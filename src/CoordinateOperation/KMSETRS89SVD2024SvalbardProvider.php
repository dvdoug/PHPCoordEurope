<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class KMSETRS89SVD2024SvalbardProvider implements GridProvider
{
    public function provideGrid(): KMSGrid
    {
        return new KMSGrid(__DIR__ . '/../../resources/Href_Svalbard_EUREF89_EGG2015_2024.bin');
    }
}
