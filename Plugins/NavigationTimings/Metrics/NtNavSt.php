<?php
declare(strict_types=1);

namespace Plugins\NavigationTimings\Metrics;

use Plugins\AbstractMetrics;

class NtNavSt extends AbstractMetrics
{
    public function generate(): int
    {
        return $this->startTime;
    }
}
