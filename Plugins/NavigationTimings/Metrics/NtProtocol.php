<?php
declare(strict_types=1);

namespace Plugins\NavigationTimings\Metrics;

use \Plugins\AbstractMetrics;

class NtProtocol extends AbstractMetrics
{
    public function generate(): string
    {
        return 'h2';
    }
}
