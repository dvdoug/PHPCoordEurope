<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class IGNESHeightETRS89REDNAPSpainProvider implements GridProvider
{
    private IGNESHeightGrid $cache;

    public function provideGrid(): IGNESHeightGrid
    {
        return $this->cache ??= new IGNESHeightGrid(__DIR__ . '/../../resources/EGM08_REDNAP.txt');
    }
}
