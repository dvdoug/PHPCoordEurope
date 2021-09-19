<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class IGNFHeightRGF93v2bNGFIGN69FranceProvider implements GridProvider
{
    private IGNFHeightGrid $cache;

    public function provideGrid(): IGNFHeightGrid
    {
        return $this->cache ??= new IGNFHeightGrid(__DIR__ . '/../../resources/RAF20.tac');
    }
}
