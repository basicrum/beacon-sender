<?php
declare(strict_types=1);

namespace Plugins\NavigationTimings\Metrics;

use \Plugins\AbstractMetrics;

class NtEncSsize extends AbstractMetrics
{
    public function generate(): int
    {
        return 2599;
    }
}
