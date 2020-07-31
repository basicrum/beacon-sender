<?php
declare(strict_types=1);

namespace Plugins;


abstract class AbstractMetrics
{
    protected $startTime;

    public function __construct()
    {
        $this->startTime = StartTime::get();
    }

    abstract public function generate();
}
