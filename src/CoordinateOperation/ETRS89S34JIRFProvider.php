<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class ETRS89S34JIRFProvider implements GridProvider
{
    public function provideGrid(): NTv2Grid
    {
        return new NTv2Grid(__DIR__ . '/../../resources/s34j_2022.gsb');
    }
}
