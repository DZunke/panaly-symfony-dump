<?php

declare(strict_types=1);

namespace DZunke\PanalySymfonyDump\Test;

use DZunke\PanalySymfonyDump\Reporting\SymfonyDump;
use DZunke\PanalySymfonyDump\SymfonyDumpPlugin;
use Panaly\Plugin\Plugin\Reporting;
use PHPUnit\Framework\TestCase;

use function array_map;

class SymfonyDumpPluginTest extends TestCase
{
    public function testThatReportingAreComplete(): void
    {
        self::assertSame(
            [SymfonyDump::class],
            array_map(
                static fn (Reporting $reporting) => $reporting::class,
                (new SymfonyDumpPlugin())->getAvailableReporting([]),
            ),
        );
    }

    public function testThatThereAreNotMetricsDelivered(): void
    {
        self::assertSame([], (new SymfonyDumpPlugin())->getAvailableMetrics([]));
    }

    public function testThatThereAreNoStorageDelivered(): void
    {
        self::assertSame([], (new SymfonyDumpPlugin())->getAvailableStorages([]));
    }
}
