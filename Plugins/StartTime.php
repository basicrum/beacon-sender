<?php
declare(strict_types=1);

namespace Plugins;


class StartTime
{
    public static function get(): int
    {
        return (int) round(microtime(true) * 1000);
    }
}
