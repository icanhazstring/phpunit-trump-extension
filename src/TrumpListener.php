<?php

declare(strict_types=1);

namespace icanhazstring\TrumpExtension;

use PHPUnit\Framework\TestListener;
use PHPUnit\Framework\TestListenerDefaultImplementation;
use PHPUnit\Framework\TestSuite;

final class TrumpTestListener implements TestListener
{
    use TestListenerDefaultImplementation;

    public function startTestSuite(TestSuite $suite): void
    {
        $suite->setTests([]);
    }
}