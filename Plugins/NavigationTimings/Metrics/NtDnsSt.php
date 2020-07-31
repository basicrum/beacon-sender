<?php
declare(strict_types=1);

namespace Plugins\NavigationTimings\Metrics;

use Plugins\AbstractMetrics;

class NtDnsSt extends AbstractMetrics
{
    /**
     * @return int
     */
    public function generate(): int
    {
        return $this->startTime + 2;
    }
}
