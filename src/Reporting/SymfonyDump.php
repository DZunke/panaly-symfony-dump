<?php

declare(strict_types=1);

namespace DZunke\PanalySymfonyDump\Reporting;

use Panaly\Plugin\Plugin\Reporting;
use Panaly\Result\Result;
use Symfony\Component\VarDumper\VarDumper;

final class SymfonyDump implements Reporting
{
    public function getIdentifier(): string
    {
        return 'symfony_dump';
    }

    public function report(Result $result, array $options): void
    {
        VarDumper::dump($result);
    }
}
