<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GURSHeightSVS2000SVS2010SloveniaProvider implements GridProvider
{
    public function provideGrid(): XYZHeightGrid
    {
        return new XYZHeightGrid(__DIR__ . '/../../resources/SLO-VTP2024.xyz');
    }
}
