<?php

declare(strict_types=1);

namespace DZunke\PanalySymfonyDump\Test;

use DZunke\PanalySymfonyDump\Reporting\SymfonyDump;
use DZunke\PanalySymfonyDump\SymfonyDumpPlugin;
use Panaly\Configuration\ConfigurationFile;
use Panaly\Configuration\RuntimeConfiguration;
use PHPUnit\Framework\TestCase;

class SymfonyDumpPluginTest extends TestCase
{
    public function testThatReportingAreComplete(): void
    {
        $configurationFile    = $this->createMock(ConfigurationFile::class);
        $runtimeConfiguration = $this->createMock(RuntimeConfiguration::class);

        $matcher = $this->exactly(1);

        $runtimeConfiguration->expects($matcher)
            ->method('addReporting')
            ->willReturnCallback(static function (object $metric) use ($matcher): void {
                match ($matcher->numberOfInvocations()) {
                    1 => self::assertInstanceOf(SymfonyDump::class, $metric),
                    default => self::fail('Too much is going on here!'),
                };
            });

        (new SymfonyDumpPlugin())->initialize($configurationFile, $runtimeConfiguration, []);
    }
}
