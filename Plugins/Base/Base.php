<?php

declare(strict_types=1);

namespace Plugins\Base;

class Base
{
    private $metricsMapping = [];

    private $metrics = [
        'servertiming' => '[["cache","hit-local"]]',
        'u' => 'https://webinnolab.com/basicrum/boomerangjs/',
        'v' => '%boomerang_version%',
        'sm'=> 'i',
        'rt.si' => 'ebbef961-02d7-47ae-a90f-2a1569193e76-qebsag',
        'rt.ss' => '',
        'rt.sl' => '1',
        'vis.st' => 'visible',
        'ua.plt' => 'Linux x86_64',
        'ua.vnd' => 'Google Inc.',
        'pid' => 'fazczdfs',
        'n' => 1,
    ];

    public function getMetrics(): array
    {
        return $this->metrics;
    }
}
