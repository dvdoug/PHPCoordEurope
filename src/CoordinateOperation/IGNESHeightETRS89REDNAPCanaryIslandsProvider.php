<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class IGNESHeightETRS89REDNAPCanaryIslandsProvider implements GridProvider
{
    public function provideGrid(): IGNESHeightGrid
    {
        return new IGNESHeightGrid(__DIR__ . '/../../resources/EGM08_REDNAP_Canarias.txt');
    }
}
