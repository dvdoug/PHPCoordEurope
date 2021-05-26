<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class OSGM15BelfastProvider implements GridProvider
{
    private OSGM15IrelandGrid $cache;

    public function provideGrid(): OSGM15IrelandGrid
    {
        return $this->cache ??= new OSGM15IrelandGrid(__DIR__ . '/../../resources/OSGM15_Belfast.gri');
    }
}
