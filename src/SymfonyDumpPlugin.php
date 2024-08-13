<?php

declare(strict_types=1);

namespace DZunke\PanalySymfonyDump;

use DZunke\PanalySymfonyDump\Reporting\SymfonyDump;
use Panaly\Configuration\ConfigurationFile;
use Panaly\Configuration\RuntimeConfiguration;
use Panaly\Plugin\Plugin;

final class SymfonyDumpPlugin implements Plugin
{
    /** @inheritDoc */
    public function initialize(
        ConfigurationFile $configurationFile,
        RuntimeConfiguration $runtimeConfiguration,
        array $options,
    ): void {
        $runtimeConfiguration->addReporting(new SymfonyDump());
    }
}
