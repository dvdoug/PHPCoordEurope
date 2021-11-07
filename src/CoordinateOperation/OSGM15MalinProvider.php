<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class OSGM15MalinProvider implements GridProvider
{
    public function provideGrid(): OSGM15IrelandGrid
    {
        return new OSGM15IrelandGrid(__DIR__ . '/../../resources/OSGM15_Malin.gri');
    }
}
