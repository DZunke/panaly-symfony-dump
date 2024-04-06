<?php

declare(strict_types=1);

namespace DZunke\PanalySymfonyDump\Test\Reporting;

use DZunke\PanalySymfonyDump\Reporting\SymfonyDump;
use Panaly\Result\Result;
use PHPUnit\Framework\TestCase;
use Symfony\Component\VarDumper\Dumper\CliDumper;

use function ob_get_clean;
use function ob_start;

class SymfonyDumpTest extends TestCase
{
    public function testThatIdentifierIsCorrect(): void
    {
        self::assertSame(
            'symfony_dump',
            (new SymfonyDump())->getIdentifier(),
        );
    }

    public function testThatTheReportIsDumping(): void
    {
        // Overwrite the output to catch it in output buffering for a string check
        CliDumper::$defaultOutput = 'php://output';

        ob_start();
        (new SymfonyDump())->report(new Result(), []);
        $dump = ob_get_clean();

        self::assertIsString($dump);
        self::assertStringContainsString(Result::class, $dump);
    }
}
