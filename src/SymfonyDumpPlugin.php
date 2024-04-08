<?php

declare(strict_types=1);

namespace DZunke\PanalySymfonyDump;

use DZunke\PanalySymfonyDump\Reporting\SymfonyDump;
use Panaly\Plugin\BasePlugin;

final class SymfonyDumpPlugin extends BasePlugin
{
    /** @inheritDoc */
    public function getAvailableReporting(array $options): array
    {
        return [new SymfonyDump()];
    }
}
